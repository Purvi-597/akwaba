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
            '_route' => 'generated::56DIFGbzWGp91FU6',
=======
<<<<<<< HEAD
            '_route' => 'generated::QnzGZIlcLKzJcTzV',
=======
<<<<<<< HEAD
            '_route' => 'generated::BOrIzkdZ2ej5DoYW',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::xrIJkSunTV5t2qBV',
=======
<<<<<<< HEAD
            '_route' => 'generated::AWe9B2T0yDCvy8Ix',
=======
            '_route' => 'generated::HqudMWl8ye0un1b7',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::yUxsFpnVRsXmdTy9',
=======
<<<<<<< HEAD
            '_route' => 'generated::0VqHXM9aSPWCjJgK',
=======
<<<<<<< HEAD
            '_route' => 'generated::wWEIzjEAIiw5Almj',
=======
<<<<<<< HEAD
            '_route' => 'generated::090GBlURj4hLSua4',
=======
            '_route' => 'generated::ZDHLGByPZgf66GVz',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::Kbg5B2wEhOe2VzpD',
=======
<<<<<<< HEAD
            '_route' => 'generated::CWMh7TdrlZ8fAyW4',
=======
<<<<<<< HEAD
            '_route' => 'generated::iyUJWhn4yQM0M0Rg',
=======
<<<<<<< HEAD
            '_route' => 'generated::S6mArr0uwirrz257',
=======
            '_route' => 'generated::gQoAyg3yniX5fyRp',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::eXpNSBuhupJrOlTs',
=======
<<<<<<< HEAD
            '_route' => 'generated::x4c4nPBM3z6V8O8g',
=======
<<<<<<< HEAD
            '_route' => 'generated::SkQptRWcsCbSN2NL',
=======
<<<<<<< HEAD
            '_route' => 'generated::aWx3U2iOCAZHSc4X',
=======
            '_route' => 'generated::r2wQSYa89hMsNoj9',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::tmvlvOvs0SDlZ97j',
=======
<<<<<<< HEAD
            '_route' => 'generated::NIkXRfHBCUlnRHZt',
=======
<<<<<<< HEAD
            '_route' => 'generated::j69KQsedleTkkcaY',
=======
<<<<<<< HEAD
            '_route' => 'generated::x7vR7kW43DGG8g80',
=======
            '_route' => 'generated::ytOekBzWGHi3aFNv',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::n8bs5SDOS1FN011z',
=======
<<<<<<< HEAD
            '_route' => 'generated::Am1rMQLODXwscRAk',
=======
<<<<<<< HEAD
            '_route' => 'generated::EAF9Bv6btRDDFtFq',
=======
<<<<<<< HEAD
            '_route' => 'generated::3lNQx7HwkB6hDXZK',
=======
            '_route' => 'generated::8j5FANM6vt18FelQ',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::roRrB0KZeOa6xCyx',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::MnRNwSJpvBYlmgy9',
=======
<<<<<<< HEAD
            '_route' => 'generated::RzD8zTeA0aPu0g6S',
=======
<<<<<<< HEAD
            '_route' => 'generated::8QQt0BVvms7yYBBf',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::19DUEpY3cUG9sKfa',
=======
<<<<<<< HEAD
            '_route' => 'generated::qlvtn3Iy3zvG4Iy8',
=======
            '_route' => 'generated::EesWAdYGJSPrZ1X0',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::SgxD6AlAQtTkimAa',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/verify_otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::TeXNdp9Czdn8Ni7J',
=======
<<<<<<< HEAD
            '_route' => 'generated::TDKFBg8PmTQVjizJ',
=======
<<<<<<< HEAD
            '_route' => 'generated::38uVKX8FsswJZEE8',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::XuLtpjWriP3MlJQS',
=======
<<<<<<< HEAD
            '_route' => 'generated::yoOgOwTIE0mwUbm2',
=======
            '_route' => 'generated::bJcGmDCQVqvwJJyX',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::BiycTV3czletLuEV',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/logout_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::JAByrGIE58NPhqFJ',
=======
<<<<<<< HEAD
            '_route' => 'generated::z1dR1R3qWpaSbQrD',
=======
<<<<<<< HEAD
            '_route' => 'generated::LAR0nCKTdGpVhJ07',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::3cpJmn2J9uhfDQiK',
=======
<<<<<<< HEAD
            '_route' => 'generated::TNyl7jQdAlRwr1cd',
=======
            '_route' => 'generated::efvatkzsjTmHvaSl',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::INTLPGKxL5oaTffJ',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/resend_otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::3z1yRU416c2qCN2V',
=======
<<<<<<< HEAD
            '_route' => 'generated::kNuoKjtg4e44j8Ue',
=======
<<<<<<< HEAD
            '_route' => 'generated::HaVj4FHGQnwChyE8',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::5e9iflYNu1lkELJ4',
=======
<<<<<<< HEAD
            '_route' => 'generated::SM8oFD9aE9c4UePJ',
=======
            '_route' => 'generated::brcf2NMEosv4Ktru',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::CpO8CbDFc22I3DOJ',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/forgot_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::upkE7dYHkhJgBR8p',
=======
<<<<<<< HEAD
            '_route' => 'generated::pgBdRKb1klWdGJeF',
=======
<<<<<<< HEAD
            '_route' => 'generated::9vr3uPMhSOdN8fHU',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::QdXfaS4s7c1kyy94',
=======
<<<<<<< HEAD
            '_route' => 'generated::NLPpUzmc1tOxYSZL',
=======
            '_route' => 'generated::kFiJa5OvhRI5ECW9',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::tQHUnPmecRjd3l8a',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
=======
      '/api/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::s2eY22xmbrDf4Z7v',
=======
<<<<<<< HEAD
            '_route' => 'generated::vgL9IyRYMqKAZQUe',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::zN9gIz75PDrUPCO3',
=======
<<<<<<< HEAD
            '_route' => 'generated::L5xnFQ3S7b22BH1d',
=======
            '_route' => 'generated::SepkL0QtUChd5fim',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::zkK6ndozbOjS7tHa',
=======
<<<<<<< HEAD
            '_route' => 'generated::zxLmvY9eLqDG8X6C',
=======
<<<<<<< HEAD
            '_route' => 'generated::2R4VYHJOULAMzKkh',
=======
<<<<<<< HEAD
            '_route' => 'generated::ap7YD2lPaxB1454l',
=======
            '_route' => 'generated::PNVu2t1u0sn5aOeH',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::mHUFUVOaxbzRpq5T',
=======
<<<<<<< HEAD
            '_route' => 'generated::ZNaMrM2dzk3Nvq1X',
=======
<<<<<<< HEAD
            '_route' => 'generated::ujqshafu8i91oLk5',
=======
<<<<<<< HEAD
            '_route' => 'generated::WrN0AFuC7YvxFpkw',
=======
            '_route' => 'generated::iuKU2pmPK5FQ1izg',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::RuT9BfeMQcZPtvMB',
=======
<<<<<<< HEAD
            '_route' => 'generated::en02C1VU4obixJaS',
=======
<<<<<<< HEAD
            '_route' => 'generated::6MBTPxchiA1cudeI',
=======
<<<<<<< HEAD
            '_route' => 'generated::qdKN2CHUMwkAm5RV',
=======
            '_route' => 'generated::IVtwNTJyUs3EirN8',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::QBzJWNLhBIiwE3ny',
=======
<<<<<<< HEAD
            '_route' => 'generated::35m9qLPRTVI9eooC',
=======
<<<<<<< HEAD
            '_route' => 'generated::VdUUNKt3mVGvZvc7',
=======
<<<<<<< HEAD
            '_route' => 'generated::kIenHZEQHyTIIhFV',
=======
            '_route' => 'generated::R9EexQYKIkM4vUb2',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::IpMaXfIkpDOcG7cE',
=======
<<<<<<< HEAD
            '_route' => 'generated::DwuYa14ZbbHsLSmY',
=======
<<<<<<< HEAD
            '_route' => 'generated::8MtLVdSBoFpKadNF',
=======
<<<<<<< HEAD
            '_route' => 'generated::XDJDGaSVoA55Nhcq',
=======
            '_route' => 'generated::pRAe8VxIPtUn64f3',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::6p2qzJPGugW8kAZV',
=======
<<<<<<< HEAD
            '_route' => 'generated::b3yjG7dMIpKR7AkW',
=======
<<<<<<< HEAD
            '_route' => 'generated::u5apLUxI6yu0o3Eo',
=======
<<<<<<< HEAD
            '_route' => 'generated::50by56PGxI2REl3Z',
=======
            '_route' => 'generated::CQg7ftIsMOUN3Koh',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::p09jZ8aYhm8RC2Eg',
=======
<<<<<<< HEAD
            '_route' => 'generated::03SG2bLEGgQT4D92',
=======
<<<<<<< HEAD
            '_route' => 'generated::VM2kAw33IQBrttJL',
=======
<<<<<<< HEAD
            '_route' => 'generated::fjhQZR42SVqfiIMV',
=======
            '_route' => 'generated::4NM98BMbvfY9xeKT',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::2LKd5LB4hyuEU6KJ',
=======
<<<<<<< HEAD
            '_route' => 'generated::dbXwVDxhL1H4ecuW',
=======
<<<<<<< HEAD
            '_route' => 'generated::GHZE3FC6KdMbJwjk',
=======
<<<<<<< HEAD
            '_route' => 'generated::82SpKpcjBPG1Viuc',
=======
            '_route' => 'generated::74DqzSgNU2zgm6XV',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::cJSpLBrkcVQnQf1R',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
      '/api/demo' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::na67l2523CX5wrAt',
=======
<<<<<<< HEAD
            '_route' => 'generated::Qp8eiLHY6nPSb1IC',
=======
<<<<<<< HEAD
            '_route' => 'generated::sDghChky3qYhPduX',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::y8a8T2OLYAduPUEZ',
=======
<<<<<<< HEAD
            '_route' => 'generated::ua1a5ImR1iYsdQYU',
=======
            '_route' => 'generated::iWOf7NWuGNblGqfY',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::xXi6isxl9D58vRmr',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/category_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::rhzw0gKcE8EtEJkz',
=======
<<<<<<< HEAD
            '_route' => 'generated::4Y6ZFFAobgwlgwRN',
=======
<<<<<<< HEAD
            '_route' => 'generated::Q6MXvtrGuwBvx4Js',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::hwuWaJoqWjiXwOet',
=======
<<<<<<< HEAD
            '_route' => 'generated::1KOuW8s6i52AiD1I',
=======
            '_route' => 'generated::ZOiNryhMM25FSsmB',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::KTwMJmlPOQJsa1gP',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/Main_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::4TrTRqQLCIG849rH',
=======
<<<<<<< HEAD
            '_route' => 'generated::u6ceM3coJW7ylXF3',
=======
<<<<<<< HEAD
            '_route' => 'generated::mxyqZhhiC0jtC6Gd',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::Rq8VAv1wYE9bDFSz',
=======
<<<<<<< HEAD
            '_route' => 'generated::vtxecBm1BO3PZmZ2',
=======
            '_route' => 'generated::CagMANH6o5qo4CW6',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::QUYZT5gmgsp2dDLP',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/category_detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::AoWeVDOjOiQK1Tyh',
=======
<<<<<<< HEAD
            '_route' => 'generated::nWTTvLq62fLN3MiA',
=======
<<<<<<< HEAD
            '_route' => 'generated::ltHT5XspXY8jXGLr',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::dQodshnPXnAqnwxT',
=======
<<<<<<< HEAD
            '_route' => 'generated::Ju05xRk1T53g6Rdx',
=======
            '_route' => 'generated::S18J1S7Twomw6ait',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::giFXcmRWxCp0Cvk3',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
=======
      '/api/view_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::fOvPxyLDXCVlpewa',
=======
<<<<<<< HEAD
            '_route' => 'generated::ks7YpwVLd1NojlbK',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::1LkfC8cpeZfJMzyF',
=======
<<<<<<< HEAD
            '_route' => 'generated::H1svhxTyOp4C07gN',
=======
            '_route' => 'generated::WrZ4mHRgxNVbgyyn',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::mZMvxZoF2YgIYeqA',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/featured_places' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::SuwTrg12uQ5DBJVZ',
=======
<<<<<<< HEAD
            '_route' => 'generated::aHId7tlmZ36gNXAX',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::sqqI7JeybmHd26Wm',
=======
<<<<<<< HEAD
            '_route' => 'generated::Rl6uVKBmZkZ8avny',
=======
            '_route' => 'generated::eFgyEX41YFq7yK2H',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::90TZSBOf3t2OOYlI',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
      '/api/more_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::tbXEEvtiJh0m3Saq',
=======
<<<<<<< HEAD
            '_route' => 'generated::ZxiV8MZrqMQVrvXD',
=======
<<<<<<< HEAD
            '_route' => 'generated::NuVcdqYBE0Vf6pJP',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::tqI0Ycept1urHixI',
=======
<<<<<<< HEAD
            '_route' => 'generated::WE7dSFPMdzHaj8sR',
=======
            '_route' => 'generated::sf2GGC4B8R0kJaeu',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::iAMvDtWXhAidHosb',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/sub_categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8JnxMRjNlWp1WVvX',
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
      '/api/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::jHfdK0iX9YsG0b9R',
=======
            '_route' => 'generated::gi8eUK072trPbgm6',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/update_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6noA7YZpshVoBC2J',
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
      '/api/view_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zvme4QG0fDs8bzll',
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
      '/api/featured_places' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::RPEvt9AjBmuAHWwP',
=======
            '_route' => 'generated::GsRxo8ZZy1QN8HEk',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/feature_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::btQBERgnLfBrHVTo',
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
      '/api/add_company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YKI9lAMSkTy2zCqD',
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
      '/api/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0vd1CT65U6zgrEIf',
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
      '/api/Privacy_policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0VONaStTjv135slm',
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
      '/api/nearbyLocation' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xWGYuEyVbkmvloJN',
=======
            '_route' => 'generated::qFEX2uxwYOilvQsw',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/savedroutes/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'changeLang',
=======
            '_route' => 'generated::mN8r5ADTx9Kzxh2b',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/savedroutes/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::4FLCCwPZQpgSQdOa',
=======
            '_route' => 'generated::OEFrVh7ZBQ17E8uV',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/savedroutes/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::GX4wj4CJ7ko4LIdF',
=======
            '_route' => 'generated::8Ktw2GqAraIhvN3l',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/savedroutes/destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::RoXnGXiD4eteC69f',
=======
            '_route' => 'generated::3xel3mfFE9NTHSKJ',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/mypalces/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::jUtYf7ShAmqv1jrz',
=======
            '_route' => 'generated::9tw4VBNBV4FWCLL1',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/mypalces/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::HARDY99AWTB4L9hY',
=======
            '_route' => 'generated::Ql86jwTAAaBH5sZJ',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/mypalces/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Ysm2Ib3oNEGvArTL',
=======
            '_route' => 'generated::U56v9awU1H67EFV2',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/mypalces/destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Q5qVikhmIc5k2Lt6',
=======
            '_route' => 'generated::tdXBBu0A8WRuUPhI',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/addreview' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::OOemteCyHrxAEZEf',
=======
            '_route' => 'generated::W1aA8tzcr59Z708h',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/addreview/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::V1J6GJTf7bzAuy16',
=======
            '_route' => 'generated::ddzsZtp090gpiMFg',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/addreview/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::UT84YMkPa9kWvKM1',
=======
            '_route' => 'generated::S9Z5vdud3wxGfLYy',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/addreview/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5DyFBCPKIM8R7SVN',
=======
            '_route' => 'generated::OQeWPWlV3PYGq5uI',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/addreview/destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::LMBgpVWz11DLyme3',
=======
            '_route' => 'generated::YhXxdXhWiqUsiVUX',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/car_make' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::J75GuRVSBER8JW2b',
=======
            '_route' => 'generated::d8NyS4J5n0nTdDr5',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/car_model' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::zLU7DaHNGlbtqQyO',
=======
            '_route' => 'generated::9qUcPyf84zyYmxXH',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
      '/api/caralldetailes' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::TrYXezz9EumT2aHT',
=======
            '_route' => 'generated::cB1lJ6TPab0syaML',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::XvhTzoMc79G42OUW',
=======
<<<<<<< HEAD
            '_route' => 'generated::Fu4jET46EukD8jsH',
=======
<<<<<<< HEAD
            '_route' => 'generated::2IY9wQ8YSfDUV4wB',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::k6qqAjY0PJwPblEM',
=======
<<<<<<< HEAD
            '_route' => 'generated::cqe3nkNvUs7z4aRg',
=======
            '_route' => 'generated::LoUiN9znJc3Q17xT',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::LRfP8ArCfXSF5pDT',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
            '_route' => 'generated::t9qhoFaQ521f4C3j',
=======
            '_route' => 'logout',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::xENKas3n6X7mXydK',
=======
<<<<<<< HEAD
            '_route' => 'generated::YSzD5WAn6XuzsaSj',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::GNorBVxNkBN8r6Es',
=======
<<<<<<< HEAD
            '_route' => 'generated::w8wRoyBlQAveHVFL',
=======
            '_route' => 'generated::aWTfKUXtO8fLXns4',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::mYV0P2vi1CsANsf9',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
<<<<<<< HEAD
            '_route' => 'generated::f82jAxz60Xh4lcRW',
=======
            '_route' => 'password.update',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
            '_route' => 'generated::hEesriLejzvoyF2b',
=======
<<<<<<< HEAD
            '_route' => 'generated::o2ZIX3HKyswJfiog',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::GMnVr614aENDz3tp',
=======
<<<<<<< HEAD
            '_route' => 'generated::bK47wxV5a3bWf4gj',
=======
            '_route' => 'generated::1Rsns4qBOz1KGej9',
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::8YeTsWaHCPzqH5kl',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::e5ue047vFkIRZA7X',
=======
<<<<<<< HEAD
            '_route' => 'generated::7GfmBomltkGgMdKZ',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::Gj0YGR0O7RzIGIfw',
=======
<<<<<<< HEAD
            '_route' => 'generated::ixFUSjtKuIOjtCcL',
=======
            '_route' => 'generated::n9gYsTdg7XHja1wg',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::f61sblGkqw212tXT',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::Rm8AeFIF1VBPSAoU',
=======
<<<<<<< HEAD
            '_route' => 'generated::2cGnAi284ixcMdal',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::26MQhRtSyjZgCkuo',
=======
<<<<<<< HEAD
            '_route' => 'generated::7oYH2g6bCYJEpFrq',
=======
            '_route' => 'generated::kJ4jQJ1727qiE6C7',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::xcdDBR5JhVAZBUf7',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::ovYCfcKKWXeX6Btq',
=======
<<<<<<< HEAD
            '_route' => 'generated::c4EWEFNDtRWTzMKB',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::Ba1UBZbdIcDy1nmO',
=======
<<<<<<< HEAD
            '_route' => 'generated::ZMBsCOwf5IA60FHy',
=======
            '_route' => 'generated::oejc7nBPaMnkV0yd',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::JdZTcdqUvVAIzZR0',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::yrCin2jx9oIaNLAf',
=======
<<<<<<< HEAD
            '_route' => 'generated::Eq9fmIqR96eIEg9Q',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::nrlCHdDkCTqFvfZ8',
=======
<<<<<<< HEAD
            '_route' => 'generated::jBuZTtrdj8CaAUff',
=======
            '_route' => 'generated::msuQvRai6nYlZzrP',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::mYCGAtrg12bHtqSt',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::n0TlcdqBcUEm78y3',
=======
<<<<<<< HEAD
            '_route' => 'generated::RAlT2vetyoLkIxOi',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::GfFdkD1Su01mSssn',
=======
<<<<<<< HEAD
            '_route' => 'generated::a2Pjgx79yRvdgiAC',
=======
            '_route' => 'generated::54NvinJUzzETz5fR',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::9fDqKhm2xf0UWJ3j',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::bblpDIeIZRPT990l',
=======
<<<<<<< HEAD
            '_route' => 'generated::1kLZMUnjBtFXDUsj',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::pAic1KTgbUpJ3mtH',
=======
<<<<<<< HEAD
            '_route' => 'generated::DdJ3GFx231kj8Jf8',
=======
            '_route' => 'generated::FwJmro6td752wIf6',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::0ct1evRFr0ANAquV',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::BWI4g6W7Sor1LhWn',
=======
<<<<<<< HEAD
            '_route' => 'generated::7dL1gBwY0ejPSQOk',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::LVEul8pbziEKBSni',
=======
<<<<<<< HEAD
            '_route' => 'generated::CbPJETc9fpZ4uUiE',
=======
            '_route' => 'generated::T7A8vBDUR4SOgOft',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::DbPWJFKrj1elSSJK',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::shXgU4riy1yPyGPu',
=======
<<<<<<< HEAD
            '_route' => 'generated::yiTh14HKMPCQHGo7',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::nroKaPVCGCRZAO9x',
=======
<<<<<<< HEAD
            '_route' => 'generated::frmvMFl35CCkc1xC',
=======
            '_route' => 'generated::vvg7LcAHWmFhY0dI',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::D7CHElqJ0vuZXqgx',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::GprKqSj5MmWOMFlC',
=======
<<<<<<< HEAD
            '_route' => 'generated::pf1PdFgOIvh00uZF',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::TKNjKB3iYW3FeFcg',
=======
<<<<<<< HEAD
            '_route' => 'generated::kZLsYiForPzkrrJG',
=======
            '_route' => 'generated::jmqcymW6auyCGtU9',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::MC8Uwi3GaTa7RzSL',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::24wWmzKyLQaKxcxC',
=======
<<<<<<< HEAD
            '_route' => 'generated::f4qdjvpBjI15Cgnu',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::elKT72pcdOiOt34r',
=======
<<<<<<< HEAD
            '_route' => 'generated::5Qc8WsbVYjMHIgru',
=======
            '_route' => 'generated::QEkNBjLS6gCACBxE',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::qCx3qJCo6j6AqEQE',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::TrrlHa0GGUN5PjDD',
=======
<<<<<<< HEAD
            '_route' => 'generated::03nYlh66aSloyG4t',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::iMRnbI7OvQndfTdb',
=======
<<<<<<< HEAD
            '_route' => 'generated::cLlL5pXedFQ6D4SV',
=======
            '_route' => 'generated::2gsFSKU1pcxrCBjy',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::OBraGkSQDqrFijKg',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::LGQpiXaPBxcoVJej',
=======
<<<<<<< HEAD
            '_route' => 'generated::YxJ9UpY8Uxz8KT77',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::IfiuOGuDJuofHL0H',
=======
<<<<<<< HEAD
            '_route' => 'generated::O9XxXO59f3NUgXYk',
=======
            '_route' => 'generated::gKuEpr1V8CgbQ4IR',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::Wz8VMFNw130jWl3K',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::oj09ldmEcSc0V5R3',
=======
<<<<<<< HEAD
            '_route' => 'generated::5CIRj7e2XBFiWz67',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::sjsWlrA738oRCmmf',
=======
<<<<<<< HEAD
            '_route' => 'generated::LTVCOsIO5JtGUtXH',
=======
            '_route' => 'generated::iBszfiVqdUzHvuum',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::qEaHzDAVMzcFU6a8',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::Zy5gf0ggM39NCuZG',
=======
<<<<<<< HEAD
            '_route' => 'generated::1mAOkIlEZnkDfADv',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::DrJZ0n3h91IodPYL',
=======
<<<<<<< HEAD
            '_route' => 'generated::rCqPHAlHiSzI0WZG',
=======
            '_route' => 'generated::nmpcsTdG0IwZkTs4',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::lNh39AzSqKfu12Qt',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::7UXUMAjQd6eYhRVN',
=======
<<<<<<< HEAD
            '_route' => 'generated::jReQHn7sKm3YzBA0',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::VPuJEjkNbNJomq3S',
=======
            '_route' => 'generated::VB9iJiHEOXRSKx1A',
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::WEbmW7DCp78R0Mf2',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::JodMSVZy9k7W8Xz5',
=======
<<<<<<< HEAD
            '_route' => 'generated::XT5jKEQ93MEGeGdD',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::AhXUe2Hp6e5vkzOJ',
=======
<<<<<<< HEAD
            '_route' => 'generated::nFw8zqcMYZ90SOu1',
=======
            '_route' => 'generated::4sfAOdX9dv5mR1dx',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::RMDT4BLiT4GupKsc',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::6wTHn9lp9O6NPYVc',
=======
<<<<<<< HEAD
            '_route' => 'generated::ehn7tg7cVqdXmqVB',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::C1npTQwKHN0Gg1Tx',
=======
<<<<<<< HEAD
            '_route' => 'generated::JXrcDMZWJhXIrCeJ',
=======
            '_route' => 'generated::F580INg1QbH0Nbji',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::Yyl6GF9r4lN9gkCp',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
            '_route' => 'generated::VGm2q08VanqCtivu',
=======
<<<<<<< HEAD
            '_route' => 'generated::8GXWpy6ANOsS73u8',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::LNdMDVlcjCu3atVD',
=======
<<<<<<< HEAD
            '_route' => 'generated::tqMMYB524YLY0NKd',
=======
            '_route' => 'generated::3tk93uOlQSv6TtLI',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
            '_route' => 'generated::pkRFCpxg8ZSS4eRM',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
      '/admin/feedback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feedback.index',
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
      '/admin/feedbackemail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feedbackemail',
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
      '/admin/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq.index',
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
      '/admin/faq/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq.create',
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
      '/admin/faq/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq.store',
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
      '/admin/deletefaq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletefaq',
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
      '/admin/faq_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq_status',
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
      0 => '{^(?|/oauth/(?|tokens/([^/]++)(*:32)|clients/([^/]++)(?|(*:58))|personal\\-access\\-tokens/([^/]++)(*:99))|/password/reset/([^/]++)(*:131)|/admin/(?|users/(?|edit/([^/]++)(*:171)|view/([^/]++)(*:192)|update/([^/]++)(*:215))|categories/(?|edit/([^/]++)(*:251)|update/([^/]++)(*:274)|view/([^/]++)(*:295))|subcategories/(?|edit/([^/]++)(*:334)|update/([^/]++)(*:357)|view/([^/]++)(*:378))|advertisement/(?|edit/([^/]++)(*:417)|update/([^/]++)(*:440)|view/([^/]++)(*:461))|p(?|lace_advertisement/(?|edit/([^/]++)(*:509)|update/([^/]++)(*:532)|view/([^/]++)(*:553))|hotos/(?|edit/([^/]++)(*:584)|update/([^/]++)(*:607)|view/([^/]++)(*:628)))|f(?|eature(?|/(?|edit/([^/]++)(*:668)|update/([^/]++)(*:691)|view/([^/]++)(*:712))|_list/(?|edit/([^/]++)(*:743)|update/([^/]++)(*:766)|view/([^/]++)(*:787))|text/(?|edit/([^/]++)(*:817)|update/([^/]++)(*:840)|view/([^/]++)(*:861)))|aq/(?|edit/([^/]++)(*:890)|update/([^/]++)(*:913)|view/([^/]++)(*:934)))))/?$}sDu',
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
      668 => 
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
      691 => 
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
      712 => 
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
      743 => 
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
      766 => 
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
      787 => 
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
      817 => 
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
      840 => 
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
      861 => 
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
      ),
      890 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq.edit',
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
      913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq.update',
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
      934 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq.view',
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
    'generated::QnzGZIlcLKzJcTzV' => 
=======
<<<<<<< HEAD
    'generated::BOrIzkdZ2ej5DoYW' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::xrIJkSunTV5t2qBV' => 
=======
<<<<<<< HEAD
    'generated::AWe9B2T0yDCvy8Ix' => 
=======
    'generated::HqudMWl8ye0un1b7' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::roRrB0KZeOa6xCyx' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
        'uses' => 'App\\Http\\Controllers\\API\\UserController@register',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::QnzGZIlcLKzJcTzV',
=======
<<<<<<< HEAD
        'as' => 'generated::BOrIzkdZ2ej5DoYW',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::xrIJkSunTV5t2qBV',
=======
<<<<<<< HEAD
        'as' => 'generated::AWe9B2T0yDCvy8Ix',
=======
        'as' => 'generated::HqudMWl8ye0un1b7',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::roRrB0KZeOa6xCyx',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::RzD8zTeA0aPu0g6S' => 
=======
<<<<<<< HEAD
    'generated::0VqHXM9aSPWCjJgK' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::wWEIzjEAIiw5Almj' => 
=======
<<<<<<< HEAD
    'generated::090GBlURj4hLSua4' => 
=======
    'generated::ZDHLGByPZgf66GVz' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
        'as' => 'generated::0VqHXM9aSPWCjJgK',
=======
<<<<<<< HEAD
        'as' => 'generated::wWEIzjEAIiw5Almj',
=======
<<<<<<< HEAD
        'as' => 'generated::090GBlURj4hLSua4',
=======
        'as' => 'generated::ZDHLGByPZgf66GVz',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::CWMh7TdrlZ8fAyW4' => 
=======
<<<<<<< HEAD
    'generated::iyUJWhn4yQM0M0Rg' => 
=======
<<<<<<< HEAD
    'generated::S6mArr0uwirrz257' => 
=======
    'generated::gQoAyg3yniX5fyRp' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
        'as' => 'generated::CWMh7TdrlZ8fAyW4',
=======
<<<<<<< HEAD
        'as' => 'generated::iyUJWhn4yQM0M0Rg',
=======
<<<<<<< HEAD
        'as' => 'generated::S6mArr0uwirrz257',
=======
        'as' => 'generated::gQoAyg3yniX5fyRp',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::x4c4nPBM3z6V8O8g' => 
=======
<<<<<<< HEAD
    'generated::SkQptRWcsCbSN2NL' => 
=======
<<<<<<< HEAD
    'generated::aWx3U2iOCAZHSc4X' => 
=======
    'generated::r2wQSYa89hMsNoj9' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
        'as' => 'generated::x4c4nPBM3z6V8O8g',
=======
<<<<<<< HEAD
        'as' => 'generated::SkQptRWcsCbSN2NL',
=======
<<<<<<< HEAD
        'as' => 'generated::aWx3U2iOCAZHSc4X',
=======
        'as' => 'generated::r2wQSYa89hMsNoj9',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::NIkXRfHBCUlnRHZt' => 
=======
<<<<<<< HEAD
    'generated::j69KQsedleTkkcaY' => 
=======
<<<<<<< HEAD
    'generated::x7vR7kW43DGG8g80' => 
=======
    'generated::ytOekBzWGHi3aFNv' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
        'as' => 'generated::NIkXRfHBCUlnRHZt',
=======
<<<<<<< HEAD
        'as' => 'generated::j69KQsedleTkkcaY',
=======
<<<<<<< HEAD
        'as' => 'generated::x7vR7kW43DGG8g80',
=======
        'as' => 'generated::ytOekBzWGHi3aFNv',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::Am1rMQLODXwscRAk' => 
=======
<<<<<<< HEAD
    'generated::EAF9Bv6btRDDFtFq' => 
=======
<<<<<<< HEAD
    'generated::3lNQx7HwkB6hDXZK' => 
=======
    'generated::8j5FANM6vt18FelQ' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
        'as' => 'generated::Am1rMQLODXwscRAk',
=======
<<<<<<< HEAD
        'as' => 'generated::EAF9Bv6btRDDFtFq',
=======
<<<<<<< HEAD
        'as' => 'generated::3lNQx7HwkB6hDXZK',
=======
        'as' => 'generated::8j5FANM6vt18FelQ',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::8QQt0BVvms7yYBBf' => 
=======
<<<<<<< HEAD
    'generated::19DUEpY3cUG9sKfa' => 
=======
<<<<<<< HEAD
    'generated::qlvtn3Iy3zvG4Iy8' => 
=======
    'generated::EesWAdYGJSPrZ1X0' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::SgxD6AlAQtTkimAa' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
        'uses' => 'App\\Http\\Controllers\\API\\UserController@login',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::RzD8zTeA0aPu0g6S',
=======
<<<<<<< HEAD
        'as' => 'generated::8QQt0BVvms7yYBBf',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::19DUEpY3cUG9sKfa',
=======
<<<<<<< HEAD
        'as' => 'generated::qlvtn3Iy3zvG4Iy8',
=======
        'as' => 'generated::EesWAdYGJSPrZ1X0',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::SgxD6AlAQtTkimAa',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::TDKFBg8PmTQVjizJ' => 
=======
<<<<<<< HEAD
    'generated::38uVKX8FsswJZEE8' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::XuLtpjWriP3MlJQS' => 
=======
<<<<<<< HEAD
    'generated::yoOgOwTIE0mwUbm2' => 
=======
    'generated::bJcGmDCQVqvwJJyX' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::BiycTV3czletLuEV' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verify_otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@verify_otp',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@verify_otp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::TDKFBg8PmTQVjizJ',
=======
<<<<<<< HEAD
        'as' => 'generated::38uVKX8FsswJZEE8',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::XuLtpjWriP3MlJQS',
=======
<<<<<<< HEAD
        'as' => 'generated::yoOgOwTIE0mwUbm2',
=======
        'as' => 'generated::bJcGmDCQVqvwJJyX',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::BiycTV3czletLuEV',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::z1dR1R3qWpaSbQrD' => 
=======
<<<<<<< HEAD
    'generated::LAR0nCKTdGpVhJ07' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::3cpJmn2J9uhfDQiK' => 
=======
<<<<<<< HEAD
    'generated::TNyl7jQdAlRwr1cd' => 
=======
    'generated::efvatkzsjTmHvaSl' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::INTLPGKxL5oaTffJ' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@logout_user',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@logout_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::z1dR1R3qWpaSbQrD',
=======
<<<<<<< HEAD
        'as' => 'generated::LAR0nCKTdGpVhJ07',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::3cpJmn2J9uhfDQiK',
=======
<<<<<<< HEAD
        'as' => 'generated::TNyl7jQdAlRwr1cd',
=======
        'as' => 'generated::efvatkzsjTmHvaSl',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::INTLPGKxL5oaTffJ',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::kNuoKjtg4e44j8Ue' => 
=======
<<<<<<< HEAD
    'generated::HaVj4FHGQnwChyE8' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::5e9iflYNu1lkELJ4' => 
=======
<<<<<<< HEAD
    'generated::SM8oFD9aE9c4UePJ' => 
=======
    'generated::brcf2NMEosv4Ktru' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::CpO8CbDFc22I3DOJ' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/resend_otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@resend_otp',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@resend_otp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::kNuoKjtg4e44j8Ue',
=======
<<<<<<< HEAD
        'as' => 'generated::HaVj4FHGQnwChyE8',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::5e9iflYNu1lkELJ4',
=======
<<<<<<< HEAD
        'as' => 'generated::SM8oFD9aE9c4UePJ',
=======
        'as' => 'generated::brcf2NMEosv4Ktru',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::CpO8CbDFc22I3DOJ',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::pgBdRKb1klWdGJeF' => 
=======
<<<<<<< HEAD
    'generated::9vr3uPMhSOdN8fHU' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::QdXfaS4s7c1kyy94' => 
=======
<<<<<<< HEAD
    'generated::NLPpUzmc1tOxYSZL' => 
=======
    'generated::kFiJa5OvhRI5ECW9' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::tQHUnPmecRjd3l8a' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/forgot_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@forgot_password',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@forgot_password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::pgBdRKb1klWdGJeF',
=======
<<<<<<< HEAD
        'as' => 'generated::9vr3uPMhSOdN8fHU',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::QdXfaS4s7c1kyy94',
=======
<<<<<<< HEAD
        'as' => 'generated::NLPpUzmc1tOxYSZL',
=======
        'as' => 'generated::kFiJa5OvhRI5ECW9',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::tQHUnPmecRjd3l8a',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::Qp8eiLHY6nPSb1IC' => 
=======
<<<<<<< HEAD
    'generated::vgL9IyRYMqKAZQUe' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::zN9gIz75PDrUPCO3' => 
=======
<<<<<<< HEAD
    'generated::L5xnFQ3S7b22BH1d' => 
=======
    'generated::SepkL0QtUChd5fim' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
        'as' => 'generated::vgL9IyRYMqKAZQUe',
=======
<<<<<<< HEAD
        'as' => 'generated::zN9gIz75PDrUPCO3',
=======
<<<<<<< HEAD
        'as' => 'generated::L5xnFQ3S7b22BH1d',
=======
        'as' => 'generated::SepkL0QtUChd5fim',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::zxLmvY9eLqDG8X6C' => 
=======
<<<<<<< HEAD
    'generated::2R4VYHJOULAMzKkh' => 
=======
<<<<<<< HEAD
    'generated::ap7YD2lPaxB1454l' => 
=======
    'generated::PNVu2t1u0sn5aOeH' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
        'as' => 'generated::zxLmvY9eLqDG8X6C',
=======
<<<<<<< HEAD
        'as' => 'generated::2R4VYHJOULAMzKkh',
=======
<<<<<<< HEAD
        'as' => 'generated::ap7YD2lPaxB1454l',
=======
        'as' => 'generated::PNVu2t1u0sn5aOeH',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::ZNaMrM2dzk3Nvq1X' => 
=======
<<<<<<< HEAD
    'generated::ujqshafu8i91oLk5' => 
=======
<<<<<<< HEAD
    'generated::WrN0AFuC7YvxFpkw' => 
=======
    'generated::iuKU2pmPK5FQ1izg' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
        'as' => 'generated::ZNaMrM2dzk3Nvq1X',
=======
<<<<<<< HEAD
        'as' => 'generated::ujqshafu8i91oLk5',
=======
<<<<<<< HEAD
        'as' => 'generated::WrN0AFuC7YvxFpkw',
=======
        'as' => 'generated::iuKU2pmPK5FQ1izg',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::en02C1VU4obixJaS' => 
=======
<<<<<<< HEAD
    'generated::6MBTPxchiA1cudeI' => 
=======
<<<<<<< HEAD
    'generated::qdKN2CHUMwkAm5RV' => 
=======
    'generated::IVtwNTJyUs3EirN8' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
        'as' => 'generated::en02C1VU4obixJaS',
=======
<<<<<<< HEAD
        'as' => 'generated::6MBTPxchiA1cudeI',
=======
<<<<<<< HEAD
        'as' => 'generated::qdKN2CHUMwkAm5RV',
=======
        'as' => 'generated::IVtwNTJyUs3EirN8',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::35m9qLPRTVI9eooC' => 
=======
<<<<<<< HEAD
    'generated::VdUUNKt3mVGvZvc7' => 
=======
<<<<<<< HEAD
    'generated::kIenHZEQHyTIIhFV' => 
=======
    'generated::R9EexQYKIkM4vUb2' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
        'as' => 'generated::35m9qLPRTVI9eooC',
=======
<<<<<<< HEAD
        'as' => 'generated::VdUUNKt3mVGvZvc7',
=======
<<<<<<< HEAD
        'as' => 'generated::kIenHZEQHyTIIhFV',
=======
        'as' => 'generated::R9EexQYKIkM4vUb2',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::DwuYa14ZbbHsLSmY' => 
=======
<<<<<<< HEAD
    'generated::8MtLVdSBoFpKadNF' => 
=======
<<<<<<< HEAD
    'generated::XDJDGaSVoA55Nhcq' => 
=======
    'generated::pRAe8VxIPtUn64f3' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
        'as' => 'generated::DwuYa14ZbbHsLSmY',
=======
<<<<<<< HEAD
        'as' => 'generated::8MtLVdSBoFpKadNF',
=======
<<<<<<< HEAD
        'as' => 'generated::XDJDGaSVoA55Nhcq',
=======
        'as' => 'generated::pRAe8VxIPtUn64f3',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::b3yjG7dMIpKR7AkW' => 
=======
<<<<<<< HEAD
    'generated::u5apLUxI6yu0o3Eo' => 
=======
<<<<<<< HEAD
    'generated::50by56PGxI2REl3Z' => 
=======
    'generated::CQg7ftIsMOUN3Koh' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
        'as' => 'generated::b3yjG7dMIpKR7AkW',
=======
<<<<<<< HEAD
        'as' => 'generated::u5apLUxI6yu0o3Eo',
=======
<<<<<<< HEAD
        'as' => 'generated::50by56PGxI2REl3Z',
=======
        'as' => 'generated::CQg7ftIsMOUN3Koh',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::03SG2bLEGgQT4D92' => 
=======
<<<<<<< HEAD
    'generated::VM2kAw33IQBrttJL' => 
=======
<<<<<<< HEAD
    'generated::fjhQZR42SVqfiIMV' => 
=======
    'generated::4NM98BMbvfY9xeKT' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
        'as' => 'generated::03SG2bLEGgQT4D92',
=======
<<<<<<< HEAD
        'as' => 'generated::VM2kAw33IQBrttJL',
=======
<<<<<<< HEAD
        'as' => 'generated::fjhQZR42SVqfiIMV',
=======
        'as' => 'generated::4NM98BMbvfY9xeKT',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::dbXwVDxhL1H4ecuW' => 
=======
<<<<<<< HEAD
    'generated::GHZE3FC6KdMbJwjk' => 
=======
<<<<<<< HEAD
    'generated::82SpKpcjBPG1Viuc' => 
=======
    'generated::74DqzSgNU2zgm6XV' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::cJSpLBrkcVQnQf1R' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@home',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@home',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::dbXwVDxhL1H4ecuW',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::GHZE3FC6KdMbJwjk',
=======
<<<<<<< HEAD
        'as' => 'generated::82SpKpcjBPG1Viuc',
=======
        'as' => 'generated::74DqzSgNU2zgm6XV',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::cJSpLBrkcVQnQf1R',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::sDghChky3qYhPduX' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::y8a8T2OLYAduPUEZ' => 
=======
<<<<<<< HEAD
    'generated::ua1a5ImR1iYsdQYU' => 
=======
    'generated::iWOf7NWuGNblGqfY' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::xXi6isxl9D58vRmr' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/demo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@demo',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@demo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Qp8eiLHY6nPSb1IC',
=======
<<<<<<< HEAD
        'as' => 'generated::sDghChky3qYhPduX',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::y8a8T2OLYAduPUEZ',
=======
<<<<<<< HEAD
        'as' => 'generated::ua1a5ImR1iYsdQYU',
=======
        'as' => 'generated::iWOf7NWuGNblGqfY',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::xXi6isxl9D58vRmr',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::4Y6ZFFAobgwlgwRN' => 
=======
<<<<<<< HEAD
    'generated::Q6MXvtrGuwBvx4Js' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::hwuWaJoqWjiXwOet' => 
=======
<<<<<<< HEAD
    'generated::1KOuW8s6i52AiD1I' => 
=======
    'generated::ZOiNryhMM25FSsmB' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::KTwMJmlPOQJsa1gP' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/category_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@category_data',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@category_data',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::4Y6ZFFAobgwlgwRN',
=======
<<<<<<< HEAD
        'as' => 'generated::Q6MXvtrGuwBvx4Js',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::hwuWaJoqWjiXwOet',
=======
<<<<<<< HEAD
        'as' => 'generated::1KOuW8s6i52AiD1I',
=======
        'as' => 'generated::ZOiNryhMM25FSsmB',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::KTwMJmlPOQJsa1gP',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::u6ceM3coJW7ylXF3' => 
=======
<<<<<<< HEAD
    'generated::mxyqZhhiC0jtC6Gd' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::Rq8VAv1wYE9bDFSz' => 
=======
<<<<<<< HEAD
    'generated::vtxecBm1BO3PZmZ2' => 
=======
    'generated::CagMANH6o5qo4CW6' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::QUYZT5gmgsp2dDLP' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/Main_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@Main_category',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@Main_category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::u6ceM3coJW7ylXF3',
=======
<<<<<<< HEAD
        'as' => 'generated::mxyqZhhiC0jtC6Gd',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::Rq8VAv1wYE9bDFSz',
=======
<<<<<<< HEAD
        'as' => 'generated::vtxecBm1BO3PZmZ2',
=======
        'as' => 'generated::CagMANH6o5qo4CW6',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::QUYZT5gmgsp2dDLP',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::nWTTvLq62fLN3MiA' => 
=======
<<<<<<< HEAD
    'generated::ltHT5XspXY8jXGLr' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::dQodshnPXnAqnwxT' => 
=======
<<<<<<< HEAD
    'generated::Ju05xRk1T53g6Rdx' => 
=======
    'generated::S18J1S7Twomw6ait' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::giFXcmRWxCp0Cvk3' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/category_detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@category_detail',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@category_detail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::nWTTvLq62fLN3MiA',
=======
<<<<<<< HEAD
        'as' => 'generated::ltHT5XspXY8jXGLr',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::dQodshnPXnAqnwxT',
=======
<<<<<<< HEAD
        'as' => 'generated::Ju05xRk1T53g6Rdx',
=======
        'as' => 'generated::S18J1S7Twomw6ait',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::giFXcmRWxCp0Cvk3',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::ZxiV8MZrqMQVrvXD' => 
=======
<<<<<<< HEAD
    'generated::ks7YpwVLd1NojlbK' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::1LkfC8cpeZfJMzyF' => 
=======
<<<<<<< HEAD
    'generated::H1svhxTyOp4C07gN' => 
=======
    'generated::WrZ4mHRgxNVbgyyn' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::mZMvxZoF2YgIYeqA' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/view_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@view_profile',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@view_profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ks7YpwVLd1NojlbK',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::1LkfC8cpeZfJMzyF',
=======
<<<<<<< HEAD
        'as' => 'generated::H1svhxTyOp4C07gN',
=======
        'as' => 'generated::WrZ4mHRgxNVbgyyn',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::mZMvxZoF2YgIYeqA',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::aHId7tlmZ36gNXAX' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::sqqI7JeybmHd26Wm' => 
=======
<<<<<<< HEAD
    'generated::Rl6uVKBmZkZ8avny' => 
=======
    'generated::eFgyEX41YFq7yK2H' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::90TZSBOf3t2OOYlI' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/featured_places',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@featured_places',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@featured_places',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::aHId7tlmZ36gNXAX',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::sqqI7JeybmHd26Wm',
=======
<<<<<<< HEAD
        'as' => 'generated::Rl6uVKBmZkZ8avny',
=======
        'as' => 'generated::eFgyEX41YFq7yK2H',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::90TZSBOf3t2OOYlI',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
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
    'generated::NuVcdqYBE0Vf6pJP' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::tqI0Ycept1urHixI' => 
=======
<<<<<<< HEAD
    'generated::WE7dSFPMdzHaj8sR' => 
=======
    'generated::sf2GGC4B8R0kJaeu' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::iAMvDtWXhAidHosb' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/more_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@more_category',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@more_category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZxiV8MZrqMQVrvXD',
=======
<<<<<<< HEAD
        'as' => 'generated::NuVcdqYBE0Vf6pJP',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::tqI0Ycept1urHixI',
=======
<<<<<<< HEAD
        'as' => 'generated::WE7dSFPMdzHaj8sR',
=======
        'as' => 'generated::sf2GGC4B8R0kJaeu',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::iAMvDtWXhAidHosb',
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::8JnxMRjNlWp1WVvX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sub_categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@sub_categories',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@sub_categories',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8JnxMRjNlWp1WVvX',
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
    'generated::gi8eUK072trPbgm6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@home',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@home',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gi8eUK072trPbgm6',
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
    'generated::6noA7YZpshVoBC2J' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@update_user',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@update_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6noA7YZpshVoBC2J',
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
    'generated::zvme4QG0fDs8bzll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/view_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@view_profile',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@view_profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::zvme4QG0fDs8bzll',
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
    'generated::GsRxo8ZZy1QN8HEk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/featured_places',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@featured_places',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@featured_places',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GsRxo8ZZy1QN8HEk',
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
    'generated::btQBERgnLfBrHVTo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/feature_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@feature_list',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@feature_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::btQBERgnLfBrHVTo',
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
    'generated::YKI9lAMSkTy2zCqD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/add_company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@add_company',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@add_company',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YKI9lAMSkTy2zCqD',
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
    'generated::0vd1CT65U6zgrEIf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@faq',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@faq',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0vd1CT65U6zgrEIf',
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
    'generated::56DIFGbzWGp91FU6' => 
=======
    'generated::0VONaStTjv135slm' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/Privacy_policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@Privacy_policy',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@Privacy_policy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::56DIFGbzWGp91FU6',
=======
        'as' => 'generated::0VONaStTjv135slm',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::yUxsFpnVRsXmdTy9' => 
=======
    'generated::qFEX2uxwYOilvQsw' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/nearbyLocation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@nearbyLocation',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@nearbyLocation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::yUxsFpnVRsXmdTy9',
=======
        'as' => 'generated::qFEX2uxwYOilvQsw',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::Kbg5B2wEhOe2VzpD' => 
=======
    'generated::mN8r5ADTx9Kzxh2b' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/savedroutes/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\savedroutes@store',
        'controller' => 'App\\Http\\Controllers\\API\\savedroutes@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Kbg5B2wEhOe2VzpD',
=======
        'as' => 'generated::mN8r5ADTx9Kzxh2b',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::eXpNSBuhupJrOlTs' => 
=======
    'generated::OEFrVh7ZBQ17E8uV' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/savedroutes/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\savedroutes@show',
        'controller' => 'App\\Http\\Controllers\\API\\savedroutes@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::eXpNSBuhupJrOlTs',
=======
        'as' => 'generated::OEFrVh7ZBQ17E8uV',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::tmvlvOvs0SDlZ97j' => 
=======
    'generated::8Ktw2GqAraIhvN3l' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/savedroutes/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\savedroutes@delete',
        'controller' => 'App\\Http\\Controllers\\API\\savedroutes@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::tmvlvOvs0SDlZ97j',
=======
        'as' => 'generated::8Ktw2GqAraIhvN3l',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::n8bs5SDOS1FN011z' => 
=======
    'generated::3xel3mfFE9NTHSKJ' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/savedroutes/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\savedroutes@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\savedroutes@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::n8bs5SDOS1FN011z',
=======
        'as' => 'generated::3xel3mfFE9NTHSKJ',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::MnRNwSJpvBYlmgy9' => 
=======
    'generated::9tw4VBNBV4FWCLL1' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/mypalces/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Mypalces@store',
        'controller' => 'App\\Http\\Controllers\\API\\Mypalces@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::MnRNwSJpvBYlmgy9',
=======
        'as' => 'generated::9tw4VBNBV4FWCLL1',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::TeXNdp9Czdn8Ni7J' => 
=======
    'generated::Ql86jwTAAaBH5sZJ' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/mypalces/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Mypalces@show',
        'controller' => 'App\\Http\\Controllers\\API\\Mypalces@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::TeXNdp9Czdn8Ni7J',
=======
        'as' => 'generated::Ql86jwTAAaBH5sZJ',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::JAByrGIE58NPhqFJ' => 
=======
    'generated::U56v9awU1H67EFV2' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/mypalces/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Mypalces@delete',
        'controller' => 'App\\Http\\Controllers\\API\\Mypalces@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JAByrGIE58NPhqFJ',
=======
        'as' => 'generated::U56v9awU1H67EFV2',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::3z1yRU416c2qCN2V' => 
=======
    'generated::tdXBBu0A8WRuUPhI' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/mypalces/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Mypalces@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\Mypalces@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::3z1yRU416c2qCN2V',
=======
<<<<<<< HEAD
        'as' => 'generated::tdXBBu0A8WRuUPhI',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::upkE7dYHkhJgBR8p' => 
=======
    'generated::W1aA8tzcr59Z708h' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addreview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
<<<<<<< HEAD
        'uses' => 'App\\Http\\Controllers\\UserController@verifyotpuser',
        'controller' => 'App\\Http\\Controllers\\UserController@verifyotpuser',
=======
        'uses' => 'App\\Http\\Controllers\\API\\Addreview@index',
        'controller' => 'App\\Http\\Controllers\\API\\Addreview@index',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::upkE7dYHkhJgBR8p',
=======
        'as' => 'generated::W1aA8tzcr59Z708h',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::s2eY22xmbrDf4Z7v' => 
=======
    'generated::ddzsZtp090gpiMFg' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addreview/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Addreview@store',
        'controller' => 'App\\Http\\Controllers\\API\\Addreview@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::s2eY22xmbrDf4Z7v',
=======
        'as' => 'generated::ddzsZtp090gpiMFg',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::zkK6ndozbOjS7tHa' => 
=======
    'generated::S9Z5vdud3wxGfLYy' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addreview/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Addreview@show',
        'controller' => 'App\\Http\\Controllers\\API\\Addreview@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::zkK6ndozbOjS7tHa',
=======
        'as' => 'generated::S9Z5vdud3wxGfLYy',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::mHUFUVOaxbzRpq5T' => 
=======
    'generated::OQeWPWlV3PYGq5uI' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addreview/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Addreview@update',
        'controller' => 'App\\Http\\Controllers\\API\\Addreview@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::mHUFUVOaxbzRpq5T',
=======
        'as' => 'generated::OQeWPWlV3PYGq5uI',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::RuT9BfeMQcZPtvMB' => 
=======
    'generated::YhXxdXhWiqUsiVUX' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addreview/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Addreview@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\Addreview@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::RuT9BfeMQcZPtvMB',
=======
        'as' => 'generated::YhXxdXhWiqUsiVUX',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::QBzJWNLhBIiwE3ny' => 
=======
    'generated::d8NyS4J5n0nTdDr5' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/car_make',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@car_make',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@car_make',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::QBzJWNLhBIiwE3ny',
=======
        'as' => 'generated::d8NyS4J5n0nTdDr5',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::IpMaXfIkpDOcG7cE' => 
=======
    'generated::9qUcPyf84zyYmxXH' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/car_model',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@car_model',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@car_model',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IpMaXfIkpDOcG7cE',
=======
        'as' => 'generated::9qUcPyf84zyYmxXH',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::6p2qzJPGugW8kAZV' => 
=======
    'generated::cB1lJ6TPab0syaML' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/caralldetailes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@caralldetailes',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@caralldetailes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::6p2qzJPGugW8kAZV',
=======
        'as' => 'generated::cB1lJ6TPab0syaML',
=======
        'as' => 'generated::t1WPMZR7oq1Hhen8',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::p09jZ8aYhm8RC2Eg' => 
=======
    'login' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::p09jZ8aYhm8RC2Eg',
=======
        'as' => 'login',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::2LKd5LB4hyuEU6KJ' => 
=======
<<<<<<< HEAD
    'generated::Fu4jET46EukD8jsH' => 
=======
<<<<<<< HEAD
    'generated::2IY9wQ8YSfDUV4wB' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::k6qqAjY0PJwPblEM' => 
=======
<<<<<<< HEAD
    'generated::cqe3nkNvUs7z4aRg' => 
=======
    'generated::LoUiN9znJc3Q17xT' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::LRfP8ArCfXSF5pDT' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::2LKd5LB4hyuEU6KJ',
=======
<<<<<<< HEAD
        'as' => 'generated::Fu4jET46EukD8jsH',
=======
<<<<<<< HEAD
        'as' => 'generated::2IY9wQ8YSfDUV4wB',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::k6qqAjY0PJwPblEM',
=======
<<<<<<< HEAD
        'as' => 'generated::cqe3nkNvUs7z4aRg',
=======
        'as' => 'generated::LoUiN9znJc3Q17xT',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::LRfP8ArCfXSF5pDT',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::na67l2523CX5wrAt' => 
=======
    'logout' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::na67l2523CX5wrAt',
=======
        'as' => 'logout',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::rhzw0gKcE8EtEJkz' => 
=======
    'register' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::rhzw0gKcE8EtEJkz',
=======
        'as' => 'register',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::4TrTRqQLCIG849rH' => 
=======
<<<<<<< HEAD
    'generated::xENKas3n6X7mXydK' => 
=======
<<<<<<< HEAD
    'generated::YSzD5WAn6XuzsaSj' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::GNorBVxNkBN8r6Es' => 
=======
<<<<<<< HEAD
    'generated::w8wRoyBlQAveHVFL' => 
=======
    'generated::aWTfKUXtO8fLXns4' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::mYV0P2vi1CsANsf9' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::4TrTRqQLCIG849rH',
=======
<<<<<<< HEAD
        'as' => 'generated::xENKas3n6X7mXydK',
=======
<<<<<<< HEAD
        'as' => 'generated::YSzD5WAn6XuzsaSj',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::GNorBVxNkBN8r6Es',
=======
<<<<<<< HEAD
        'as' => 'generated::w8wRoyBlQAveHVFL',
=======
        'as' => 'generated::aWTfKUXtO8fLXns4',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::mYV0P2vi1CsANsf9',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::AoWeVDOjOiQK1Tyh' => 
=======
    'password.request' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::AoWeVDOjOiQK1Tyh',
=======
        'as' => 'password.request',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::fOvPxyLDXCVlpewa' => 
=======
    'password.email' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::fOvPxyLDXCVlpewa',
=======
        'as' => 'password.email',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::SuwTrg12uQ5DBJVZ' => 
=======
    'password.reset' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::SuwTrg12uQ5DBJVZ',
=======
        'as' => 'password.reset',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::tbXEEvtiJh0m3Saq' => 
=======
    'password.update' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::tbXEEvtiJh0m3Saq',
=======
        'as' => 'password.update',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::jHfdK0iX9YsG0b9R' => 
=======
<<<<<<< HEAD
    'generated::hEesriLejzvoyF2b' => 
=======
<<<<<<< HEAD
    'generated::o2ZIX3HKyswJfiog' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::GMnVr614aENDz3tp' => 
=======
<<<<<<< HEAD
    'generated::bK47wxV5a3bWf4gj' => 
=======
    'generated::1Rsns4qBOz1KGej9' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::8YeTsWaHCPzqH5kl' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::jHfdK0iX9YsG0b9R',
=======
<<<<<<< HEAD
        'as' => 'generated::hEesriLejzvoyF2b',
=======
<<<<<<< HEAD
        'as' => 'generated::o2ZIX3HKyswJfiog',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::GMnVr614aENDz3tp',
=======
<<<<<<< HEAD
        'as' => 'generated::bK47wxV5a3bWf4gj',
=======
        'as' => 'generated::1Rsns4qBOz1KGej9',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::8YeTsWaHCPzqH5kl',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::e5ue047vFkIRZA7X' => 
=======
<<<<<<< HEAD
    'generated::7GfmBomltkGgMdKZ' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::Gj0YGR0O7RzIGIfw' => 
=======
    'generated::n9gYsTdg7XHja1wg' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::f61sblGkqw212tXT' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
        'as' => 'generated::e5ue047vFkIRZA7X',
=======
<<<<<<< HEAD
        'as' => 'generated::7GfmBomltkGgMdKZ',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::Gj0YGR0O7RzIGIfw',
=======
<<<<<<< HEAD
        'as' => 'generated::ixFUSjtKuIOjtCcL',
=======
        'as' => 'generated::n9gYsTdg7XHja1wg',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::f61sblGkqw212tXT',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::RPEvt9AjBmuAHWwP' => 
=======
<<<<<<< HEAD
    'generated::Rm8AeFIF1VBPSAoU' => 
=======
<<<<<<< HEAD
    'generated::2cGnAi284ixcMdal' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::26MQhRtSyjZgCkuo' => 
=======
<<<<<<< HEAD
    'generated::7oYH2g6bCYJEpFrq' => 
=======
    'generated::kJ4jQJ1727qiE6C7' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::xcdDBR5JhVAZBUf7' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::RPEvt9AjBmuAHWwP',
=======
<<<<<<< HEAD
        'as' => 'generated::Rm8AeFIF1VBPSAoU',
=======
<<<<<<< HEAD
        'as' => 'generated::2cGnAi284ixcMdal',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::26MQhRtSyjZgCkuo',
=======
<<<<<<< HEAD
        'as' => 'generated::7oYH2g6bCYJEpFrq',
=======
        'as' => 'generated::kJ4jQJ1727qiE6C7',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::xcdDBR5JhVAZBUf7',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::ovYCfcKKWXeX6Btq' => 
=======
<<<<<<< HEAD
    'generated::c4EWEFNDtRWTzMKB' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::Ba1UBZbdIcDy1nmO' => 
=======
<<<<<<< HEAD
    'generated::ZMBsCOwf5IA60FHy' => 
=======
    'generated::oejc7nBPaMnkV0yd' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::JdZTcdqUvVAIzZR0' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
        'as' => 'generated::ovYCfcKKWXeX6Btq',
=======
<<<<<<< HEAD
        'as' => 'generated::c4EWEFNDtRWTzMKB',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::Ba1UBZbdIcDy1nmO',
=======
<<<<<<< HEAD
        'as' => 'generated::ZMBsCOwf5IA60FHy',
=======
        'as' => 'generated::oejc7nBPaMnkV0yd',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::JdZTcdqUvVAIzZR0',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::yrCin2jx9oIaNLAf' => 
=======
<<<<<<< HEAD
    'generated::Eq9fmIqR96eIEg9Q' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::nrlCHdDkCTqFvfZ8' => 
=======
<<<<<<< HEAD
    'generated::jBuZTtrdj8CaAUff' => 
=======
    'generated::msuQvRai6nYlZzrP' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::mYCGAtrg12bHtqSt' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
        'as' => 'generated::yrCin2jx9oIaNLAf',
=======
<<<<<<< HEAD
        'as' => 'generated::Eq9fmIqR96eIEg9Q',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::nrlCHdDkCTqFvfZ8',
=======
<<<<<<< HEAD
        'as' => 'generated::jBuZTtrdj8CaAUff',
=======
        'as' => 'generated::msuQvRai6nYlZzrP',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::mYCGAtrg12bHtqSt',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::n0TlcdqBcUEm78y3' => 
=======
<<<<<<< HEAD
    'generated::RAlT2vetyoLkIxOi' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::GfFdkD1Su01mSssn' => 
=======
<<<<<<< HEAD
    'generated::a2Pjgx79yRvdgiAC' => 
=======
    'generated::54NvinJUzzETz5fR' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::9fDqKhm2xf0UWJ3j' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
        'as' => 'generated::n0TlcdqBcUEm78y3',
=======
<<<<<<< HEAD
        'as' => 'generated::RAlT2vetyoLkIxOi',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::GfFdkD1Su01mSssn',
=======
<<<<<<< HEAD
        'as' => 'generated::a2Pjgx79yRvdgiAC',
=======
        'as' => 'generated::54NvinJUzzETz5fR',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::9fDqKhm2xf0UWJ3j',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::bblpDIeIZRPT990l' => 
=======
<<<<<<< HEAD
    'generated::1kLZMUnjBtFXDUsj' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::pAic1KTgbUpJ3mtH' => 
=======
<<<<<<< HEAD
    'generated::DdJ3GFx231kj8Jf8' => 
=======
    'generated::FwJmro6td752wIf6' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::0ct1evRFr0ANAquV' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
        'as' => 'generated::bblpDIeIZRPT990l',
=======
<<<<<<< HEAD
        'as' => 'generated::1kLZMUnjBtFXDUsj',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::pAic1KTgbUpJ3mtH',
=======
<<<<<<< HEAD
        'as' => 'generated::DdJ3GFx231kj8Jf8',
=======
        'as' => 'generated::FwJmro6td752wIf6',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::0ct1evRFr0ANAquV',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::BWI4g6W7Sor1LhWn' => 
=======
<<<<<<< HEAD
    'generated::7dL1gBwY0ejPSQOk' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::LVEul8pbziEKBSni' => 
=======
<<<<<<< HEAD
    'generated::CbPJETc9fpZ4uUiE' => 
=======
    'generated::T7A8vBDUR4SOgOft' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::DbPWJFKrj1elSSJK' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
        'as' => 'generated::BWI4g6W7Sor1LhWn',
=======
<<<<<<< HEAD
        'as' => 'generated::7dL1gBwY0ejPSQOk',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::LVEul8pbziEKBSni',
=======
<<<<<<< HEAD
        'as' => 'generated::CbPJETc9fpZ4uUiE',
=======
        'as' => 'generated::T7A8vBDUR4SOgOft',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::DbPWJFKrj1elSSJK',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::xWGYuEyVbkmvloJN' => 
=======
<<<<<<< HEAD
    'generated::shXgU4riy1yPyGPu' => 
=======
<<<<<<< HEAD
    'generated::yiTh14HKMPCQHGo7' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::nroKaPVCGCRZAO9x' => 
=======
<<<<<<< HEAD
    'generated::frmvMFl35CCkc1xC' => 
=======
    'generated::vvg7LcAHWmFhY0dI' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::D7CHElqJ0vuZXqgx' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::xWGYuEyVbkmvloJN',
=======
<<<<<<< HEAD
        'as' => 'generated::shXgU4riy1yPyGPu',
=======
<<<<<<< HEAD
        'as' => 'generated::yiTh14HKMPCQHGo7',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::nroKaPVCGCRZAO9x',
=======
<<<<<<< HEAD
        'as' => 'generated::frmvMFl35CCkc1xC',
=======
        'as' => 'generated::vvg7LcAHWmFhY0dI',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::D7CHElqJ0vuZXqgx',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'changeLang' => 
=======
<<<<<<< HEAD
    'generated::GprKqSj5MmWOMFlC' => 
=======
<<<<<<< HEAD
    'generated::pf1PdFgOIvh00uZF' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::TKNjKB3iYW3FeFcg' => 
=======
<<<<<<< HEAD
    'generated::kZLsYiForPzkrrJG' => 
=======
    'generated::jmqcymW6auyCGtU9' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::MC8Uwi3GaTa7RzSL' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::GprKqSj5MmWOMFlC',
=======
<<<<<<< HEAD
        'as' => 'generated::pf1PdFgOIvh00uZF',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::TKNjKB3iYW3FeFcg',
=======
<<<<<<< HEAD
        'as' => 'generated::kZLsYiForPzkrrJG',
=======
        'as' => 'generated::jmqcymW6auyCGtU9',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::MC8Uwi3GaTa7RzSL',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
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
    'generated::4FLCCwPZQpgSQdOa' => 
=======
<<<<<<< HEAD
    'generated::24wWmzKyLQaKxcxC' => 
=======
<<<<<<< HEAD
    'generated::f4qdjvpBjI15Cgnu' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::elKT72pcdOiOt34r' => 
=======
<<<<<<< HEAD
    'generated::5Qc8WsbVYjMHIgru' => 
=======
    'generated::QEkNBjLS6gCACBxE' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::qCx3qJCo6j6AqEQE' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::4FLCCwPZQpgSQdOa',
=======
<<<<<<< HEAD
        'as' => 'generated::24wWmzKyLQaKxcxC',
=======
<<<<<<< HEAD
        'as' => 'generated::f4qdjvpBjI15Cgnu',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::elKT72pcdOiOt34r',
=======
<<<<<<< HEAD
        'as' => 'generated::5Qc8WsbVYjMHIgru',
=======
        'as' => 'generated::QEkNBjLS6gCACBxE',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::qCx3qJCo6j6AqEQE',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::GX4wj4CJ7ko4LIdF' => 
=======
<<<<<<< HEAD
    'generated::TrrlHa0GGUN5PjDD' => 
=======
<<<<<<< HEAD
    'generated::03nYlh66aSloyG4t' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::iMRnbI7OvQndfTdb' => 
=======
<<<<<<< HEAD
    'generated::cLlL5pXedFQ6D4SV' => 
=======
    'generated::2gsFSKU1pcxrCBjy' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::OBraGkSQDqrFijKg' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::GX4wj4CJ7ko4LIdF',
=======
<<<<<<< HEAD
        'as' => 'generated::TrrlHa0GGUN5PjDD',
=======
<<<<<<< HEAD
        'as' => 'generated::03nYlh66aSloyG4t',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::iMRnbI7OvQndfTdb',
=======
<<<<<<< HEAD
        'as' => 'generated::cLlL5pXedFQ6D4SV',
=======
        'as' => 'generated::2gsFSKU1pcxrCBjy',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::OBraGkSQDqrFijKg',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::RoXnGXiD4eteC69f' => 
=======
<<<<<<< HEAD
    'generated::LGQpiXaPBxcoVJej' => 
=======
<<<<<<< HEAD
    'generated::YxJ9UpY8Uxz8KT77' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::IfiuOGuDJuofHL0H' => 
=======
<<<<<<< HEAD
    'generated::O9XxXO59f3NUgXYk' => 
=======
    'generated::gKuEpr1V8CgbQ4IR' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::Wz8VMFNw130jWl3K' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::RoXnGXiD4eteC69f',
=======
<<<<<<< HEAD
        'as' => 'generated::LGQpiXaPBxcoVJej',
=======
<<<<<<< HEAD
        'as' => 'generated::YxJ9UpY8Uxz8KT77',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::IfiuOGuDJuofHL0H',
=======
<<<<<<< HEAD
        'as' => 'generated::O9XxXO59f3NUgXYk',
=======
        'as' => 'generated::gKuEpr1V8CgbQ4IR',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::Wz8VMFNw130jWl3K',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::jUtYf7ShAmqv1jrz' => 
=======
<<<<<<< HEAD
    'generated::oj09ldmEcSc0V5R3' => 
=======
<<<<<<< HEAD
    'generated::5CIRj7e2XBFiWz67' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::sjsWlrA738oRCmmf' => 
=======
<<<<<<< HEAD
    'generated::LTVCOsIO5JtGUtXH' => 
=======
    'generated::iBszfiVqdUzHvuum' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::qEaHzDAVMzcFU6a8' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::jUtYf7ShAmqv1jrz',
=======
<<<<<<< HEAD
        'as' => 'generated::oj09ldmEcSc0V5R3',
=======
<<<<<<< HEAD
        'as' => 'generated::5CIRj7e2XBFiWz67',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::sjsWlrA738oRCmmf',
=======
<<<<<<< HEAD
        'as' => 'generated::LTVCOsIO5JtGUtXH',
=======
        'as' => 'generated::iBszfiVqdUzHvuum',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::qEaHzDAVMzcFU6a8',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::HARDY99AWTB4L9hY' => 
=======
<<<<<<< HEAD
    'generated::Zy5gf0ggM39NCuZG' => 
=======
<<<<<<< HEAD
    'generated::1mAOkIlEZnkDfADv' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::DrJZ0n3h91IodPYL' => 
=======
<<<<<<< HEAD
    'generated::rCqPHAlHiSzI0WZG' => 
=======
    'generated::nmpcsTdG0IwZkTs4' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::lNh39AzSqKfu12Qt' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::HARDY99AWTB4L9hY',
=======
<<<<<<< HEAD
        'as' => 'generated::Zy5gf0ggM39NCuZG',
=======
<<<<<<< HEAD
        'as' => 'generated::1mAOkIlEZnkDfADv',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::DrJZ0n3h91IodPYL',
=======
<<<<<<< HEAD
        'as' => 'generated::rCqPHAlHiSzI0WZG',
=======
        'as' => 'generated::nmpcsTdG0IwZkTs4',
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::lNh39AzSqKfu12Qt',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::Ysm2Ib3oNEGvArTL' => 
=======
<<<<<<< HEAD
    'generated::7UXUMAjQd6eYhRVN' => 
=======
<<<<<<< HEAD
    'generated::jReQHn7sKm3YzBA0' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::VPuJEjkNbNJomq3S' => 
=======
    'generated::VB9iJiHEOXRSKx1A' => 
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::WEbmW7DCp78R0Mf2' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::Ysm2Ib3oNEGvArTL',
=======
<<<<<<< HEAD
        'as' => 'generated::7UXUMAjQd6eYhRVN',
=======
<<<<<<< HEAD
        'as' => 'generated::jReQHn7sKm3YzBA0',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::VPuJEjkNbNJomq3S',
=======
        'as' => 'generated::VB9iJiHEOXRSKx1A',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::WEbmW7DCp78R0Mf2',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::Q5qVikhmIc5k2Lt6' => 
=======
    'home' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::Q5qVikhmIc5k2Lt6',
=======
        'as' => 'home',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::OOemteCyHrxAEZEf' => 
=======
<<<<<<< HEAD
    'generated::JodMSVZy9k7W8Xz5' => 
=======
<<<<<<< HEAD
    'generated::XT5jKEQ93MEGeGdD' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::AhXUe2Hp6e5vkzOJ' => 
=======
<<<<<<< HEAD
    'generated::nFw8zqcMYZ90SOu1' => 
=======
    'generated::4sfAOdX9dv5mR1dx' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::RMDT4BLiT4GupKsc' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::OOemteCyHrxAEZEf',
=======
<<<<<<< HEAD
        'as' => 'generated::JodMSVZy9k7W8Xz5',
=======
<<<<<<< HEAD
        'as' => 'generated::XT5jKEQ93MEGeGdD',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::AhXUe2Hp6e5vkzOJ',
=======
<<<<<<< HEAD
        'as' => 'generated::nFw8zqcMYZ90SOu1',
=======
        'as' => 'generated::4sfAOdX9dv5mR1dx',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::RMDT4BLiT4GupKsc',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::V1J6GJTf7bzAuy16' => 
=======
<<<<<<< HEAD
    'generated::6wTHn9lp9O6NPYVc' => 
=======
<<<<<<< HEAD
    'generated::ehn7tg7cVqdXmqVB' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::C1npTQwKHN0Gg1Tx' => 
=======
<<<<<<< HEAD
    'generated::JXrcDMZWJhXIrCeJ' => 
=======
    'generated::F580INg1QbH0Nbji' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::Yyl6GF9r4lN9gkCp' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::V1J6GJTf7bzAuy16',
=======
<<<<<<< HEAD
        'as' => 'generated::6wTHn9lp9O6NPYVc',
=======
<<<<<<< HEAD
        'as' => 'generated::ehn7tg7cVqdXmqVB',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::C1npTQwKHN0Gg1Tx',
=======
<<<<<<< HEAD
        'as' => 'generated::JXrcDMZWJhXIrCeJ',
=======
        'as' => 'generated::F580INg1QbH0Nbji',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::Yyl6GF9r4lN9gkCp',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::UT84YMkPa9kWvKM1' => 
=======
    'save-token' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::UT84YMkPa9kWvKM1',
=======
        'as' => 'save-token',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::5DyFBCPKIM8R7SVN' => 
=======
    'send.notification' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::5DyFBCPKIM8R7SVN',
=======
        'as' => 'send.notification',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::LMBgpVWz11DLyme3' => 
=======
    'textOnImage' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::LMBgpVWz11DLyme3',
=======
        'as' => 'textOnImage',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::J75GuRVSBER8JW2b' => 
=======
<<<<<<< HEAD
    'generated::VGm2q08VanqCtivu' => 
=======
<<<<<<< HEAD
    'generated::8GXWpy6ANOsS73u8' => 
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::LNdMDVlcjCu3atVD' => 
=======
<<<<<<< HEAD
    'generated::tqMMYB524YLY0NKd' => 
=======
    'generated::3tk93uOlQSv6TtLI' => 
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
    'generated::pkRFCpxg8ZSS4eRM' => 
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
        'as' => 'generated::J75GuRVSBER8JW2b',
=======
<<<<<<< HEAD
        'as' => 'generated::VGm2q08VanqCtivu',
=======
<<<<<<< HEAD
        'as' => 'generated::8GXWpy6ANOsS73u8',
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::LNdMDVlcjCu3atVD',
=======
<<<<<<< HEAD
        'as' => 'generated::tqMMYB524YLY0NKd',
=======
        'as' => 'generated::3tk93uOlQSv6TtLI',
>>>>>>> purvi
>>>>>>> aaafeba6e8d166cd9a1353b517bcc13129228127
=======
        'as' => 'generated::pkRFCpxg8ZSS4eRM',
>>>>>>> sahil
>>>>>>> 8053a124b6dfd0a2d09a95e709065afc938bb916
>>>>>>> 5c35c948b475da295bfd5ea9db2b72a37e911b14
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::zLU7DaHNGlbtqQyO' => 
=======
    'mailcheck' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::zLU7DaHNGlbtqQyO',
=======
        'as' => 'mailcheck',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::TrYXezz9EumT2aHT' => 
=======
    'verifypassword' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::TrYXezz9EumT2aHT',
=======
        'as' => 'verifypassword',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
    'generated::XvhTzoMc79G42OUW' => 
=======
    'verifyemail' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
=======
        'uses' => 'App\\Http\\Controllers\\UserController@verifyemail',
        'controller' => 'App\\Http\\Controllers\\UserController@verifyemail',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::XvhTzoMc79G42OUW',
=======
        'as' => 'verifyemail',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'generated::t9qhoFaQ521f4C3j' => 
=======
    'send_mail' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::t9qhoFaQ521f4C3j',
=======
        'as' => 'send_mail',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
    'generated::f82jAxz60Xh4lcRW' => 
=======
    'about_us.index' => 
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
<<<<<<< HEAD
        'as' => 'generated::f82jAxz60Xh4lcRW',
=======
        'as' => 'about_us.index',
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b
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
    'feedback.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feedback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeedbackController@index',
        'controller' => 'App\\Http\\Controllers\\FeedbackController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feedback.index',
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
    'feedbackemail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feedbackemail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FeedbackController@feedbackemail',
        'controller' => 'App\\Http\\Controllers\\FeedbackController@feedbackemail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'feedbackemail',
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
    'faq.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@index',
        'controller' => 'App\\Http\\Controllers\\FaqController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'faq.index',
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
    'faq.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@create',
        'controller' => 'App\\Http\\Controllers\\FaqController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'faq.create',
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
    'faq.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/faq/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@store',
        'controller' => 'App\\Http\\Controllers\\FaqController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'faq.store',
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
    'faq.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@edit',
        'controller' => 'App\\Http\\Controllers\\FaqController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'faq.edit',
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
    'faq.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/faq/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@update',
        'controller' => 'App\\Http\\Controllers\\FaqController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'faq.update',
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
    'faq.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@view',
        'controller' => 'App\\Http\\Controllers\\FaqController@view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'faq.view',
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
    'deletefaq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deletefaq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@delete',
        'controller' => 'App\\Http\\Controllers\\FaqController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'deletefaq',
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
    'faq_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/faq_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@faq_status',
        'controller' => 'App\\Http\\Controllers\\FaqController@faq_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'faq_status',
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
