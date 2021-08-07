<?php

namespace App\Http\Controllers;

use App\Models\Templates;
use Illuminate\Http\Request;
use Template;

class TemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function default(Request $request)
    {
        //
        return array(
            'userId' => 0,
            'templateText' => '{"counters":{"u_column":1,"u_row":1,"u_content_heading":1,"u_content_html":1,"u_content_button":1,"u_content_text":1},"body":{"rows":[{"cells":[1],"columns":[{"contents":[{"type":"heading","values":{"containerPadding":"10px","headingType":"h1","fontFamily":{"label":"Arial","value":"arial,helvetica,sans-serif"},"fontSize":"22px","textAlign":"center","lineHeight":"140%","linkStyle":{"inherit":true,"linkColor":"#0000ee","linkHoverColor":"#0000ee","linkUnderline":true,"linkHoverUnderline":true},"_meta":{"htmlID":"u_content_heading_1","htmlClassNames":"u_content_heading"},"selectable":true,"draggable":true,"duplicatable":true,"deletable":true,"hideable":true,"text":"All the text and element<br />in this popup should be<br />editable and dragable"}},{"type":"html","values":{"html":"<input style=\"    border-radius: 19px;\n    height: 30px;\n    margin: auto;\n    color: red;\n    border: none; padding:1em\" type=\"email\" placeholder=\"Email:\"/>","containerPadding":"12px 12px 12px 150px","_meta":{"htmlID":"u_content_html_1","htmlClassNames":"u_content_html"},"selectable":true,"draggable":true,"duplicatable":true,"deletable":true,"hideable":true}},{"type":"button","values":{"containerPadding":"10px","href":{"name":"web","values":{"href":"","target":"_blank"}},"buttonColors":{"color":"#FFFFFF","backgroundColor":"#3AAEE0","hoverColor":"#FFFFFF","hoverBackgroundColor":"#3AAEE0"},"size":{"autoWidth":true,"width":"100%"},"textAlign":"center","lineHeight":"120%","padding":"18px","border":{},"borderRadius":"4px","_meta":{"htmlID":"u_content_button_1","htmlClassNames":"u_content_button"},"selectable":true,"draggable":true,"duplicatable":true,"deletable":true,"hideable":true,"text":"<span style=\"font-size: 14px; line-height: 16.8px;\">SIGNUP NOW</span>","calculatedWidth":128,"calculatedHeight":52}},{"type":"text","values":{"containerPadding":"10px","color":"#ffffff","textAlign":"center","lineHeight":"140%","linkStyle":{"inherit":true,"linkColor":"#0000ee","linkHoverColor":"#0000ee","linkUnderline":true,"linkHoverUnderline":true},"_meta":{"htmlID":"u_content_text_1","htmlClassNames":"u_content_text"},"selectable":true,"draggable":true,"duplicatable":true,"deletable":true,"hideable":true,"text":"<p style=\"font-size: 14px; line-height: 140%;\">No credit card required. No suprises</p>"}}],"values":{"backgroundColor":"#c27f7f","padding":"5px","border":{"borderTopWidth":"13px","borderTopStyle":"solid","borderTopColor":"#e0c3c3","borderLeftWidth":"13px","borderLeftStyle":"solid","borderLeftColor":"#e0c3c3","borderRightWidth":"13px","borderRightStyle":"solid","borderRightColor":"#e0c3c3","borderBottomWidth":"13px","borderBottomStyle":"solid","borderBottomColor":"#e0c3c3"},"_meta":{"htmlID":"u_column_1","htmlClassNames":"u_column"}}}],"values":{"displayCondition":null,"columns":false,"backgroundColor":"","columnsBackgroundColor":"","backgroundImage":{"url":"","fullWidth":true,"repeat":false,"center":true,"cover":false},"padding":"6px","hideDesktop":false,"_meta":{"htmlID":"u_row_1","htmlClassNames":"u_row"},"selectable":true,"draggable":true,"duplicatable":true,"deletable":true,"hideable":true}}],"values":{"textColor":"#000000","backgroundColor":"#e7e7e7","backgroundImage":{"url":"","fullWidth":true,"repeat":false,"center":true,"cover":false},"contentWidth":"500px","contentAlign":"center","fontFamily":{"label":"Arial","value":"arial,helvetica,sans-serif"},"preheaderText":"","linkStyle":{"body":true,"linkColor":"#0000ee","linkHoverColor":"#0000ee","linkUnderline":true,"linkHoverUnderline":true},"_meta":{"htmlID":"u_body","htmlClassNames":"u_body"}}},"schemaVersion":6}'
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // dd('het');
        return Templates::all()->where('userId', $request->user()->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return Templates::create([
            "userId" => $request->user()->id,
            "templateText" => $request->input('text')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function show(Templates $templates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Templates $templates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Templates $templates)
    {
        //
    }
}
