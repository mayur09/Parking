package com.pg.coupon.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.context.annotation.Scope;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

import com.pg.coupon.manager.UserManager;
import com.pg.coupon.model.ParkingCoupon;
import com.pg.user.model.User;

@Controller
@Scope("prototype")
@RequestMapping(value = "/users")
public class UserController {

	@Autowired
	@Qualifier("userManager")
	private UserManager userManager;

	@RequestMapping(value = "/user", method = RequestMethod.GET)
	public ModelAndView user() {
		return new ModelAndView("user", "command", new User());
	}

	@RequestMapping(value = "/newUser", method = RequestMethod.POST)
	public String addNewUserAndCoupon(@ModelAttribute("user") User user, ModelMap model) {
		ParkingCoupon pc = userManager.saveUserAndCoupon(user);
		model.addAttribute("id", pc.getId());
		model.addAttribute("name", pc.getName());
		return "result";

	}
}
