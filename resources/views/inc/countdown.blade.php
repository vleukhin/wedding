{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div id="countdown">
    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid nicdark_custom_gradient">
        <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
            <div class="vc_column-inner vc_custom_1476698205485">
                <div class="wpb_wrapper">

                    <div class="nd_options_section nd_options_position_relative ">
                        <img style="top:0;" alt="" class="nd_options_position_absolute nd_options_left_0" width="50" src="http://www.nicdarkthemes.com/themes/wedding/wp/demo/wedding-day/wp-content/uploads/sites/9/2016/10/icon-14.png">
                        <div style="padding-left:70px;" class="nd_options_section nd_options_box_sizing_border_box">
                            <h3 class="nd_options_first_font" style="margin:0; color:#ffffff; font-size:20px;line-height:20px;"> Обратный отсчет до</h3>
                            <p class="nd_options_first_font" style="margin:10px 0px 0px 0px; color:#ffffff; font-size:30px;line-height:30px;">свадьбы</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-9">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="nd_options_countdown"></div>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    //<![CDATA[

    $(document).ready(function () {

        //START counter
        $(function ($) {
            //variables
            var nd_options_end_date = "July 07, 2018";
            var nd_options_width = "nd_options_width_25_percentage nd_options_float_left";

            //insert the class nd_options_display_none in the var if you wnat to hide the visualization
            var nd_options_display_years = "nd_options_display_none";
            var nd_options_display_days = "yes";
            var nd_options_display_hours = "yes";
            var nd_options_display_minutes = "yes";
            var nd_options_display_seconds = "yes";

            //call
            $(".nd_options_countdown").countdown({
                date: nd_options_end_date,
                render: function (data) {
                    $(this.el).html("<div class=\"  nd_options_section nd_options_text_align_center \"><!--***START 1***-->" +
                        "<div style=\" background-color: ; \" class=\" nd_options_width_100_percentage_iphone_port " + nd_options_width + " " + nd_options_display_years + "  \">" +
                        "<h1 style=\" color: #ffffff \" class=\" nd_options_margin_0 nd_options_margin_top_40 nd_options_margin_bottom_10 nd_options_font_size_45 nd_options_padding_0 \">" + this.leadingZeros(data.years, 2) + "</h1>" +
                        "<h2 style=\" color: ; \" class=\" nd_options_margin_0 nd_options_margin_bottom_40 nd_options_display_inline_block nd_options_padding_0 \" >YEARS</h2></div><!--***START 2***-->" +
                        "<div style=\" background-color: #394432; \" class=\" nd_options_width_100_percentage_iphone_port " + nd_options_width + " " + nd_options_display_days + "  \">" +
                        "<h1 style=\" color: #ffffff \" class=\" nd_options_margin_0 nd_options_margin_top_40 nd_options_margin_bottom_10 nd_options_font_size_45 nd_options_padding_0 \">" + this.leadingZeros(data.days, 3) + "</h1>" +
                        "<h2 style=\" color: #ffffff; background-color: #394432 \" class=\" nd_options_margin_0 nd_options_margin_bottom_40 nd_options_display_inline_block nd_options_padding_0 \" >DAYS</h2>" +
                        "</div><!--***START 3***--><div style=\" background-color: #44513b; \" class=\" nd_options_width_100_percentage_iphone_port " + nd_options_width + " " + nd_options_display_hours + "  \">" +
                        "<h1 style=\" color: #ffffff \" class=\" nd_options_margin_0 nd_options_margin_top_40 nd_options_margin_bottom_10 nd_options_font_size_45 nd_options_padding_0 \">" + this.leadingZeros(data.hours, 2) + "</h1>" +
                        "<h2 style=\" color: #ffffff; background-color: #44513b \" class=\" nd_options_margin_0 nd_options_margin_bottom_40 nd_options_display_inline_block nd_options_padding_0 \" >HOURS</h2></div><!--***START 4***-->" +
                        "<div style=\" background-color: #4f5f45; \" class=\" nd_options_width_100_percentage_iphone_port " + nd_options_width + " " + nd_options_display_minutes + "  \">" +
                        "<h1 style=\" color: #ffffff \" class=\" nd_options_margin_0 nd_options_margin_top_40 nd_options_margin_bottom_10 nd_options_font_size_45 nd_options_padding_0 \">" + this.leadingZeros(data.min, 2) + "</h1>" +
                        "<h2 style=\" color: #ffffff; background-color: #4f5f45 \" class=\" nd_options_margin_0 nd_options_margin_bottom_40 nd_options_display_inline_block nd_options_padding_0 \" >MINUTES</h2></div><!--***START 5***-->" +
                        "<div style=\" background-color: #5b6c4f; \" class=\" nd_options_width_100_percentage_iphone_port " + nd_options_width + "  " + nd_options_display_seconds + "  \">" +
                        "<h1 style=\" color: #ffffff \" class=\" nd_options_margin_0 nd_options_margin_top_40 nd_options_margin_bottom_10 nd_options_font_size_45 nd_options_padding_0 \">" + this.leadingZeros(data.sec, 2) + "</h1>" +
                        "<h2 style=\" color: #ffffff; background-color: #5b6c4f \" class=\" nd_options_margin_0 nd_options_margin_bottom_40 nd_options_display_inline_block nd_options_padding_0 \" >SECONDS</h2></div></div>");
                }
            });

        });
        //END counter

    });

    //]]&gt;
</script>

