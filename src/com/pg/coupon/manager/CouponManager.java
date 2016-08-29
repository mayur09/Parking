package com.pg.coupon.manager;

import com.parking.common.security.manager.GenericManager;
import com.pg.coupon.model.ParkingCoupon;

public interface CouponManager extends GenericManager<ParkingCoupon, String> {

	ParkingCoupon saveCoupon(ParkingCoupon coupon);
}
