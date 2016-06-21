package com.pg.coupon.dao.impl;

import org.springframework.stereotype.Repository;

import com.pg.coupon.dao.UserDao;
import com.pg.coupon.model.User;
import com.pmcretail.common.dao.impl.GenericDaoImpl;

@SuppressWarnings("unchecked")
@Repository("userDao")
public class UserDaoImpl extends GenericDaoImpl<User, String> implements UserDao {

}
