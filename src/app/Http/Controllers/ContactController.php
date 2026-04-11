<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function admin(Request $request)
    {
        $query = Contact::with('category');

        // キーワード検索（姓・名・メールアドレス）
        if ($request->filled('keyword')) {
            $keyword = $request->keyword;

            $query->where(function ($q) use ($keyword) {
                $q->where('last_name', 'like', '%' . $keyword . '%')
                  ->orWhere('first_name', 'like', '%' . $keyword . '%')
                  ->orWhere('email', 'like', '%' . $keyword . '%');
            });
        }

        // 性別検索
        if ($request->filled('gender')) {
            $query->where('gender', $request->gender);
        }

        // お問い合わせ種類検索
        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('content', $request->category);
            });
        }

        // 日付検索
        if ($request->filled('date')) {
            $query->whereDate('created_at', $request->date);
        }

        $contacts = $query->paginate(7)->appends($request->query());

        return view('admin', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json(['message' => 'データが見つかりません'], 404);
        }

        $contact->delete();

        return response()->json(['message' => '削除しました']);
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only([
            'last_name',
            'first_name',
            'gender',
            'email',
            'tel1',
            'tel2',
            'tel3',
            'address',
            'building',
            'category_id',
            'detail'
        ]);

        $category = Category::find($request->category_id);

        return view('confirm', compact('contact', 'category'));
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->last_name = $request->input('last_name');
        $contact->first_name = $request->input('first_name');
        $contact->gender = $request->input('gender');
        $contact->email = $request->input('email');
        $contact->tel = $request->input('tel1') . $request->input('tel2') . $request->input('tel3');
        $contact->address = $request->input('address');
        $contact->building = $request->input('building');
        $contact->category_id = $request->input('category_id');
        $contact->detail = $request->input('detail');
        $contact->save();

        return redirect()->route('thanks');
    }

    public function show($id)
    {
        return response()->json(Contact::with('category')->find($id));
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }
}