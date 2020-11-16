package com.jakorea.myhome.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/vehicle")
public class VehicleController {
    @GetMapping("/vehicle_list")
    public String index(){
        return "vehicle/vehicle_list";
    }
}