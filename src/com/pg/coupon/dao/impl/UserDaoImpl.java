package com.pg.coupon.dao.impl;

import org.springframework.stereotype.Repository;

import com.parking.common.dao.impl.GenericDaoImpl;
import com.pg.coupon.dao.UserDao;
import com.pg.user.model.User;

@SuppressWarnings("unchecked")
@Repository("userDao")
public class UserDaoImpl extends GenericDaoImpl<User, String> implements UserDao {

}
