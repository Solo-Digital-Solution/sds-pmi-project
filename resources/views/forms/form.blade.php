@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-center_focus_strong"></i>
            </div>
            <div class="page-title">
                <h5>Form Kejadian</h5>
                <h6 class="sub-heading">Lengkapi formulir berikut untuk menambahkan kejadian baru.</h6>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="right-actions">
                <span class="last-login">Last Login: 5 minutes ago</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- Row start -->
<div class="row gutters">

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="inputName">Input Type</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Enter full name">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="inputEmail">Input Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="inputPwd">Password</label>
                            <input type="password" class="form-control" id="inputPwd" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="inputReadOnly">Readonly Input</label>
                            <input class="form-control" id="inputReadOnly" type="text" placeholder="Readonly input" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="disabledInput">Disabled Input</label>
                            <input type="text" id="disabledInput" class="form-control" placeholder="Disabled input" disabled>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <input class="form-control is-valid" placeholder="Input - Is Valid" type="text">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <input class="form-control is-invalid" placeholder="Input - Is Invalid" type="text">
                            <div class="invalid-feedback">This is required</div>
                        </div>
                    </div>
                </div>

                <div class="row gutters">
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <textarea class="form-control is-valid" rows="2" placeholder="Valid state"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <textarea class="form-control is-invalid" rows="2" placeholder="Invalid state"></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Input sizes</div>
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Select box sizes</div>
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <select class="form-control form-control-lg">
                                <option>Large select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Default select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <select class="form-control form-control-sm">
                                <option>Small select</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Readonly plain text</div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Readonly inline form</div>
            <div class="card-body">

                <div class="form-inline">
                    <div class="form-group mb-2">
                        <label for="staticEmail2" class="sr-only">Email</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Horizontal form label sizing</div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Email</label>
                    <div class="col-sm-11">
                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-1 col-form-label">Email</label>
                    <div class="col-sm-11">
                        <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-1 col-form-label col-form-label-lg">Email</label>
                    <div class="col-sm-11">
                        <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Textarea</div>
            <div class="card-body">

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Help text</div>
            <div class="card-body">

                <div class="form-group">
                    <label for="inputPassword5">Password</label>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                        spaces, special characters, or emoji.
                    </small>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Inline help text</div>
            <div class="card-body">

                <form class="form-inline">
                    <div class="form-group">
                        <label for="inputPassword6">Password</label>
                        <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                        <small id="passwordHelpInline" class="text-muted">
                            Must be 8-20 characters long.
                        </small>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Inline forms</div>
            <div class="card-body">

                <div class="form-inline">
                    <label class="sr-only" for="inlineFormInputName2">Name</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                    </div>
                    <div class="form-check mb-2 mr-sm-2">
                        <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                        <label class="form-check-label" for="inlineFormCheck">
                            Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>

                <hr>

                <div class="form-inline">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                        <label class="custom-control-label" for="customControlInline">Remember my preference</label>
                    </div>
                    <button type="submit" class="btn btn-primary my-1">Submit</button>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- Row end -->
@endsection