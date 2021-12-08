<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::search(request('search'))
            ->paginate(10)
            ->appends(['search' => request('search')]);

        return view('employee', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"          => "required",
            "ic"            => "required",
            "address"       => "required",
            "phone_num"     => "required",
            "position"      => "required",
            "department"    => "required",
            "retiring_num"  => "required",
            "retiring_date" => "required",
            "retiring_type" => "required",
            "image"         => "mimes:jpg,png,jpeg",
        ]);

        $filename = "";

        if ($request->hasFile('image')) {
            $filename = date('mdYHis') . uniqid() . '.' . $request->image->extension();
            $request->image->storeAs('images', $filename, 'public');
        }

        $request = $request->all();

        $totalWife = 0;
        $totalChild = 0;

        $wife = [];
        $child = [];

        for ($i = 0; $i < count($request); $i++) {
            if (array_key_exists("name_wife_" . $i + 1, $request)) {
                $totalWife++;
            }
            if (array_key_exists("name_child_" . $i + 1, $request)) {
                $totalChild++;
            }
        }

        if ($totalWife) {
            for ($i = 0; $i < $totalWife; $i++) {
                $wife[$i]['name'] = $request['name_wife_' . $i + 1];
                $wife[$i]['ic'] = $request['ic_wife_' . $i + 1];
                $wife[$i]['phone_num'] = $request['phone_num_wife_' . $i + 1];
            }
        }

        if ($totalChild) {
            for ($i = 0; $i < $totalChild; $i++) {
                $child[$i]['name'] = $request['name_child_' . $i + 1];
                $child[$i]['ic'] = $request['ic_child_' . $i + 1];
                $child[$i]['phone_num'] = $request['phone_num_child_' . $i + 1];
            }
        }

        $data = array(
            'name'          => $request['name'],
            'ic'            => $request['ic'],
            'address'       => $request['address'],
            'phone_num'     => $request['phone_num'],
            'position'      => $request['position'],
            'department'    => $request['department'],
            'retiring_num'  => $request['retiring_num'],
            'retiring_date' => $request['retiring_date'],
            'retiring_type' => $request['retiring_type'],
            'image'         => $filename,
            'wife'          => json_encode($wife),
            'child'         => json_encode($child),
        );


        if (!Employee::create($data)) {
            return redirect()->route('employee.index')->with('failed', 'Gagal! Sila cuba sebentar lagi');
        } else {
            return redirect()->route('employee.index')->with('success', 'Berjaya ditambah!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('show_employee', [
            'employee' => $employee,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('edit_employee', [
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            "name"          => "required",
            "ic"            => "required",
            "address"       => "required",
            "phone_num"     => "required",
            "position"      => "required",
            "department"    => "required",
            "retiring_num"  => "required",
            "retiring_date" => "required",
            "retiring_type" => "required",
            "image"         => "mimes:jpg,png,jpeg",
        ]);

        $filename = "";

        if ($request->hasFile('image')) {
            $filename = date('mdYHis') . uniqid() . '.' . $request->image->extension();
            $request->image->storeAs('images', $filename, 'public');
        }

        $request = $request->all();

        $totalWife = 0;
        $totalChild = 0;

        $wife = [];
        $child = [];

        for ($i = 0; $i < count($request); $i++) {
            if (array_key_exists("name_wife_" . $i + 1, $request)) {
                $totalWife++;
            }
            if (array_key_exists("name_child_" . $i + 1, $request)) {
                $totalChild++;
            }
        }

        if ($totalWife) {
            for ($i = 0; $i < $totalWife; $i++) {
                $wife[$i]['name'] = $request['name_wife_' . $i + 1];
                $wife[$i]['ic'] = $request['ic_wife_' . $i + 1];
                $wife[$i]['phone_num'] = $request['phone_num_wife_' . $i + 1];
            }
        }

        if ($totalChild) {
            for ($i = 0; $i < $totalChild; $i++) {
                $child[$i]['name'] = $request['name_child_' . $i + 1];
                $child[$i]['ic'] = $request['ic_child_' . $i + 1];
                $child[$i]['phone_num'] = $request['phone_num_child_' . $i + 1];
            }
        }

        $target = Employee::find($employee->id);
        $data = array(
            'name'          => $request['name'],
            'ic'            => $request['ic'],
            'address'       => $request['address'],
            'phone_num'     => $request['phone_num'],
            'position'      => $request['position'],
            'department'    => $request['department'],
            'retiring_num'  => $request['retiring_num'],
            'retiring_date' => $request['retiring_date'],
            'retiring_type' => $request['retiring_type'],
            'image'         => !empty($filename) ? $filename : $employee->image,
            'wife'          => ($wife) ? json_encode($wife) : $employee->wife,
            'child'         => ($child) ? json_encode($child) : $employee->child,
        );

        if (!$target->update($data)) {
            return back()->with('failed', 'Gagal! Sila cuba sebentar lagi');
        } else {
            return redirect()->route('employee.index')->with('success', 'Berjaya disunting!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $target = Employee::find($employee->id);

        if (!$target->delete()) {
            return back()->with('failed', 'Pemadaman gagal! Sila cuba sebentar lagi');
        } else {
            return back()->with('success', 'Berjaya dipadam!');
        }
    }
}