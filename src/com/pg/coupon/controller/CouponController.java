package com.pg.coupon.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.context.annotation.Scope;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.servlet.ModelAndView;

import com.pg.coupon.manager.CouponManager;
import com.pg.coupon.model.ParkingCoupon;

@Controller
@Scope("prototype")
@RequestMapping(value = "/coupons")
public class CouponController {

	@Autowired
	@Qualifier("couponManager")
	private CouponManager couponManager;

	@RequestMapping(value = "/coupon", method = RequestMethod.GET)
	public ModelAndView coupon() {
		return new ModelAndView("coupon", "command", new ParkingCoupon());
	}

	@RequestMapping(value = "/addCoupon", method = RequestMethod.POST)
	public String addStudent(@RequestParam Integer mobile, ModelMap model) {
		ParkingCoupon pc = couponManager.saveCoupon(mobile);
		System.out.println(pc.getId());
		model.addAttribute("id", pc.getId());
		model.addAttribute("name", pc.getName());
		return "result";

	}
}
