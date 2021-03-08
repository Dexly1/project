<?php

namespace App\Http\Controllers;
use Auth;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\Employee;

class MainController extends Controller
{
    public function main()
    {
        return view('main');
    }
//
//    public function sotr()
//    {
//        if (Auth::check()) {
//            $employs = Employee::all();
//            return view('sotr', compact('employs'));
//        }
//        else return view('auth.login');
//    }

    public function index(Request $request)
    {
        if (Auth::check()) {
            if ($request->c != null || $request->s != null) {
                $c = $request->c;
                $sch = $request->s;
                $pag = false;
                $employs = Employee::where("{$c}", 'LIKE', "%{$sch}%")->orderBy($c)->get();
                return view('employs.index', compact('employs', 'pag'));
            }
            else
            {
                $pag = true;
                $employs = Employee::orderBy('id')->paginate(10);
                return view('employs.index', compact('employs', 'pag'));
            }
        }
        else return view('auth.login');
    }

    public function show($id)
    {
        if (Auth::check()) {
            $employ = Employee::find($id);
            $chief = Employee::find($employ->chief);
            return view('employs.show', compact('employ', 'chief'));
        }
        else return view('auth.login');
    }

    public function create(Request $request)
    {
        return view('employs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'first_name' => 'required',
           'last_name' => 'required',
           'position' => 'required',
           'emp_date' => 'required',
           'wage' => 'required',
           'chief' => 'required',
        ]);
        Employee::create($request->all());
        return redirect()->route('employs.index')->with('success', 'yep.');
    }

    public function edit($id)
    {
        $employ = Employee::find($id);
        return view('employs.edit', compact('employ'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'position' => 'required',
            'emp_date' => 'required',
            'wage' => 'required',
            'chief' => 'required',
        ]);
        $employ = Employee::find($id);
        $employ->first_name = $request->get('first_name');
        $employ->last_name = $request->get('last_name');
        $employ->position = $request->get('position');
        $employ->emp_date = $request->get('emp_date');
        $employ->wage = $request->get('wage');
        $employ->chief = $request->get('chief');
        $employ->save();

        return redirect()->route('employs.index')->with('success', 'yep.');
    }

    public function destroy($id)
    {
        $employ = Employee::find($id);
        $employ->delete();
        return redirect()->route('employs.index')->with('success', 'yep.');
    }

    public function search(Request $request)
    {
        if (Auth::check()) {
            $c = $request->c;
            $sch = $request->s;
            $employs = Employee::where("{$c}", 'LIKE', "%{$sch}%")->orderBy($c)->paginate(10)->get();
            return view('employs.index', compact('employs'));
        }
        else return view('auth.login');
    }

}
