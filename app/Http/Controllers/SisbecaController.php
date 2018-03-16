<?php

namespace avaa\Http\Controllers;

use Illuminate\Http\Request;

class SisbecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('sisbeca.index');
    }



    /*
    public function index1()
    {
        return view('sisbeca.index1');
    }


    public function emailCompose()
    {
        return view('sisbeca.email-compose');
    }

    public function emailRead()
    {
        return view('sisbeca.email-read');
    }

    public function emailInbox()
    {
        return view('sisbeca.email-inbox');
    }

    //Forms

    public function formBasic()
    {
        return view('sisbeca.form-basic');
    }

    public function formLayout()
    {
        return view('sisbeca.form-layout');
    }

    public function formValidation()
    {
        return view('sisbeca.form-validation');
    }

    public function formEditor()
    {
        return view('sisbeca.form-editor');
    }

    public function formDropzone()
    {
        return view('sisbeca.form-dropzone');
    }

    public function layoutBlank()
    {
        return view('sisbeca.layout-blank');
    }

    public function layoutBoxed()
    {
        return view('sisbeca.layout-boxed');
    }

    public function layoutFixHeader()
    {
        return view('sisbeca.layout-fix-header');
    }

    public function layoutFixSidebar()
    {
        return view('sisbeca.layout-fix-sidebar');
    }

    //pages

    public function pageLogin()
    {
        return view('sisbeca.page-login');
    }

    public function pageRegister()
    {
        return view('sisbeca.page-register');
    }

    public function pageInvoice()
    {
        return view('sisbeca.page-invoice');
    }

    public function pageError404()
    {
        return view('sisbeca.page-error-404');
    }

    //tables

    public function tableBasic()
    {
        return view('sisbeca.table-bootstrap');
    }

    public function datatable()
    {
        return view('sisbeca.table-datatable');
    }


    //ui bootstrap

    public function uiAlert()
    {
        return view('sisbeca.ui-alert');
    }

    public function uiButton()
    {
        return view('sisbeca.ui-button');
    }

    public function uiDropdown()
    {
        return view('sisbeca.ui-dropdown');
    }

    public function uiProgressbar()
    {
        return view('sisbeca.ui-progressbar');
    }

    public function uiTab()
    {
        return view('sisbeca.ui-tab');
    }

    public function uiTypography()
    {
        return view('sisbeca.ui-typography');
    }


    //Components

    public function ucCalender()
    {
        return view('sisbeca.uc-calender');
    }


    public function ucNestedable()
    {
        return view('sisbeca.uc-nestedable');
    }

    public function ucSweetalert()
    {
        return view('sisbeca.uc-sweetalert');
    }

    public function ucToastr()
    {
        return view('sisbeca.uc-toastr');
    }
    */
}
