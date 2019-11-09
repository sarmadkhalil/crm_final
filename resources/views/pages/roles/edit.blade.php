




1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
@extends('layout.app')
 
@section('title', ' | Edit role')
 
@section('content')
 
 
    <section class="content-header">
        <h1>
            Edit role #{{ $role->id }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ url('/admin/roles') }}">Roles</a></li>
            <li class="active">Edit</li>
        </ol>
    </section>
 
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/admin/roles') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
 
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
 
                        <form method="POST" action="{{ url('/admin/roles/' . $role->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
 
                            @include ('pages.roles.form', ['formMode' => 'edit'])
 
                        </form>
 
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
 
@section('scripts')
 
    <script src="{{ url('theme/views/roles/form.js') }}" type="text/javascript"></script>
 
@endsection