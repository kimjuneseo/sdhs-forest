<?php

$get(
    "/@View@index",
    "/signup@View@signup",
    "/login@View@login",
    "/logout@User@logout",
    "/write@View@write",
    "/item/more/:idx@Item@more",
    "/item/delete/:idx@Item@delete",

);

$post(
    "/user/signup@User@signup",
    "/user/login@User@login",
    "/item/write@Item@write",
    "/item/comment@Item@comment",
);



