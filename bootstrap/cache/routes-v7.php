<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Ak81a7x6TYKsKiLs',
=======
            '_route' => 'generated::uLuPnhyWGAoHpqGC',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tempregister' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7ujFwLsUuY30DGkB',
=======
            '_route' => 'generated::jk27c0uGL9jpLY8O',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkverification' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::guxxzI0fbZKwccyd',
=======
            '_route' => 'generated::GcQUTfB2z8mYoeh0',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/forgotpassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Z6MnNpaHwbIdtugW',
=======
            '_route' => 'generated::VBGc9eVlyljXXZZq',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::D92oITQvJQnTsCFh',
=======
            '_route' => 'generated::MVrVCkNTVf9yW22N',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getuserDetail' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::A1izC6ra2TLh7Ipn',
=======
            '_route' => 'generated::KyZFlDxI06lwkyFD',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::2m1xxhkZE3VwwaXZ',
=======
            '_route' => 'generated::ILzBm6VezgBxbVXo',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::KwJMsJh9vRK3TK6P',
=======
            '_route' => 'generated::6zZOddZQ2Fousmbn',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkuser' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::h0ZhsQDgy11avFZw',
=======
            '_route' => 'generated::BZfI3G3lQ8rUq8eW',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verifyotp' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::F4Zzm40lIGdDflGA',
=======
            '_route' => 'generated::fTPk0N8Dyy6SrUaq',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verifyotpuser' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::NGBYCunlsyd9ZHr9',
=======
            '_route' => 'generated::CimnT1RxwFXfYUVc',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/resetotp' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::o7ZJKMcGqsrgs27I',
=======
            '_route' => 'generated::VR93iuBBqk6iEb4A',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login_reset_otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::uVRJ1RnHy7Hz8v2f',
=======
            '_route' => 'generated::YxYZgGUmLpG2peu3',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getverificationcode' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::dS3gNEUNZnCOorRh',
=======
            '_route' => 'generated::rtS3WC5Dl2Etozwq',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/resetpassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5b8aJ28CCsBZZQLe',
=======
            '_route' => 'generated::VrDPaPPwTTU3fldB',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/mailcheck' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::QoJzE7yfR5GIEdEh',
=======
            '_route' => 'generated::Qi9OakbnBoJ6qRSV',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/updatepassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::BWizBzPQH4pWX58X',
=======
            '_route' => 'generated::Z38AE8pWmez1qyqn',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/usercontact' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::i6x1HxgqZuwvYFZX',
=======
            '_route' => 'generated::WQXAb586vK24X6Xn',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/upload_profile_picture' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::oArhlAk1dW9r6kmu',
=======
            '_route' => 'generated::7uI7wsSxh7PAtuZO',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/testxml' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::XMZ4Ks8dyiFp9lfo',
=======
            '_route' => 'generated::O4Iukuvu3CvOTwtZ',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/upload_album_picture' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::LU92D76eap8h2oK8',
=======
            '_route' => 'generated::ZT8pAaUO841eww85',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getalbumList' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::p9CRwcuJVYEYNY9d',
=======
            '_route' => 'generated::3NwQIekxXoEKtGEb',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/Image_Like_Dislike' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Hj5y5bzl9QJZ1a6H',
=======
            '_route' => 'generated::i8Y7NPI4PpJOFHga',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_user_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::N8Ry5bP9hNJAYXan',
=======
            '_route' => 'generated::45N5smqfO8aPFROT',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_city_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::NpKfpiLEEdc513tI',
=======
            '_route' => 'generated::Qy7gqRJM4TpKpdZO',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_zodiac_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::RbeT3k4Rv5fz3sP3',
=======
            '_route' => 'generated::jAITtVKTZXRIEEJm',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/education_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::hP6KZEamkxq0LcIL',
=======
            '_route' => 'generated::re1jId28n3Gasj1z',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::lJZ55LqtMGfJVZ04',
=======
            '_route' => 'generated::iJatYsNEO9wZcRzU',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vi9yEW8arY1dVrjq',
=======
            '_route' => 'generated::fE1flarrIdqXFMVJ',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Q7z9dF6pTb5A5Duw',
=======
            '_route' => 'generated::WnjbhQbIFj6F5HoV',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lang/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'changeLang',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::XJtrIDbLQkWv962b',
=======
            '_route' => 'generated::bNZV1k462LopJtFm',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages-login-2' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::h9pxTIvrHVEwK2Dl',
=======
            '_route' => 'generated::Dta29OGoAI1LYWEq',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages-register' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::l0EtCeSLlPiUjAMm',
=======
            '_route' => 'generated::sgoDLSx1da0bZAKV',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages-register-2' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::MOlEnNspZc2gEqoC',
=======
            '_route' => 'generated::KKvGUN1Z6CJJjdfu',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages-recoverpw' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xmsI4aZJwz2GtRbS',
=======
            '_route' => 'generated::Hw9ogVZ718G5cik0',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages-recoverpw-2' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::jjZXlFv8tDP2nLLo',
=======
            '_route' => 'generated::lGW3yTXL0CYWCus9',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages-lock-screen' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::I67sM7NGGb5zRgc7',
=======
            '_route' => 'generated::b0IzDDPraLMHF7QD',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages-lock-screen-2' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::mLtV084qQQUzzpQZ',
=======
            '_route' => 'generated::vVfAjXoaofNvOGXU',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages-404' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xRiTrbaIWjtTEWG1',
=======
            '_route' => 'generated::jINAbMmFMTo1t6GY',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages-500' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5JGu9CpF9uunvKcj',
=======
            '_route' => 'generated::SSss0OzW4aXiLOfI',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages-main' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::rKdmhpJXDTEauD47',
=======
            '_route' => 'generated::j702sRDLUqa0SVaJ',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages-comingsoon' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::d5d7cCPRaMWuH40F',
=======
            '_route' => 'generated::ZD6ssMEgvsjvzZR6',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create_test' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::CCwqogww9yyG6c2p',
=======
            '_route' => 'generated::gQjdPpZAFTL4xzRd',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/keep-live' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::WZ0WEs8q7lRXvQuw',
=======
            '_route' => 'generated::Qq3kM1Xmm7N0rZYW',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Q53XtmUcv66lZKij',
=======
            '_route' => 'generated::ByrsHG584Ma4nB2e',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7yraI44CfIQYSVLs',
=======
            '_route' => 'generated::bai2PhyuS7mU7QbP',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/firebase' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::3v8W6s8vJVUD6lPq',
=======
            '_route' => 'generated::vNC6Z6AYD4NbVEFM',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save-token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send.notification',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/text-on-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'textOnImage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mail/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::f7JYnW9CXp8dpekv',
=======
            '_route' => 'generated::uiTsCyw6YkobwMms',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mailcheck' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mailcheck',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verifypassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verifypassword',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/remember_me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'remember_me',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verifyemail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verifyemail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send_mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send_mail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/resetpassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'resetpassword',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updatepassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatepassword',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgotpasswordupdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forgotpasswordupdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/about_us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about_us.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'about_us.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/terms_conditions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms_conditions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'terms_conditions.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contact_us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact_us.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contact_us.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetchState' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetchState',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fetchCity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetchCity',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deleteuser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteuser',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/userimagedelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userimagedelete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/checkuseremail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'checkuseremail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deletecategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletecategories',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categoriesimagedelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categoriesimagedelete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subcategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subcategories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subcategories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subcategories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subcategories/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subcategories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deletesubcategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletesubcategories',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subcategories_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subcategories_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subcategoriesimagedelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subcategoriesimagedelete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advertisement.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisement/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advertisement.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisement/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advertisement.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deleteadvertisement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteadvertisement',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisement_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advertisement_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisementPathimagedelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advertisementPathimagedelete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/place_advertisement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'place_advertisement.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/place_advertisement/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'place_advertisement.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/place_advertisement/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'place_advertisement.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/delete_place_advertisement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleteplaceadvertisement',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/place_advertisement_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'place_advertisement_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/placeAdvertisementPathimagedelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'placeAdvertisementPathimagedelete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feature' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feature/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feature/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deletefeature' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletefeature',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feature_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/featureimagedelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'featureimagedelete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feature_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature_list.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feature_list/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature_list.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feature_list/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature_list.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deletefeature_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletefeature_list',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feature_list_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature_list_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feature_listimagedelete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature_listimagedelete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/featuretext' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'featuretext.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/featuretext/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'featuretext.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/featuretext/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'featuretext.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deletefeaturetext' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletefeaturetext',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/featuretext_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'featuretext_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/privacy_policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy_policy.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/privacy_policy/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy_policy.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/privacy_policy/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy_policy.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/license' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'license.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/license/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'license.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/license/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'license.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rating.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/editpassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'editpassword.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/editpassword/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'editpassword.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/checkoldpassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'checkoldpassword',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/photos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'photos.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/photos/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'photos.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/photos/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'photos.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/deletephotos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletephotos',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/photos_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'photos_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/oauth/(?|tokens/([^/]++)(*:32)|clients/([^/]++)(?|(*:58))|personal\\-access\\-tokens/([^/]++)(*:99))|/password/reset/([^/]++)(*:131)|/admin/(?|users/(?|edit/([^/]++)(*:171)|view/([^/]++)(*:192)|update/([^/]++)(*:215))|categories/(?|edit/([^/]++)(*:251)|update/([^/]++)(*:274)|view/([^/]++)(*:295))|subcategories/(?|edit/([^/]++)(*:334)|update/([^/]++)(*:357)|view/([^/]++)(*:378))|advertisement/(?|edit/([^/]++)(*:417)|update/([^/]++)(*:440)|view/([^/]++)(*:461))|p(?|lace_advertisement/(?|edit/([^/]++)(*:509)|update/([^/]++)(*:532)|view/([^/]++)(*:553))|hotos/(?|edit/([^/]++)(*:584)|update/([^/]++)(*:607)|view/([^/]++)(*:628)))|feature(?|/(?|edit/([^/]++)(*:665)|update/([^/]++)(*:688)|view/([^/]++)(*:709))|_list/(?|edit/([^/]++)(*:740)|update/([^/]++)(*:763)|view/([^/]++)(*:784))|text/(?|edit/([^/]++)(*:814)|update/([^/]++)(*:837)|view/([^/]++)(*:858)))))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      99 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      295 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subcategories.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subcategories.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      378 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subcategories.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advertisement.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advertisement.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'advertisement.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      509 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'place_advertisement.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      532 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'place_advertisement.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      553 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'place_advertisement.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'photos.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'photos.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'photos.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      665 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      688 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      709 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature_list.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature_list.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feature_list.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'featuretext.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      837 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'featuretext.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'featuretext.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Ak81a7x6TYKsKiLs' => 
=======
    'generated::uLuPnhyWGAoHpqGC' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@register',
        'controller' => 'App\\Http\\Controllers\\UserController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Ak81a7x6TYKsKiLs',
=======
        'as' => 'generated::uLuPnhyWGAoHpqGC',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7ujFwLsUuY30DGkB' => 
=======
    'generated::jk27c0uGL9jpLY8O' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/tempregister',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@tempregister',
        'controller' => 'App\\Http\\Controllers\\UserController@tempregister',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7ujFwLsUuY30DGkB',
=======
        'as' => 'generated::jk27c0uGL9jpLY8O',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::guxxzI0fbZKwccyd' => 
=======
    'generated::GcQUTfB2z8mYoeh0' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkverification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@checkverification',
        'controller' => 'App\\Http\\Controllers\\UserController@checkverification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::guxxzI0fbZKwccyd',
=======
        'as' => 'generated::GcQUTfB2z8mYoeh0',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Z6MnNpaHwbIdtugW' => 
=======
    'generated::VBGc9eVlyljXXZZq' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/forgotpassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@forgotpassword',
        'controller' => 'App\\Http\\Controllers\\UserController@forgotpassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Z6MnNpaHwbIdtugW',
=======
        'as' => 'generated::VBGc9eVlyljXXZZq',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::D92oITQvJQnTsCFh' => 
=======
    'generated::MVrVCkNTVf9yW22N' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@update_profile',
        'controller' => 'App\\Http\\Controllers\\UserController@update_profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::D92oITQvJQnTsCFh',
=======
        'as' => 'generated::MVrVCkNTVf9yW22N',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::A1izC6ra2TLh7Ipn' => 
=======
    'generated::KyZFlDxI06lwkyFD' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/getuserDetail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getuserDetail',
        'controller' => 'App\\Http\\Controllers\\UserController@getuserDetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::A1izC6ra2TLh7Ipn',
=======
        'as' => 'generated::KyZFlDxI06lwkyFD',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2m1xxhkZE3VwwaXZ' => 
=======
    'generated::ILzBm6VezgBxbVXo' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@login',
        'controller' => 'App\\Http\\Controllers\\UserController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::2m1xxhkZE3VwwaXZ',
=======
        'as' => 'generated::ILzBm6VezgBxbVXo',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::KwJMsJh9vRK3TK6P' => 
=======
    'generated::6zZOddZQ2Fousmbn' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@logout',
        'controller' => 'App\\Http\\Controllers\\UserController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::KwJMsJh9vRK3TK6P',
=======
        'as' => 'generated::6zZOddZQ2Fousmbn',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::h0ZhsQDgy11avFZw' => 
=======
    'generated::BZfI3G3lQ8rUq8eW' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkuser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@checkuser',
        'controller' => 'App\\Http\\Controllers\\UserController@checkuser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::h0ZhsQDgy11avFZw',
=======
        'as' => 'generated::BZfI3G3lQ8rUq8eW',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::F4Zzm40lIGdDflGA' => 
=======
    'generated::fTPk0N8Dyy6SrUaq' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verifyotp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@verifyotp',
        'controller' => 'App\\Http\\Controllers\\UserController@verifyotp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::F4Zzm40lIGdDflGA',
=======
        'as' => 'generated::fTPk0N8Dyy6SrUaq',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::NGBYCunlsyd9ZHr9' => 
=======
    'generated::CimnT1RxwFXfYUVc' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verifyotpuser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@verifyotpuser',
        'controller' => 'App\\Http\\Controllers\\UserController@verifyotpuser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::NGBYCunlsyd9ZHr9',
=======
        'as' => 'generated::CimnT1RxwFXfYUVc',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::o7ZJKMcGqsrgs27I' => 
=======
    'generated::VR93iuBBqk6iEb4A' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/resetotp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@resetotp',
        'controller' => 'App\\Http\\Controllers\\UserController@resetotp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::o7ZJKMcGqsrgs27I',
=======
        'as' => 'generated::VR93iuBBqk6iEb4A',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::uVRJ1RnHy7Hz8v2f' => 
=======
    'generated::YxYZgGUmLpG2peu3' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login_reset_otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@login_reset_otp',
        'controller' => 'App\\Http\\Controllers\\UserController@login_reset_otp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::uVRJ1RnHy7Hz8v2f',
=======
        'as' => 'generated::YxYZgGUmLpG2peu3',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dS3gNEUNZnCOorRh' => 
=======
    'generated::rtS3WC5Dl2Etozwq' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/getverificationcode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@getverificationcode',
        'controller' => 'App\\Http\\Controllers\\UserController@getverificationcode',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::dS3gNEUNZnCOorRh',
=======
        'as' => 'generated::rtS3WC5Dl2Etozwq',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5b8aJ28CCsBZZQLe' => 
=======
    'generated::VrDPaPPwTTU3fldB' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/resetpassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@resetpassword',
        'controller' => 'App\\Http\\Controllers\\UserController@resetpassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5b8aJ28CCsBZZQLe',
=======
        'as' => 'generated::VrDPaPPwTTU3fldB',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::QoJzE7yfR5GIEdEh' => 
=======
    'generated::Qi9OakbnBoJ6qRSV' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/mailcheck',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@sendmail',
        'controller' => 'App\\Http\\Controllers\\UserController@sendmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::QoJzE7yfR5GIEdEh',
=======
        'as' => 'generated::Qi9OakbnBoJ6qRSV',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BWizBzPQH4pWX58X' => 
=======
    'generated::Z38AE8pWmez1qyqn' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/updatepassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updatepassword',
        'controller' => 'App\\Http\\Controllers\\UserController@updatepassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::BWizBzPQH4pWX58X',
=======
        'as' => 'generated::Z38AE8pWmez1qyqn',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::i6x1HxgqZuwvYFZX' => 
=======
    'generated::WQXAb586vK24X6Xn' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/usercontact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@usercontact',
        'controller' => 'App\\Http\\Controllers\\UserController@usercontact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::i6x1HxgqZuwvYFZX',
=======
        'as' => 'generated::WQXAb586vK24X6Xn',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oArhlAk1dW9r6kmu' => 
=======
    'generated::7uI7wsSxh7PAtuZO' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/upload_profile_picture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@upload_profile_picture',
        'controller' => 'App\\Http\\Controllers\\UserController@upload_profile_picture',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::oArhlAk1dW9r6kmu',
=======
        'as' => 'generated::7uI7wsSxh7PAtuZO',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::XMZ4Ks8dyiFp9lfo' => 
=======
    'generated::O4Iukuvu3CvOTwtZ' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/testxml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@testxml',
        'controller' => 'App\\Http\\Controllers\\UserController@testxml',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::XMZ4Ks8dyiFp9lfo',
=======
        'as' => 'generated::O4Iukuvu3CvOTwtZ',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LU92D76eap8h2oK8' => 
=======
    'generated::ZT8pAaUO841eww85' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/upload_album_picture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\DatingController@upload_album_picture',
        'controller' => 'App\\Http\\Controllers\\DatingController@upload_album_picture',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::LU92D76eap8h2oK8',
=======
        'as' => 'generated::ZT8pAaUO841eww85',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::p9CRwcuJVYEYNY9d' => 
=======
    'generated::3NwQIekxXoEKtGEb' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/getalbumList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\DatingController@getalbumList',
        'controller' => 'App\\Http\\Controllers\\DatingController@getalbumList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::p9CRwcuJVYEYNY9d',
=======
        'as' => 'generated::3NwQIekxXoEKtGEb',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Hj5y5bzl9QJZ1a6H' => 
=======
    'generated::i8Y7NPI4PpJOFHga' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/Image_Like_Dislike',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\DatingController@Image_Like_Dislike',
        'controller' => 'App\\Http\\Controllers\\DatingController@Image_Like_Dislike',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Hj5y5bzl9QJZ1a6H',
=======
        'as' => 'generated::i8Y7NPI4PpJOFHga',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::N8Ry5bP9hNJAYXan' => 
=======
    'generated::45N5smqfO8aPFROT' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get_user_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\DatingController@get_user_list',
        'controller' => 'App\\Http\\Controllers\\DatingController@get_user_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::N8Ry5bP9hNJAYXan',
=======
        'as' => 'generated::45N5smqfO8aPFROT',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::NpKfpiLEEdc513tI' => 
=======
    'generated::Qy7gqRJM4TpKpdZO' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_city_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\DatingController@get_city_list',
        'controller' => 'App\\Http\\Controllers\\DatingController@get_city_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::NpKfpiLEEdc513tI',
=======
        'as' => 'generated::Qy7gqRJM4TpKpdZO',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RbeT3k4Rv5fz3sP3' => 
=======
    'generated::jAITtVKTZXRIEEJm' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_zodiac_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\DatingController@get_zodiac_list',
        'controller' => 'App\\Http\\Controllers\\DatingController@get_zodiac_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::RbeT3k4Rv5fz3sP3',
=======
        'as' => 'generated::jAITtVKTZXRIEEJm',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hP6KZEamkxq0LcIL' => 
=======
    'generated::re1jId28n3Gasj1z' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/education_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\DatingController@education_list',
        'controller' => 'App\\Http\\Controllers\\DatingController@education_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::hP6KZEamkxq0LcIL',
=======
        'as' => 'generated::re1jId28n3Gasj1z',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lJZ55LqtMGfJVZ04' => 
=======
    'generated::iJatYsNEO9wZcRzU' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::lJZ55LqtMGfJVZ04',
=======
        'as' => 'generated::iJatYsNEO9wZcRzU',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vi9yEW8arY1dVrjq' => 
=======
    'generated::fE1flarrIdqXFMVJ' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vi9yEW8arY1dVrjq',
=======
        'as' => 'generated::fE1flarrIdqXFMVJ',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Q7z9dF6pTb5A5Duw' => 
=======
    'generated::WnjbhQbIFj6F5HoV' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Q7z9dF6pTb5A5Duw',
=======
        'as' => 'generated::WnjbhQbIFj6F5HoV',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'changeLang' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lang/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LangController@change',
        'controller' => 'App\\Http\\Controllers\\LangController@change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'changeLang',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::XJtrIDbLQkWv962b' => 
=======
    'generated::bNZV1k462LopJtFm' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@index',
        'controller' => 'App\\Http\\Controllers\\SkoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::XJtrIDbLQkWv962b',
=======
        'as' => 'generated::bNZV1k462LopJtFm',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::h9pxTIvrHVEwK2Dl' => 
=======
    'generated::Dta29OGoAI1LYWEq' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages-login-2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@index',
        'controller' => 'App\\Http\\Controllers\\SkoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::h9pxTIvrHVEwK2Dl',
=======
        'as' => 'generated::Dta29OGoAI1LYWEq',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::l0EtCeSLlPiUjAMm' => 
=======
    'generated::sgoDLSx1da0bZAKV' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@index',
        'controller' => 'App\\Http\\Controllers\\SkoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::l0EtCeSLlPiUjAMm',
=======
        'as' => 'generated::sgoDLSx1da0bZAKV',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MOlEnNspZc2gEqoC' => 
=======
    'generated::KKvGUN1Z6CJJjdfu' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages-register-2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@index',
        'controller' => 'App\\Http\\Controllers\\SkoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::MOlEnNspZc2gEqoC',
=======
        'as' => 'generated::KKvGUN1Z6CJJjdfu',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xmsI4aZJwz2GtRbS' => 
=======
    'generated::Hw9ogVZ718G5cik0' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages-recoverpw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@index',
        'controller' => 'App\\Http\\Controllers\\SkoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xmsI4aZJwz2GtRbS',
=======
        'as' => 'generated::Hw9ogVZ718G5cik0',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::jjZXlFv8tDP2nLLo' => 
=======
    'generated::lGW3yTXL0CYWCus9' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages-recoverpw-2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@index',
        'controller' => 'App\\Http\\Controllers\\SkoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::jjZXlFv8tDP2nLLo',
=======
        'as' => 'generated::lGW3yTXL0CYWCus9',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::I67sM7NGGb5zRgc7' => 
=======
    'generated::b0IzDDPraLMHF7QD' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages-lock-screen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@index',
        'controller' => 'App\\Http\\Controllers\\SkoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::I67sM7NGGb5zRgc7',
=======
        'as' => 'generated::b0IzDDPraLMHF7QD',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::mLtV084qQQUzzpQZ' => 
=======
    'generated::vVfAjXoaofNvOGXU' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages-lock-screen-2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@index',
        'controller' => 'App\\Http\\Controllers\\SkoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::mLtV084qQQUzzpQZ',
=======
        'as' => 'generated::vVfAjXoaofNvOGXU',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xRiTrbaIWjtTEWG1' => 
=======
    'generated::jINAbMmFMTo1t6GY' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages-404',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@index',
        'controller' => 'App\\Http\\Controllers\\SkoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xRiTrbaIWjtTEWG1',
=======
        'as' => 'generated::jINAbMmFMTo1t6GY',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5JGu9CpF9uunvKcj' => 
=======
    'generated::SSss0OzW4aXiLOfI' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages-500',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@index',
        'controller' => 'App\\Http\\Controllers\\SkoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5JGu9CpF9uunvKcj',
=======
        'as' => 'generated::SSss0OzW4aXiLOfI',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::rKdmhpJXDTEauD47' => 
=======
    'generated::j702sRDLUqa0SVaJ' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages-main',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@index',
        'controller' => 'App\\Http\\Controllers\\SkoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::rKdmhpJXDTEauD47',
=======
        'as' => 'generated::j702sRDLUqa0SVaJ',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::d5d7cCPRaMWuH40F' => 
=======
    'generated::ZD6ssMEgvsjvzZR6' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages-comingsoon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@index',
        'controller' => 'App\\Http\\Controllers\\SkoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::d5d7cCPRaMWuH40F',
=======
        'as' => 'generated::ZD6ssMEgvsjvzZR6',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CCwqogww9yyG6c2p' => 
=======
    'generated::gQjdPpZAFTL4xzRd' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'create_test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@create',
        'controller' => 'App\\Http\\Controllers\\SkoteController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::CCwqogww9yyG6c2p',
=======
        'as' => 'generated::gQjdPpZAFTL4xzRd',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WZ0WEs8q7lRXvQuw' => 
=======
    'generated::Qq3kM1Xmm7N0rZYW' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'keep-live',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@live',
        'controller' => 'App\\Http\\Controllers\\SkoteController@live',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::WZ0WEs8q7lRXvQuw',
=======
        'as' => 'generated::Qq3kM1Xmm7N0rZYW',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Q53XtmUcv66lZKij' => 
=======
    'generated::ByrsHG584Ma4nB2e' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@root',
        'controller' => 'App\\Http\\Controllers\\HomeController@root',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Q53XtmUcv66lZKij',
=======
        'as' => 'generated::ByrsHG584Ma4nB2e',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@root',
        'controller' => 'App\\Http\\Controllers\\HomeController@root',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7yraI44CfIQYSVLs' => 
=======
    'generated::bai2PhyuS7mU7QbP' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7yraI44CfIQYSVLs',
=======
        'as' => 'generated::bai2PhyuS7mU7QbP',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3v8W6s8vJVUD6lPq' => 
=======
    'generated::vNC6Z6AYD4NbVEFM' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'firebase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@pushfirebase',
        'controller' => 'App\\Http\\Controllers\\UsersController@pushfirebase',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::3v8W6s8vJVUD6lPq',
=======
        'as' => 'generated::vNC6Z6AYD4NbVEFM',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'save-token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@saveToken',
        'controller' => 'App\\Http\\Controllers\\UsersController@saveToken',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'save-token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send.notification' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@sendNotification',
        'controller' => 'App\\Http\\Controllers\\UsersController@sendNotification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send.notification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'textOnImage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'text-on-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ImageController@textOnImage',
        'controller' => 'App\\Http\\Controllers\\ImageController@textOnImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'textOnImage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::f7JYnW9CXp8dpekv' => 
=======
    'generated::uiTsCyw6YkobwMms' => 
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mail/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MailController@send',
        'controller' => 'App\\Http\\Controllers\\MailController@send',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::f7JYnW9CXp8dpekv',
=======
        'as' => 'generated::uiTsCyw6YkobwMms',
>>>>>>> 11e939417cd296a838f0b5e22aab44574e672b42
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mailcheck' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mailcheck',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@sendmail',
        'controller' => 'App\\Http\\Controllers\\SkoteController@sendmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'mailcheck',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verifypassword' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'verifypassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SkoteController@verifypass',
        'controller' => 'App\\Http\\Controllers\\SkoteController@verifypass',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verifypassword',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'remember_me' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'remember_me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@remember_me',
        'controller' => 'App\\Http\\Controllers\\LoginController@remember_me',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'remember_me',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verifyemail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verifyemail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@verifyemail',
        'controller' => 'App\\Http\\Controllers\\UserController@verifyemail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verifyemail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send_mail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send_mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@send_mail',
        'controller' => 'App\\Http\\Controllers\\UserController@send_mail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send_mail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'resetpassword' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'resetpassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@resetpassword',
        'controller' => 'App\\Http\\Controllers\\UserController@resetpassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'resetpassword',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatepassword' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updatepassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updatepassword',
        'controller' => 'App\\Http\\Controllers\\UserController@updatepassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updatepassword',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forgotpasswordupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgotpasswordupdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@forgotpasswordupdate',
        'controller' => 'App\\Http\\Controllers\\UserController@forgotpasswordupdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'forgotpasswordupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about_us.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/about_us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutusController@index',
        'controller' => 'App\\Http\\Controllers\\AboutusController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'about_us.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about_us.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/about_us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutusController@update',
        'controller' => 'App\\Http\\Controllers\\AboutusController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'about_us.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms_conditions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/terms_conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TermsconditionsController@index',
        'controller' => 'App\\Http\\Controllers\\TermsconditionsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'terms_conditions.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms_conditions.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/terms_conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TermsconditionsController@update',
        'controller' => 'App\\Http\\Controllers\\TermsconditionsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'terms_conditions.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact_us.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact_us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactusController@index',
        'controller' => 'App\\Http\\Controllers\\ContactusController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'contact_us.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact_us.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contact_us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactusController@update',
        'controller' => 'App\\Http\\Controllers\\ContactusController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'contact_us.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@index',
        'controller' => 'App\\Http\\Controllers\\SettingController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'settings.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@update',
        'controller' => 'App\\Http\\Controllers\\SettingController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'settings.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fetchState' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/fetchState',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@fetchState',
        'controller' => 'App\\Http\\Controllers\\SettingController@fetchState',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'fetchState',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fetchCity' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/fetchCity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@fetchCity',
        'controller' => 'App\\Http\\Controllers\\SettingController@fetchCity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'fetchCity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\UserController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'users.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\UserController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'users.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\UserController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'users.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\UserController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'users.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@view',
        'controller' => 'App\\Http\\Controllers\\UserController@view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'users.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\UserController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'users.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteuser' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deleteuser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@delete',
        'controller' => 'App\\Http\\Controllers\\UserController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'deleteuser',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@users_status',
        'controller' => 'App\\Http\\Controllers\\UserController@users_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'users_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userimagedelete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/userimagedelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@userimagedelete',
        'controller' => 'App\\Http\\Controllers\\UserController@userimagedelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'userimagedelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'checkuseremail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/checkuseremail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@checkuseremail',
        'controller' => 'App\\Http\\Controllers\\UserController@checkuseremail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'checkuseremail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriesController@index',
        'controller' => 'App\\Http\\Controllers\\CategoriesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'categories.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriesController@create',
        'controller' => 'App\\Http\\Controllers\\CategoriesController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'categories.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriesController@store',
        'controller' => 'App\\Http\\Controllers\\CategoriesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'categories.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriesController@edit',
        'controller' => 'App\\Http\\Controllers\\CategoriesController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'categories.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriesController@update',
        'controller' => 'App\\Http\\Controllers\\CategoriesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'categories.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriesController@view',
        'controller' => 'App\\Http\\Controllers\\CategoriesController@view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'categories.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletecategories' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deletecategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriesController@delete',
        'controller' => 'App\\Http\\Controllers\\CategoriesController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'deletecategories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriesController@categories_status',
        'controller' => 'App\\Http\\Controllers\\CategoriesController@categories_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'categories_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categoriesimagedelete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categoriesimagedelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriesController@categoriesimagedelete',
        'controller' => 'App\\Http\\Controllers\\CategoriesController@categoriesimagedelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'categoriesimagedelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subcategories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subcategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SubCategoriesController@index',
        'controller' => 'App\\Http\\Controllers\\SubCategoriesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'subcategories.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subcategories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subcategories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SubCategoriesController@create',
        'controller' => 'App\\Http\\Controllers\\SubCategoriesController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'subcategories.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subcategories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subcategories/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SubCategoriesController@store',
        'controller' => 'App\\Http\\Controllers\\SubCategoriesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'subcategories.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subcategories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subcategories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SubCategoriesController@edit',
        'controller' => 'App\\Http\\Controllers\\SubCategoriesController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'subcategories.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subcategories.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subcategories/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SubCategoriesController@update',
        'controller' => 'App\\Http\\Controllers\\SubCategoriesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'subcategories.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subcategories.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subcategories/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SubCategoriesController@view',
        'controller' => 'App\\Http\\Controllers\\SubCategoriesController@view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'subcategories.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletesubcategories' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deletesubcategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SubCategoriesController@delete',
        'controller' => 'App\\Http\\Controllers\\SubCategoriesController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'deletesubcategories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subcategories_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subcategories_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SubCategoriesController@subcategories_status',
        'controller' => 'App\\Http\\Controllers\\SubCategoriesController@subcategories_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'subcategories_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subcategoriesimagedelete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subcategoriesimagedelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SubCategoriesController@subcategoriesimagedelete',
        'controller' => 'App\\Http\\Controllers\\SubCategoriesController@subcategoriesimagedelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'subcategoriesimagedelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advertisement.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdvertisementController@index',
        'controller' => 'App\\Http\\Controllers\\AdvertisementController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'advertisement.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advertisement.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisement/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdvertisementController@create',
        'controller' => 'App\\Http\\Controllers\\AdvertisementController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'advertisement.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advertisement.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/advertisement/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdvertisementController@store',
        'controller' => 'App\\Http\\Controllers\\AdvertisementController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'advertisement.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advertisement.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisement/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdvertisementController@edit',
        'controller' => 'App\\Http\\Controllers\\AdvertisementController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'advertisement.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advertisement.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/advertisement/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdvertisementController@update',
        'controller' => 'App\\Http\\Controllers\\AdvertisementController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'advertisement.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advertisement.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisement/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdvertisementController@view',
        'controller' => 'App\\Http\\Controllers\\AdvertisementController@view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'advertisement.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteadvertisement' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deleteadvertisement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdvertisementController@delete',
        'controller' => 'App\\Http\\Controllers\\AdvertisementController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'deleteadvertisement',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advertisement_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/advertisement_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdvertisementController@advertisement_status',
        'controller' => 'App\\Http\\Controllers\\AdvertisementController@advertisement_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'advertisement_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'advertisementPathimagedelete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/advertisementPathimagedelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdvertisementController@advertisementPathimagedelete',
        'controller' => 'App\\Http\\Controllers\\AdvertisementController@advertisementPathimagedelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'advertisementPathimagedelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'place_advertisement.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/place_advertisement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaceAdvertisementController@index',
        'controller' => 'App\\Http\\Controllers\\PlaceAdvertisementController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'place_advertisement.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'place_advertisement.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/place_advertisement/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaceAdvertisementController@create',
        'controller' => 'App\\Http\\Controllers\\PlaceAdvertisementController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'place_advertisement.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'place_advertisement.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/place_advertisement/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaceAdvertisementController@store',
        'controller' => 'App\\Http\\Controllers\\PlaceAdvertisementController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'place_advertisement.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'place_advertisement.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/place_advertisement/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaceAdvertisementController@edit',
        'controller' => 'App\\Http\\Controllers\\PlaceAdvertisementController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'place_advertisement.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'place_advertisement.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/place_advertisement/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaceAdvertisementController@update',
        'controller' => 'App\\Http\\Controllers\\PlaceAdvertisementController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'place_advertisement.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'place_advertisement.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/place_advertisement/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaceAdvertisementController@view',
        'controller' => 'App\\Http\\Controllers\\PlaceAdvertisementController@view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'place_advertisement.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleteplaceadvertisement' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/delete_place_advertisement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaceAdvertisementController@delete',
        'controller' => 'App\\Http\\Controllers\\PlaceAdvertisementController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'deleteplaceadvertisement',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'place_advertisement_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/place_advertisement_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaceAdvertisementController@sub_categories_status',
        'controller' => 'App\\Http\\Controllers\\PlaceAdvertisementController@sub_categories_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'place_advertisement_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'placeAdvertisementPathimagedelete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/placeAdvertisementPathimagedelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaceAdvertisementController@advertisementPathimagedelete',
        'controller' => 'App\\Http\\Controllers\\PlaceAdvertisementController@advertisementPathimagedelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'placeAdvertisementPathimagedelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feature',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureController@index',
        'controller' => 'App\\Http\\Controllers\\FeatureController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feature/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureController@create',
        'controller' => 'App\\Http\\Controllers\\FeatureController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feature/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureController@store',
        'controller' => 'App\\Http\\Controllers\\FeatureController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feature/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureController@edit',
        'controller' => 'App\\Http\\Controllers\\FeatureController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feature/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureController@update',
        'controller' => 'App\\Http\\Controllers\\FeatureController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feature/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureController@view',
        'controller' => 'App\\Http\\Controllers\\FeatureController@view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletefeature' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deletefeature',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureController@delete',
        'controller' => 'App\\Http\\Controllers\\FeatureController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'deletefeature',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feature_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureController@feature_status',
        'controller' => 'App\\Http\\Controllers\\FeatureController@feature_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'featureimagedelete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/featureimagedelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureController@featureimagedelete',
        'controller' => 'App\\Http\\Controllers\\FeatureController@featureimagedelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'featureimagedelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature_list.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feature_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureplaceController@index',
        'controller' => 'App\\Http\\Controllers\\FeatureplaceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature_list.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature_list.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feature_list/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureplaceController@create',
        'controller' => 'App\\Http\\Controllers\\FeatureplaceController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature_list.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature_list.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feature_list/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureplaceController@store',
        'controller' => 'App\\Http\\Controllers\\FeatureplaceController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature_list.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature_list.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feature_list/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureplaceController@edit',
        'controller' => 'App\\Http\\Controllers\\FeatureplaceController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature_list.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature_list.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feature_list/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureplaceController@update',
        'controller' => 'App\\Http\\Controllers\\FeatureplaceController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature_list.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature_list.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feature_list/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureplaceController@view',
        'controller' => 'App\\Http\\Controllers\\FeatureplaceController@view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature_list.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletefeature_list' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deletefeature_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureplaceController@delete',
        'controller' => 'App\\Http\\Controllers\\FeatureplaceController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'deletefeature_list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature_list_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feature_list_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureplaceController@feature_status',
        'controller' => 'App\\Http\\Controllers\\FeatureplaceController@feature_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature_list_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feature_listimagedelete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feature_listimagedelete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeatureplaceController@featureimagedelete',
        'controller' => 'App\\Http\\Controllers\\FeatureplaceController@featureimagedelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feature_listimagedelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'featuretext.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/featuretext',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FeaturetextController@index',
        'controller' => 'App\\Http\\Controllers\\FeaturetextController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'featuretext.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'featuretext.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/featuretext/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FeaturetextController@create',
        'controller' => 'App\\Http\\Controllers\\FeaturetextController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'featuretext.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'featuretext.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/featuretext/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FeaturetextController@store',
        'controller' => 'App\\Http\\Controllers\\FeaturetextController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'featuretext.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'featuretext.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/featuretext/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FeaturetextController@edit',
        'controller' => 'App\\Http\\Controllers\\FeaturetextController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'featuretext.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'featuretext.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/featuretext/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FeaturetextController@update',
        'controller' => 'App\\Http\\Controllers\\FeaturetextController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'featuretext.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'featuretext.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/featuretext/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FeaturetextController@view',
        'controller' => 'App\\Http\\Controllers\\FeaturetextController@view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'featuretext.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletefeaturetext' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deletefeaturetext',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FeaturetextController@delete',
        'controller' => 'App\\Http\\Controllers\\FeaturetextController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'deletefeaturetext',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'featuretext_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/featuretext_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FeaturetextController@feature_status',
        'controller' => 'App\\Http\\Controllers\\FeaturetextController@feature_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'featuretext_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy_policy.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/privacy_policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PrivacypolicyController@index',
        'controller' => 'App\\Http\\Controllers\\PrivacypolicyController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'privacy_policy.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy_policy.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/privacy_policy/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PrivacypolicyController@edit',
        'controller' => 'App\\Http\\Controllers\\PrivacypolicyController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'privacy_policy.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy_policy.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/privacy_policy/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PrivacypolicyController@update',
        'controller' => 'App\\Http\\Controllers\\PrivacypolicyController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'privacy_policy.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'license.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/license',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LicenseController@index',
        'controller' => 'App\\Http\\Controllers\\LicenseController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'license.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'license.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/license/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LicenseController@edit',
        'controller' => 'App\\Http\\Controllers\\LicenseController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'license.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'license.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/license/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\LicenseController@update',
        'controller' => 'App\\Http\\Controllers\\LicenseController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'license.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rating.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\RatingReviewsController@index',
        'controller' => 'App\\Http\\Controllers\\RatingReviewsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'rating.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\NotesController@index',
        'controller' => 'App\\Http\\Controllers\\NotesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'notes.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'editpassword.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editpassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EditpasswordController@index',
        'controller' => 'App\\Http\\Controllers\\EditpasswordController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'editpassword.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'editpassword.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/editpassword/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EditpasswordController@edit',
        'controller' => 'App\\Http\\Controllers\\EditpasswordController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'editpassword.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'checkoldpassword' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/checkoldpassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EditpasswordController@checkoldpassword',
        'controller' => 'App\\Http\\Controllers\\EditpasswordController@checkoldpassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'checkoldpassword',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/photos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotosController@index',
        'controller' => 'App\\Http\\Controllers\\PhotosController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'photos.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/photos/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotosController@create',
        'controller' => 'App\\Http\\Controllers\\PhotosController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'photos.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/photos/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotosController@store',
        'controller' => 'App\\Http\\Controllers\\PhotosController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'photos.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/photos/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotosController@edit',
        'controller' => 'App\\Http\\Controllers\\PhotosController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'photos.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/photos/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotosController@update',
        'controller' => 'App\\Http\\Controllers\\PhotosController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'photos.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/photos/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotosController@view',
        'controller' => 'App\\Http\\Controllers\\PhotosController@view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'photos.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletephotos' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deletephotos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotosController@delete',
        'controller' => 'App\\Http\\Controllers\\PhotosController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'deletephotos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/photos_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotosController@status',
        'controller' => 'App\\Http\\Controllers\\PhotosController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'photos_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
