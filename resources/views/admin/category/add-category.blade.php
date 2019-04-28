@extends('admin.master.master')

@section('title')
    Dashboard
@endsection

<style>
    @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
    @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    *, *::before, *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    p:not(:last-child) {
        margin: 0 0 20px;
    }

    main {
        max-width: 800px;
        padding: 40px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        background: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    section {
        display: none;
        padding: 20px 0 0;
        border-top: 1px solid #abc;
    }

    input {
        display: none;
    }

    label {
        display: inline-block;
        margin: 0 0 -1px;
        padding: 15px 25px;
        font-weight: 600;
        text-align: center;
        color: #abc;
        border: 1px solid transparent;
    }

    label:before {
        font-family: fontawesome;
        font-weight: normal;
        margin-right: 10px;
    }

    label[for*='1']:before {
        content: '\f1cb';
    }

    label[for*='2']:before {
        content: '\f17d';
    }

    label[for*='3']:before {
        content: '\f16c';
    }

    label[for*='4']:before {
        content: '\f171';
    }

    label:hover {
        color: #789;
        cursor: pointer;
    }

    input:checked + label {
        color: #0af;
        border: 1px solid #abc;
        border-top: 2px solid #0af;
        border-bottom: 1px solid #fff;
    }

    #tab1:checked ~ #content1,
    #tab2:checked ~ #content2,
    #tab3:checked ~ #content3,
    #tab4:checked ~ #content4 {
        display: block;
    }

    @media screen and (max-width: 800px) {
        label {
            font-size: 0;
        }

        label:before {
            margin: 0;
            font-size: 18px;
        }
    }
    @media screen and (max-width: 500px) {
        label {
            padding: 15px;
        }
    }

</style>

@section('content')
<br/>
<br/>
<br/>
<br/>
<div class="content">
    <div class="container-fluid">

        <main>

            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1">Codepen</label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2">Dribbble</label>

            <input id="tab3" type="radio" name="tabs">
            <label for="tab3">Stack Overflow</label>

            <input id="tab4" type="radio" name="tabs">
            <label for="tab4">Bitbucket</label>

            <section id="content1">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                {{Session::get('message')}}
                                <form action="{{ route('add-category') }}" method="POST" class="form-horizontal form">
                                    {{ csrf_field() }}
                                    <br/>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Category Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="category_name" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Category For</label>
                                        <div class="col-md-9">
                                            <input type="text" name="category_for" class="form-control" list="gender">
                                            <datalist id="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </datalist>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Publication status</label><br/>
                                        <div class="col-md-9 radio">
                                            <label><input type="radio" name="publication_status" value="1"/> Published</label>
                                            <label><input type="radio" name="publication_status" value="0"/> Unpublished</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-md-offset-3">
                                            <input type="submit" name="btn" value="Save Category Info" class="btn btn-success btn-block"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </section>

            <section id="content2">

            </section>

            <section id="content3">

            </section>

            <section id="content4">

            </section>

        </main>


    </div>
    </div>

@endsection