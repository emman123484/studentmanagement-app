@extends('layouts.app')
@section('content')



                <div class=" card">
                    <div class=" border-solid border-2 border-red-500 card-header">
                        <h2 class="text-2xl ">Cources Application</h2>
                    </div>
                    <div class=" bg-gray-400  card-body">
                        <a href="{{ url('/cources/create') }}" class=" btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class=" border-separate border border-slate-900 table">
                                <thead>
                                    <tr>
                                        <th class="border-separate border border-slate-900">#</th>
                                        <th class="border-separate border border-slate-900">Name</th>
                                        <th class="border-separate border border-slate-900">Syllabus</th>
                                        <th class="border-separate border border-slate-900">Duration</th>
                                        <th class="border-separate border border-slate-900">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cources as $cources)
                                    <tr>
                                        <td class="border-separate border border-slate-900">{{ $loop->iteration }}</td>
                                        <td class="border-separate border border-slate-900">{{ $cources->name }}</td>
                                        <td class="border-separate border border-slate-900">{{ $cources->syllabus }}</td>
                                        <td class="border-separate border border-slate-900">{{ $cources->duration }}</td>

                                        <td class="border-separate border border-slate-900">
                                            <a href="{{ url('/cources/' . $cources->id) }}" title="View Cource"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/cources/' . $cources->id . '/edit') }}" title="Edit Cource"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/cources' . '/' . $cources->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="  bg-red-500 hover:bg-red-600 btn btn-danger btn-sm" title="Delete Cources" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
