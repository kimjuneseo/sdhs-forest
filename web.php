<?php

$get(
    "/@View@index",
    "/signup@View@signup",
    "/login@View@login",
    "/logout@User@logout",
    "/write@View@write",
);

$post(
    "/user/signup@User@signup",
    "/user/login@User@login",
    "/item/write@Item@write",
);



