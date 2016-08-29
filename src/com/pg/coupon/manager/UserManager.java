package com.pg.coupon.manager;

import com.parking.common.security.manager.GenericManager;
import com.pg.coupon.model.ParkingCoupon;
import com.pg.user.model.User;

public interface UserManager extends GenericManager<User, String> {

	ParkingCoupon saveUserAndCoupon(User user);
}
