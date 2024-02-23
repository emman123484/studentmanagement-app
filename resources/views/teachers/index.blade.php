@extends('layouts.app')
@section('content')



                <div class="card">
                    <div class="border-solid border-2 border-red-500 card-header">
                        <h2 class="text-2xl">Teachers Application</h2>
                    </div>
                    <div class="bg-gray-400 shadow-2xl card-body">
                        <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-sm" title="Add New Teacher">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="border-separate border border-slate-900 table">
                                <thead>
                                    <tr>
                                        <th class="border-separate border border-slate-900">#</th>
                                        <th class="border-separate border border-slate-900">Name</th>
                                        <th class="border-separate border border-slate-900">Address</th>
                                        <th class="border-separate border border-slate-900">Mobile</th>
                                        <th class="border-separate border border-slate-900">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($teachers as $teachers)
                                    <tr>
                                        <td class="border-separate border border-slate-900">{{ $loop->iteration }}</td>
                                        <td class="border-separate border border-slate-900">{{ $teachers->name }}</td>
                                        <td class="border-separate border border-slate-900">{{ $teachers->address }}</td>
                                        <td class="border-separate border border-slate-900">{{ $teachers->mobile }}</td>

                                        <td class="border-separate border border-slate-900">
                                            <a href="{{ url('/teachers/' . $teachers->id) }}" title="View Teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/teachers/' . $teachers->id . '/edit') }}" title="Edit Teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/teachers' . '/' . $teachers->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn 'sm': '576px' bg-red-500 hover:bg-red-600 btn-danger btn-sm" title="Delete Teacher" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

@endsection
