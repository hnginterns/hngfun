<?php
/**
 * Created with PhpStorm by proctor.
 * @author Ukor Jidechi Ekundayo << http://ukorjidechi.com || ukorjidechi@gmail.com>>.
 * Date: 8/20/17
 * Time: 8:39 AM
 */

namespace hngfun\profile\ukorjidechi;


final class config
{
    private $user_details = [];

    private $full_name = "Ukor Jidechi Ekundayo";


    function description()
    {
        return "<h3>About Me</h3>
        <p>I am a back-end web developer who dabble into mobile development once in a while. 
        I enjoy reading, exploring all genre of music. 
        When am not listening to music, 
        I am sketching design on my notepad or on my computer learning new technology 
        or perfecting the one I know. 
        I LOVE TO CODE!</p>
        <h3>Technology</h3>
        <p>PHP, Python, Shell Scripting, mySQL, MongoDB, Linux Administrator, Javascript (jQuery).</p>";
    }

    function social_network()
    {

        return "<a href='https://facebook.com/ukorsimplicity' target='_blank'>Facebook</a>
                <a href='https://facebook.com/ukor_' target='_blank'>Twitter</a>
                <a href='https://github.com/ukor' target='_blank'>Github</a> 
                <a href='https://gitlab.com/ukor' target='_blank'>Gitlab</a>";
        
    }

    function stage_1()
    {
        return "<h3>Stage 1 result</h3>
                <a href='https://github.com/ukor/hng_stage_1' target='_blank'>Stage 1 result</a>";
    }



    function user()
    {
        $this->user_details = [
            "title" => 'Ukor Jidechi',
            'full_name' => $this->full_name,
            "about" => $this->description(),
            "social" => $this->social_network(),
            "result" => [
                'stage_1' => $this->stage_1()
            ]
        ];

        return $this->user_details;
    }
}