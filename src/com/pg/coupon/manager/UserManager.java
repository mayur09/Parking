package com.pg.coupon.manager;

import com.pg.coupon.model.ParkingCoupon;
import com.pg.coupon.model.User;
import com.pmcretail.framework.security.manager.GenericManager;

public interface UserManager extends GenericManager<User, String> {

	ParkingCoupon saveUserAndCoupon(User user);
}
