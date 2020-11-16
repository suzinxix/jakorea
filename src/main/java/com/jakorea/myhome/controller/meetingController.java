package com.jakorea.myhome.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/meeting")
public class meetingController {
    @GetMapping("/meeting_list")
    public String index(){
        return "meeting/meeting_list";
    }
}