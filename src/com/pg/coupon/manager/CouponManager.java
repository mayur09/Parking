package com.pg.coupon.manager;

import com.pg.coupon.model.ParkingCoupon;
import com.pmcretail.framework.security.manager.GenericManager;

public interface CouponManager extends GenericManager<ParkingCoupon, String> {

	ParkingCoupon saveCoupon(ParkingCoupon coupon);
}
