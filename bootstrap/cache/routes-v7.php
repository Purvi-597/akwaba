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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::eT6TSA0emrEgBguD',
=======
            '_route' => 'generated::QnzGZIlcLKzJcTzV',
>>>>>>> sahil
=======
            '_route' => 'generated::oODPM5NdNUToaOAx',
>>>>>>> sahil
=======
            '_route' => 'generated::hRgIyliYvhciXvgH',
>>>>>>> sahil
=======
            '_route' => 'generated::GPVrKsvp2RXUQvCL',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::vlwucq1tMMTmwnrK',
=======
            '_route' => 'generated::RzD8zTeA0aPu0g6S',
>>>>>>> sahil
=======
            '_route' => 'generated::0mLqVCsfQsdU2Yo1',
>>>>>>> sahil
=======
            '_route' => 'generated::KTnGaKd5wz0uW00l',
>>>>>>> sahil
=======
            '_route' => 'generated::lI0fOpvsWu5kaiXA',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::M2v7nlA3et891EtY',
=======
            '_route' => 'generated::TDKFBg8PmTQVjizJ',
>>>>>>> sahil
=======
            '_route' => 'generated::4SU9SJjYlRio9OtL',
>>>>>>> sahil
=======
            '_route' => 'generated::MRGC88yLrkUh4UhB',
>>>>>>> sahil
=======
            '_route' => 'generated::r7UaHzAfyw2ec0iy',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::FpbwxZkyAynNnD2W',
=======
            '_route' => 'generated::z1dR1R3qWpaSbQrD',
>>>>>>> sahil
=======
            '_route' => 'generated::qr5bCuQ6NFd9PBp6',
>>>>>>> sahil
=======
            '_route' => 'generated::Qyw0zZ1frkwGzzrD',
>>>>>>> sahil
=======
            '_route' => 'generated::3mUVJkV6n2fCPpti',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::625gPAQROnhF73We',
=======
            '_route' => 'generated::kNuoKjtg4e44j8Ue',
>>>>>>> sahil
=======
            '_route' => 'generated::m465RX71eO2LFzNL',
>>>>>>> sahil
=======
            '_route' => 'generated::3oF4SaEkXs40H6t8',
>>>>>>> sahil
=======
            '_route' => 'generated::fORF95WnrtBldRlP',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::ktz03pQgkjtAPJzb',
=======
            '_route' => 'generated::pgBdRKb1klWdGJeF',
>>>>>>> sahil
=======
            '_route' => 'generated::xamPWL66tT7iwd2K',
>>>>>>> sahil
=======
            '_route' => 'generated::tORX3dQN6DEuwcxE',
>>>>>>> sahil
=======
            '_route' => 'generated::LgCq7ogLCFG33tEN',
>>>>>>> sahil
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
      '/api/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pycLRbiR8jFsVr2S',
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
=======
>>>>>>> sahil
      '/api/demo' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::CunBvFAwR9auieSz',
=======
            '_route' => 'generated::Qp8eiLHY6nPSb1IC',
>>>>>>> sahil
=======
            '_route' => 'generated::oOczWSRwKCxfOs8J',
>>>>>>> sahil
=======
            '_route' => 'generated::Z4MkTxYe7oYoz0VU',
>>>>>>> sahil
=======
            '_route' => 'generated::Px9vEix32gHXwtPr',
>>>>>>> sahil
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
      '/api/delete_account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1Sb8WkN9m6NxMmKR',
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
      '/api/category_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::nAW1tvk8CQF5FmZZ',
=======
            '_route' => 'generated::4Y6ZFFAobgwlgwRN',
>>>>>>> sahil
=======
            '_route' => 'generated::7VgKMlxV6ojgYKyV',
>>>>>>> sahil
=======
            '_route' => 'generated::bBM87urt7mxHm0jY',
>>>>>>> sahil
=======
            '_route' => 'generated::paCaM61cIFqEsTWf',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::jr5Y2uYQfEeoMD48',
=======
            '_route' => 'generated::u6ceM3coJW7ylXF3',
>>>>>>> sahil
=======
            '_route' => 'generated::nOSGfU6jVPkmWywr',
>>>>>>> sahil
=======
            '_route' => 'generated::CrA0mwUpCA7fR1qQ',
>>>>>>> sahil
=======
            '_route' => 'generated::ExwMl7M41N6eaLTZ',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::ZI4n0viXKiZMR3Lz',
=======
            '_route' => 'generated::nWTTvLq62fLN3MiA',
>>>>>>> sahil
=======
            '_route' => 'generated::lgVs0RD4BpIuxmIf',
>>>>>>> sahil
=======
            '_route' => 'generated::xLDr88RxMDeNVXti',
>>>>>>> sahil
=======
            '_route' => 'generated::bQvJzhzzki3h26aE',
>>>>>>> sahil
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
      '/api/view_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dyu5Rns7Z09zYHG9',
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
            '_route' => 'generated::Sa57L62tIKIZEUHd',
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
=======
>>>>>>> sahil
      '/api/more_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::bC2SL5B8ITQP1dXT',
=======
            '_route' => 'generated::ZxiV8MZrqMQVrvXD',
>>>>>>> sahil
=======
            '_route' => 'generated::QqhkfTqVS3Otj2nz',
>>>>>>> sahil
=======
            '_route' => 'generated::HtWtVsPOcNz21sLc',
>>>>>>> sahil
=======
            '_route' => 'generated::31FkyAVS4cqCRZG3',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::YeBG3xlYJjh2R7NN',
=======
            '_route' => 'generated::8JnxMRjNlWp1WVvX',
=======
            '_route' => 'generated::QYDutWNK5l3Ha4Tm',
>>>>>>> sahil
=======
            '_route' => 'generated::fWpKe8Lli5NGESjC',
>>>>>>> sahil
=======
            '_route' => 'generated::yJrqJJp0T4FqxXug',
>>>>>>> sahil
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
            '_route' => 'generated::vSEBpdoR9BTYEBpI',
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
            '_route' => 'generated::fqfrl8yAPAEjKzSg',
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
            '_route' => 'generated::Ipj4e9CFuByQ2kou',
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
            '_route' => 'generated::1X2VzQgRDoleRotc',
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::btQBERgnLfBrHVTo',
>>>>>>> sahil
=======
            '_route' => 'generated::EEBDDON7fWrdLpvS',
>>>>>>> sahil
=======
            '_route' => 'generated::6xNRxxR73PHR0IZo',
>>>>>>> sahil
=======
            '_route' => 'generated::5PVjwWvHpkL9DlYS',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::3Vfot1RN2KLSTaHA',
=======
            '_route' => 'generated::YKI9lAMSkTy2zCqD',
>>>>>>> sahil
=======
            '_route' => 'generated::kEyJeh4td1hDtpyJ',
>>>>>>> sahil
=======
            '_route' => 'generated::Q3TkjhgukKXKq5Gs',
>>>>>>> sahil
=======
            '_route' => 'generated::qctIysbUuEpKhofi',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::UP5wJABQdZ2XNsJm',
=======
            '_route' => 'generated::0vd1CT65U6zgrEIf',
>>>>>>> sahil
=======
            '_route' => 'generated::AQKCRkzgaev10QVu',
>>>>>>> sahil
=======
            '_route' => 'generated::gNN9Rt3v2Z2t2wC3',
>>>>>>> sahil
=======
            '_route' => 'generated::vbggkRjQU5oc604c',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::gbvwmKT2hpvKbBKb',
=======
            '_route' => 'generated::0VONaStTjv135slm',
=======
            '_route' => 'generated::P7fJZt2LVfkbNpTE',
>>>>>>> sahil
=======
            '_route' => 'generated::oUUBWbFmua8rEvaT',
>>>>>>> sahil
=======
            '_route' => 'generated::wt4Z1UoPqGrNsgjR',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::qFEX2uxwYOilvQsw',
>>>>>>> sahil
=======
            '_route' => 'generated::CF4gGguBX5Ir5Ztr',
>>>>>>> sahil
=======
            '_route' => 'generated::C0MSW5a7wZXKpH24',
=======
            '_route' => 'generated::kXKbEW2SxOPfpwGq',
>>>>>>> sahil
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
      '/api/Add_photo_place' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VgnRsBpaYqBAcdyE',
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
      '/api/mobileads' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::D19eIAqkJ0OiWWrd',
>>>>>>> sahil
=======
            '_route' => 'generated::9JtK5mo6T3EfuxY3',
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
      '/api/remove_place_photo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dBIMaWM5kmXtXDrv',
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
      '/api/myReviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QKQeQp9PSci8dOvq',
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
      '/api/my_photos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4E9ayaZGmMqCu5Je',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::Tk2f9R2dpKxFSetE',
=======
            '_route' => 'generated::mN8r5ADTx9Kzxh2b',
>>>>>>> sahil
=======
            '_route' => 'generated::glqEpESFCwxhwSca',
>>>>>>> sahil
=======
            '_route' => 'generated::T8p5FzgHHL5ZttJQ',
>>>>>>> sahil
=======
            '_route' => 'generated::1AWMtBNQwS7hWXqR',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::99Elk8VKFkGmoOtI',
=======
            '_route' => 'generated::OEFrVh7ZBQ17E8uV',
>>>>>>> sahil
=======
            '_route' => 'generated::ZaLwLTcJgUM3oGRG',
>>>>>>> sahil
=======
            '_route' => 'generated::0xBFQpe20DqJ2xXE',
>>>>>>> sahil
=======
            '_route' => 'generated::XSmQXQWl2xNIeJ4y',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::l2E0Z87YJ9mwhxL1',
=======
            '_route' => 'generated::8Ktw2GqAraIhvN3l',
>>>>>>> sahil
=======
            '_route' => 'generated::K03JDj4974PdBvaj',
>>>>>>> sahil
=======
            '_route' => 'generated::fMoilcxbGoqRxyhm',
>>>>>>> sahil
=======
            '_route' => 'generated::OVnI94XfzqTPUNfW',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::eBhYVJOaihTtaBEd',
=======
            '_route' => 'generated::3xel3mfFE9NTHSKJ',
>>>>>>> sahil
=======
            '_route' => 'generated::MYePcmcdlK6yJDYS',
>>>>>>> sahil
=======
            '_route' => 'generated::EckXrLy2J2mVA4W3',
>>>>>>> sahil
=======
            '_route' => 'generated::NkzxuZ1WFzQXEKp6',
>>>>>>> sahil
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
      '/api/savedroutes/checkroute' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hBvEYBxqosDUi8DB',
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
      '/api/mypalces/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::Q4JUSEEotGOOylwU',
=======
            '_route' => 'generated::9tw4VBNBV4FWCLL1',
>>>>>>> sahil
=======
            '_route' => 'generated::pa1aHeT5rVV6E9z1',
>>>>>>> sahil
=======
            '_route' => 'generated::oqSLRNhV3ReTjBg9',
>>>>>>> sahil
=======
            '_route' => 'generated::VRdKbZrQk8Xpwbfj',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::YZNrY9SUi7GSVGcu',
=======
            '_route' => 'generated::Ql86jwTAAaBH5sZJ',
>>>>>>> sahil
=======
            '_route' => 'generated::KuJpsjhFg3NAAc97',
>>>>>>> sahil
=======
            '_route' => 'generated::ngtItORqJRSZgWa2',
>>>>>>> sahil
=======
            '_route' => 'generated::VM3SaHC9f0b2qYAe',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::LLQs5tc5BsXZ3lzG',
=======
            '_route' => 'generated::U56v9awU1H67EFV2',
>>>>>>> sahil
=======
            '_route' => 'generated::t50o4XcC1nHCBnPW',
>>>>>>> sahil
=======
            '_route' => 'generated::GN4V8rfOouAjvPFq',
>>>>>>> sahil
=======
            '_route' => 'generated::cjpx3P8oxrk0kBNS',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::2SfmD0J9GW82GI84',
=======
            '_route' => 'generated::tdXBBu0A8WRuUPhI',
>>>>>>> sahil
=======
            '_route' => 'generated::XN58QfjbLAkbhswU',
>>>>>>> sahil
=======
            '_route' => 'generated::mVNJq2V8LzWY2l2E',
>>>>>>> sahil
=======
            '_route' => 'generated::g7OqAEZObAY3gv44',
>>>>>>> sahil
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
            '_route' => 'generated::LqIr7PYkL8QL4zTJ',
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
            '_route' => 'generated::9Si8we4cVAC5XPwF',
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
            '_route' => 'generated::jsNjiMQsBzrPtO6L',
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
            '_route' => 'generated::BCPeLG6y73HR3uAE',
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
            '_route' => 'generated::4cNUTL0H67oMoZgp',
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
      '/api/addreview/addreviewphotos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TB32p4BEVO8udunt',
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
      '/api/addreview/delete_review_photos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J0YR1JkqEoJ6gAXY',
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
      '/api/addreview/Report_review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xYqIWmtEtASJYDQp',
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
      '/api/addreview/like_review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::whN9OPyqRAaOLBcz',
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
            '_route' => 'generated::lcmIxeyBR3feCYvT',
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
            '_route' => 'generated::QgUiylIpTdLkCnig',
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
            '_route' => 'generated::QLKvUQ4PbamOE6wY',
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
      '/api/search/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5OUZ7fu0fGqWWmnR',
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
      '/api/search/simplefileter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UvkNXerRYO8Hye65',
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
      '/api/search/Category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LjFJhB34ooSH4ztx',
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
      '/api/search/Subcategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dF30KMSpuAqlcc80',
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
      '/api/search/facilities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HFTccjBa9fYiA5OA',
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
      '/api/search/nearbysearch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GGRMMaKVrPlhnshq',
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
      '/api/search/simplesearch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SIcIvVZmZru9cm5l',
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
      '/api/search/Search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NzRJlQY5ZqKu1y0k',
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
      '/api/search/metrostations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SmfOloXzBOraZgAc',
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
      '/api/Places/Metro' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ON89A3O1ijJ2SQMs',
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
      '/api/Places/Tourism' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x6tYr5kvDNh21Fo7',
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
      '/api/Places/Parking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6HJ7Z6GECYqgkx8s',
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
      '/api/Places/Photos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4e4cv5Pk31r3soee',
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
      '/api/feedback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z2Fd7EW4o1ao9H9L',
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
      '/api/feedback/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PccdJprDav2Z6rdF',
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
      '/api/Claimorgnizatioon/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uIwUoHB41VBzVDK3',
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
      '/api/Claimorgnizatioon/PromotOrganisation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IKvFvxrZK9088aig',
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
      '/api/Pricingforplace' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1TB9kNgN98zLWVau',
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
      '/api/MyAddress' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fznPQfloHJa6veJQ',
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
      '/api/MyAddress/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qIPY4IE0wjddI2SG',
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
      '/api/MyAddress/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3B0CmOSZOQHptwxp',
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::XI3B79ubDmR24t7O',
=======
            '_route' => 'generated::Fu4jET46EukD8jsH',
>>>>>>> sahil
=======
            '_route' => 'generated::Jya9nMNt8fZNcve6',
>>>>>>> sahil
=======
            '_route' => 'generated::NtVIL8kQaOH2lIGT',
>>>>>>> sahil
=======
            '_route' => 'generated::gcx2f7A2Jn2YaRN5',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::1bwUIYRHPw26wjZk',
=======
            '_route' => 'generated::xENKas3n6X7mXydK',
>>>>>>> sahil
=======
            '_route' => 'generated::yxVfgBVxx7hGg4DJ',
>>>>>>> sahil
=======
            '_route' => 'generated::t6E0aRbbEJzxxeQe',
>>>>>>> sahil
=======
            '_route' => 'generated::qjM9NvoXr8dxdNHC',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::iYlVuQtBmbgeFcr4',
=======
            '_route' => 'generated::hEesriLejzvoyF2b',
>>>>>>> sahil
=======
            '_route' => 'generated::enYHdn0rfy3fefOn',
>>>>>>> sahil
=======
            '_route' => 'generated::iPUiuQeKhDv8lTV6',
>>>>>>> sahil
=======
            '_route' => 'generated::Bjfxd2JJXeuXvCJ8',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::SWfmxvDRvogeCsXt',
=======
            '_route' => 'generated::e5ue047vFkIRZA7X',
>>>>>>> sahil
=======
            '_route' => 'generated::kkWyQG6kxyEuCnA4',
>>>>>>> sahil
=======
            '_route' => 'generated::HZMXmSo2iQv0cBG1',
>>>>>>> sahil
=======
            '_route' => 'generated::sg9UhZG4CsZ485Tl',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::UBUOMmP9wvARwjwh',
=======
            '_route' => 'generated::Rm8AeFIF1VBPSAoU',
>>>>>>> sahil
=======
            '_route' => 'generated::I4I1to0TxbA8eIYX',
>>>>>>> sahil
=======
            '_route' => 'generated::HgiDx53o4n3We6s7',
>>>>>>> sahil
=======
            '_route' => 'generated::T5e8vufkcQkiTvzs',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::XN8uFWTIM1lXeLLM',
=======
            '_route' => 'generated::ovYCfcKKWXeX6Btq',
>>>>>>> sahil
=======
            '_route' => 'generated::At5mGzClSIhOwfq7',
>>>>>>> sahil
=======
            '_route' => 'generated::AHuMlU9L3aIlMJzl',
>>>>>>> sahil
=======
            '_route' => 'generated::w7DS2ERsuvjxMi1r',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::flpRL6Kp6O4ojmxh',
=======
            '_route' => 'generated::yrCin2jx9oIaNLAf',
>>>>>>> sahil
=======
            '_route' => 'generated::5fp5K7yiJhuhz2nZ',
>>>>>>> sahil
=======
            '_route' => 'generated::ZcdAxu8c8eVNSYpq',
>>>>>>> sahil
=======
            '_route' => 'generated::OKxQ2Df0Wbik5fYY',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::b48ObM9iV1p4SZYH',
=======
            '_route' => 'generated::n0TlcdqBcUEm78y3',
>>>>>>> sahil
=======
            '_route' => 'generated::wHv5PQpEW7qBFCpv',
>>>>>>> sahil
=======
            '_route' => 'generated::DAOSOCXC7BqB4cUH',
>>>>>>> sahil
=======
            '_route' => 'generated::vCYsFaJ96pDfcZTZ',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::G2ZKdskhgo9DKTOn',
=======
            '_route' => 'generated::bblpDIeIZRPT990l',
>>>>>>> sahil
=======
            '_route' => 'generated::F0RgclpZyD91hR1r',
>>>>>>> sahil
=======
            '_route' => 'generated::q21X7sWXv43BvzOx',
>>>>>>> sahil
=======
            '_route' => 'generated::IEeavLQ77Z3M4PC9',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::pgYHH9jSsjz8PDzK',
=======
            '_route' => 'generated::BWI4g6W7Sor1LhWn',
>>>>>>> sahil
=======
            '_route' => 'generated::gzkqu4pm9DRsaDBF',
>>>>>>> sahil
=======
            '_route' => 'generated::CtnRAeJqM68PW9QX',
>>>>>>> sahil
=======
            '_route' => 'generated::i8IeN8sdzsZUMXHv',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::qb387Gt8WQrzwO6j',
=======
            '_route' => 'generated::shXgU4riy1yPyGPu',
>>>>>>> sahil
=======
            '_route' => 'generated::vHSEkhVaukeTkeZn',
>>>>>>> sahil
=======
            '_route' => 'generated::GpQU3xkTMVmC7hDD',
>>>>>>> sahil
=======
            '_route' => 'generated::qga9jWtlKqKjMIOp',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::cH1uCDrEZ5OKkb8R',
=======
            '_route' => 'generated::GprKqSj5MmWOMFlC',
>>>>>>> sahil
=======
            '_route' => 'generated::jL48MpNQ6kYIBa4k',
>>>>>>> sahil
=======
            '_route' => 'generated::xvSxFbY7gVR8YVoe',
>>>>>>> sahil
=======
            '_route' => 'generated::cmFxh8GmwaktGaEW',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::q6Kw1oxb9UzKCD71',
=======
            '_route' => 'generated::24wWmzKyLQaKxcxC',
>>>>>>> sahil
=======
            '_route' => 'generated::2wbHZVUxzn3IL9g7',
>>>>>>> sahil
=======
            '_route' => 'generated::OoriutFB27twPRJR',
>>>>>>> sahil
=======
            '_route' => 'generated::7flTSvXwgYUmbREq',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::CsZEoAcWU4gRrjBy',
=======
            '_route' => 'generated::TrrlHa0GGUN5PjDD',
>>>>>>> sahil
=======
            '_route' => 'generated::rp9hiMZYVN7q4cAZ',
>>>>>>> sahil
=======
            '_route' => 'generated::a8NBteUsMnpUbr2Y',
>>>>>>> sahil
=======
            '_route' => 'generated::ZWuVrdjhyqTEEShi',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::GOZGIFO4677PiFGQ',
=======
            '_route' => 'generated::LGQpiXaPBxcoVJej',
>>>>>>> sahil
=======
            '_route' => 'generated::saZUFQ7ahad6MtPA',
>>>>>>> sahil
=======
            '_route' => 'generated::h5dgtGubpU76ZbkZ',
>>>>>>> sahil
=======
            '_route' => 'generated::ySelTNjsuiRpX00V',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::Fbm7i1EBkRVSO5Dv',
=======
            '_route' => 'generated::oj09ldmEcSc0V5R3',
>>>>>>> sahil
=======
            '_route' => 'generated::ID2oQP7rxgVRkXbq',
>>>>>>> sahil
=======
            '_route' => 'generated::0j1RCo8b0ln1DPuB',
>>>>>>> sahil
=======
            '_route' => 'generated::Ic1QzVdn4PwTPJWy',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::ECqvmqcScyVnoYna',
=======
            '_route' => 'generated::Zy5gf0ggM39NCuZG',
>>>>>>> sahil
=======
            '_route' => 'generated::qSspmTPlczijKlyY',
>>>>>>> sahil
=======
            '_route' => 'generated::QTVIlqiLgbNeXDEo',
>>>>>>> sahil
=======
            '_route' => 'generated::KMAISgw9FoDuR0Bw',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::LCKTyRHNIZ9X9EwY',
=======
            '_route' => 'generated::7UXUMAjQd6eYhRVN',
>>>>>>> sahil
=======
            '_route' => 'generated::Cc4jqLdVfeWH0NHJ',
>>>>>>> sahil
=======
            '_route' => 'generated::nb0kJNAKhHgC6mtW',
>>>>>>> sahil
=======
            '_route' => 'generated::SZm5DRfyUy7jEBrO',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::X1wzerxFRqTKGp5u',
=======
            '_route' => 'generated::JodMSVZy9k7W8Xz5',
>>>>>>> sahil
=======
            '_route' => 'generated::miNkkYETJeVWdu7b',
>>>>>>> sahil
=======
            '_route' => 'generated::YUsoe9UCbj14Xi3b',
>>>>>>> sahil
=======
            '_route' => 'generated::VeqlxxkE8PK0Zz3m',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::We1eY3nAZ4xA3SXI',
=======
            '_route' => 'generated::6wTHn9lp9O6NPYVc',
>>>>>>> sahil
=======
            '_route' => 'generated::OqTmkXFN1co7taZ1',
>>>>>>> sahil
=======
            '_route' => 'generated::l1u7xwLCZnaGalaO',
>>>>>>> sahil
=======
            '_route' => 'generated::LX6HDgZIICSR2knO',
>>>>>>> sahil
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
      '/resetpassword_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'resetpassword_user',
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
      '/forgotpasswordupdate_api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forgotpasswordupdate_api',
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '_route' => 'generated::Wm4nqPUn5DN6Bggk',
=======
            '_route' => 'generated::VGm2q08VanqCtivu',
>>>>>>> sahil
=======
            '_route' => 'generated::gLLKi3YS55MrMokj',
>>>>>>> sahil
=======
            '_route' => 'generated::ImMuH8GoY2S5IgqY',
>>>>>>> sahil
=======
            '_route' => 'generated::AbSfkyMczeNeGkRb',
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::eT6TSA0emrEgBguD' => 
=======
    'generated::QnzGZIlcLKzJcTzV' => 
>>>>>>> sahil
=======
    'generated::oODPM5NdNUToaOAx' => 
>>>>>>> sahil
=======
    'generated::hRgIyliYvhciXvgH' => 
>>>>>>> sahil
=======
    'generated::GPVrKsvp2RXUQvCL' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::eT6TSA0emrEgBguD',
=======
        'as' => 'generated::QnzGZIlcLKzJcTzV',
>>>>>>> sahil
=======
        'as' => 'generated::oODPM5NdNUToaOAx',
>>>>>>> sahil
=======
        'as' => 'generated::hRgIyliYvhciXvgH',
>>>>>>> sahil
=======
        'as' => 'generated::GPVrKsvp2RXUQvCL',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::vlwucq1tMMTmwnrK' => 
=======
    'generated::RzD8zTeA0aPu0g6S' => 
>>>>>>> sahil
=======
    'generated::0mLqVCsfQsdU2Yo1' => 
>>>>>>> sahil
=======
    'generated::KTnGaKd5wz0uW00l' => 
>>>>>>> sahil
=======
    'generated::lI0fOpvsWu5kaiXA' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::vlwucq1tMMTmwnrK',
=======
        'as' => 'generated::RzD8zTeA0aPu0g6S',
>>>>>>> sahil
=======
        'as' => 'generated::0mLqVCsfQsdU2Yo1',
>>>>>>> sahil
=======
        'as' => 'generated::KTnGaKd5wz0uW00l',
>>>>>>> sahil
=======
        'as' => 'generated::lI0fOpvsWu5kaiXA',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::M2v7nlA3et891EtY' => 
=======
    'generated::TDKFBg8PmTQVjizJ' => 
>>>>>>> sahil
=======
    'generated::4SU9SJjYlRio9OtL' => 
>>>>>>> sahil
=======
    'generated::MRGC88yLrkUh4UhB' => 
>>>>>>> sahil
=======
    'generated::r7UaHzAfyw2ec0iy' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::M2v7nlA3et891EtY',
=======
        'as' => 'generated::TDKFBg8PmTQVjizJ',
>>>>>>> sahil
=======
        'as' => 'generated::4SU9SJjYlRio9OtL',
>>>>>>> sahil
=======
        'as' => 'generated::MRGC88yLrkUh4UhB',
>>>>>>> sahil
=======
        'as' => 'generated::r7UaHzAfyw2ec0iy',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::FpbwxZkyAynNnD2W' => 
=======
    'generated::z1dR1R3qWpaSbQrD' => 
>>>>>>> sahil
=======
    'generated::qr5bCuQ6NFd9PBp6' => 
>>>>>>> sahil
=======
    'generated::Qyw0zZ1frkwGzzrD' => 
>>>>>>> sahil
=======
    'generated::3mUVJkV6n2fCPpti' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::FpbwxZkyAynNnD2W',
=======
        'as' => 'generated::z1dR1R3qWpaSbQrD',
>>>>>>> sahil
=======
        'as' => 'generated::qr5bCuQ6NFd9PBp6',
>>>>>>> sahil
=======
        'as' => 'generated::Qyw0zZ1frkwGzzrD',
>>>>>>> sahil
=======
        'as' => 'generated::3mUVJkV6n2fCPpti',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::625gPAQROnhF73We' => 
=======
    'generated::kNuoKjtg4e44j8Ue' => 
>>>>>>> sahil
=======
    'generated::m465RX71eO2LFzNL' => 
>>>>>>> sahil
=======
    'generated::3oF4SaEkXs40H6t8' => 
>>>>>>> sahil
=======
    'generated::fORF95WnrtBldRlP' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::625gPAQROnhF73We',
=======
        'as' => 'generated::kNuoKjtg4e44j8Ue',
>>>>>>> sahil
=======
        'as' => 'generated::m465RX71eO2LFzNL',
>>>>>>> sahil
=======
        'as' => 'generated::3oF4SaEkXs40H6t8',
>>>>>>> sahil
=======
        'as' => 'generated::fORF95WnrtBldRlP',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::ktz03pQgkjtAPJzb' => 
=======
    'generated::pgBdRKb1klWdGJeF' => 
>>>>>>> sahil
=======
    'generated::xamPWL66tT7iwd2K' => 
>>>>>>> sahil
=======
    'generated::tORX3dQN6DEuwcxE' => 
>>>>>>> sahil
=======
    'generated::LgCq7ogLCFG33tEN' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::ktz03pQgkjtAPJzb',
=======
        'as' => 'generated::pgBdRKb1klWdGJeF',
>>>>>>> sahil
=======
        'as' => 'generated::xamPWL66tT7iwd2K',
>>>>>>> sahil
=======
        'as' => 'generated::tORX3dQN6DEuwcxE',
>>>>>>> sahil
=======
        'as' => 'generated::LgCq7ogLCFG33tEN',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::pycLRbiR8jFsVr2S' => 
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
        'as' => 'generated::pycLRbiR8jFsVr2S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CunBvFAwR9auieSz' => 
=======
    'generated::Qp8eiLHY6nPSb1IC' => 
>>>>>>> sahil
=======
    'generated::oOczWSRwKCxfOs8J' => 
>>>>>>> sahil
=======
    'generated::Z4MkTxYe7oYoz0VU' => 
>>>>>>> sahil
=======
    'generated::Px9vEix32gHXwtPr' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::CunBvFAwR9auieSz',
=======
        'as' => 'generated::Qp8eiLHY6nPSb1IC',
>>>>>>> sahil
=======
        'as' => 'generated::oOczWSRwKCxfOs8J',
>>>>>>> sahil
=======
        'as' => 'generated::Z4MkTxYe7oYoz0VU',
>>>>>>> sahil
=======
        'as' => 'generated::Px9vEix32gHXwtPr',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::nAW1tvk8CQF5FmZZ' => 
=======
    'generated::4Y6ZFFAobgwlgwRN' => 
>>>>>>> sahil
=======
    'generated::7VgKMlxV6ojgYKyV' => 
>>>>>>> sahil
=======
    'generated::uxeDvAS9yUddGdNm' => 
=======
    'generated::1Sb8WkN9m6NxMmKR' => 
>>>>>>> sahil
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/delete_account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@delete_account',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@delete_account',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1Sb8WkN9m6NxMmKR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::bBM87urt7mxHm0jY' => 
>>>>>>> sahil
=======
    'generated::paCaM61cIFqEsTWf' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::nAW1tvk8CQF5FmZZ',
=======
        'as' => 'generated::4Y6ZFFAobgwlgwRN',
>>>>>>> sahil
=======
        'as' => 'generated::7VgKMlxV6ojgYKyV',
>>>>>>> sahil
=======
        'as' => 'generated::bBM87urt7mxHm0jY',
>>>>>>> sahil
=======
        'as' => 'generated::paCaM61cIFqEsTWf',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::jr5Y2uYQfEeoMD48' => 
=======
    'generated::u6ceM3coJW7ylXF3' => 
>>>>>>> sahil
=======
    'generated::nOSGfU6jVPkmWywr' => 
>>>>>>> sahil
=======
    'generated::CrA0mwUpCA7fR1qQ' => 
>>>>>>> sahil
=======
    'generated::ExwMl7M41N6eaLTZ' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::jr5Y2uYQfEeoMD48',
=======
        'as' => 'generated::u6ceM3coJW7ylXF3',
>>>>>>> sahil
=======
        'as' => 'generated::nOSGfU6jVPkmWywr',
>>>>>>> sahil
=======
        'as' => 'generated::CrA0mwUpCA7fR1qQ',
>>>>>>> sahil
=======
        'as' => 'generated::ExwMl7M41N6eaLTZ',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::ZI4n0viXKiZMR3Lz' => 
=======
    'generated::nWTTvLq62fLN3MiA' => 
>>>>>>> sahil
=======
    'generated::lgVs0RD4BpIuxmIf' => 
>>>>>>> sahil
=======
    'generated::xLDr88RxMDeNVXti' => 
>>>>>>> sahil
=======
    'generated::bQvJzhzzki3h26aE' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::ZI4n0viXKiZMR3Lz',
=======
        'as' => 'generated::nWTTvLq62fLN3MiA',
>>>>>>> sahil
=======
        'as' => 'generated::lgVs0RD4BpIuxmIf',
>>>>>>> sahil
=======
        'as' => 'generated::xLDr88RxMDeNVXti',
>>>>>>> sahil
=======
        'as' => 'generated::bQvJzhzzki3h26aE',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::Dyu5Rns7Z09zYHG9' => 
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
        'as' => 'generated::Dyu5Rns7Z09zYHG9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sa57L62tIKIZEUHd' => 
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
        'as' => 'generated::Sa57L62tIKIZEUHd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bC2SL5B8ITQP1dXT' => 
=======
    'generated::ZxiV8MZrqMQVrvXD' => 
>>>>>>> sahil
=======
    'generated::QqhkfTqVS3Otj2nz' => 
>>>>>>> sahil
=======
    'generated::HtWtVsPOcNz21sLc' => 
>>>>>>> sahil
=======
    'generated::31FkyAVS4cqCRZG3' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::bC2SL5B8ITQP1dXT',
=======
        'as' => 'generated::ZxiV8MZrqMQVrvXD',
>>>>>>> sahil
=======
        'as' => 'generated::QqhkfTqVS3Otj2nz',
>>>>>>> sahil
=======
        'as' => 'generated::HtWtVsPOcNz21sLc',
>>>>>>> sahil
=======
        'as' => 'generated::31FkyAVS4cqCRZG3',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::YeBG3xlYJjh2R7NN' => 
=======
    'generated::8JnxMRjNlWp1WVvX' => 
>>>>>>> sahil
=======
    'generated::QYDutWNK5l3Ha4Tm' => 
>>>>>>> sahil
=======
    'generated::fWpKe8Lli5NGESjC' => 
>>>>>>> sahil
=======
    'generated::yJrqJJp0T4FqxXug' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::YeBG3xlYJjh2R7NN',
=======
        'as' => 'generated::8JnxMRjNlWp1WVvX',
>>>>>>> sahil
=======
        'as' => 'generated::QYDutWNK5l3Ha4Tm',
>>>>>>> sahil
=======
        'as' => 'generated::fWpKe8Lli5NGESjC',
>>>>>>> sahil
=======
        'as' => 'generated::yJrqJJp0T4FqxXug',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::3Vfot1RN2KLSTaHA' => 
=======
    'generated::gi8eUK072trPbgm6' => 
=======
    'generated::UltflS4w7JIFGsy4' => 
>>>>>>> sahil
=======
    'generated::HCR1oY8Z9vQGrQCm' => 
>>>>>>> sahil
=======
    'generated::vSEBpdoR9BTYEBpI' => 
>>>>>>> sahil
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
        'as' => 'generated::vSEBpdoR9BTYEBpI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fqfrl8yAPAEjKzSg' => 
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
        'as' => 'generated::fqfrl8yAPAEjKzSg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ipj4e9CFuByQ2kou' => 
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
        'as' => 'generated::Ipj4e9CFuByQ2kou',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1X2VzQgRDoleRotc' => 
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
        'as' => 'generated::1X2VzQgRDoleRotc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5PVjwWvHpkL9DlYS' => 
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
        'as' => 'generated::5PVjwWvHpkL9DlYS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::YKI9lAMSkTy2zCqD' => 
>>>>>>> sahil
=======
    'generated::kEyJeh4td1hDtpyJ' => 
>>>>>>> sahil
=======
    'generated::Q3TkjhgukKXKq5Gs' => 
>>>>>>> sahil
=======
    'generated::qctIysbUuEpKhofi' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::3Vfot1RN2KLSTaHA',
=======
        'as' => 'generated::YKI9lAMSkTy2zCqD',
>>>>>>> sahil
=======
        'as' => 'generated::kEyJeh4td1hDtpyJ',
>>>>>>> sahil
=======
        'as' => 'generated::Q3TkjhgukKXKq5Gs',
>>>>>>> sahil
=======
        'as' => 'generated::qctIysbUuEpKhofi',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::UP5wJABQdZ2XNsJm' => 
=======
    'generated::0vd1CT65U6zgrEIf' => 
>>>>>>> sahil
=======
    'generated::AQKCRkzgaev10QVu' => 
>>>>>>> sahil
=======
    'generated::gNN9Rt3v2Z2t2wC3' => 
>>>>>>> sahil
=======
    'generated::vbggkRjQU5oc604c' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::UP5wJABQdZ2XNsJm',
=======
        'as' => 'generated::0vd1CT65U6zgrEIf',
>>>>>>> sahil
=======
        'as' => 'generated::AQKCRkzgaev10QVu',
>>>>>>> sahil
=======
        'as' => 'generated::gNN9Rt3v2Z2t2wC3',
>>>>>>> sahil
=======
        'as' => 'generated::vbggkRjQU5oc604c',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::gbvwmKT2hpvKbBKb' => 
=======
    'generated::0VONaStTjv135slm' => 
>>>>>>> sahil
=======
    'generated::P7fJZt2LVfkbNpTE' => 
>>>>>>> sahil
=======
    'generated::oUUBWbFmua8rEvaT' => 
>>>>>>> sahil
=======
    'generated::wt4Z1UoPqGrNsgjR' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::gbvwmKT2hpvKbBKb',
=======
        'as' => 'generated::0VONaStTjv135slm',
>>>>>>> sahil
=======
        'as' => 'generated::P7fJZt2LVfkbNpTE',
>>>>>>> sahil
=======
        'as' => 'generated::oUUBWbFmua8rEvaT',
>>>>>>> sahil
=======
        'as' => 'generated::wt4Z1UoPqGrNsgjR',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::Tk2f9R2dpKxFSetE' => 
=======
    'generated::qFEX2uxwYOilvQsw' => 
=======
    'generated::CF4gGguBX5Ir5Ztr' => 
>>>>>>> sahil
=======
    'generated::C0MSW5a7wZXKpH24' => 
>>>>>>> sahil
=======
    'generated::kXKbEW2SxOPfpwGq' => 
>>>>>>> sahil
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
        'as' => 'generated::kXKbEW2SxOPfpwGq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::mN8r5ADTx9Kzxh2b' => 
>>>>>>> sahil
=======
    'generated::glqEpESFCwxhwSca' => 
>>>>>>> sahil
=======
    'generated::2c56ioWPFOdMZZvI' => 
=======
    'generated::VgnRsBpaYqBAcdyE' => 
>>>>>>> sahil
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/Add_photo_place',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@Add_photo_place',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@Add_photo_place',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VgnRsBpaYqBAcdyE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9JtK5mo6T3EfuxY3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/mobileads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@mobileads',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@mobileads',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9JtK5mo6T3EfuxY3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::T8p5FzgHHL5ZttJQ' => 
>>>>>>> sahil
=======
    'generated::dBIMaWM5kmXtXDrv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/remove_place_photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@remove_place_photo',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@remove_place_photo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dBIMaWM5kmXtXDrv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QKQeQp9PSci8dOvq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/myReviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@myReviews',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@myReviews',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QKQeQp9PSci8dOvq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4E9ayaZGmMqCu5Je' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my_photos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@my_photos',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@my_photos',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4E9ayaZGmMqCu5Je',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1AWMtBNQwS7hWXqR' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::Tk2f9R2dpKxFSetE',
=======
        'as' => 'generated::mN8r5ADTx9Kzxh2b',
>>>>>>> sahil
=======
        'as' => 'generated::glqEpESFCwxhwSca',
>>>>>>> sahil
=======
        'as' => 'generated::T8p5FzgHHL5ZttJQ',
>>>>>>> sahil
=======
        'as' => 'generated::1AWMtBNQwS7hWXqR',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::99Elk8VKFkGmoOtI' => 
=======
    'generated::OEFrVh7ZBQ17E8uV' => 
>>>>>>> sahil
=======
    'generated::ZaLwLTcJgUM3oGRG' => 
>>>>>>> sahil
=======
    'generated::0xBFQpe20DqJ2xXE' => 
>>>>>>> sahil
=======
    'generated::XSmQXQWl2xNIeJ4y' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::99Elk8VKFkGmoOtI',
=======
        'as' => 'generated::OEFrVh7ZBQ17E8uV',
>>>>>>> sahil
=======
        'as' => 'generated::ZaLwLTcJgUM3oGRG',
>>>>>>> sahil
=======
        'as' => 'generated::0xBFQpe20DqJ2xXE',
>>>>>>> sahil
=======
        'as' => 'generated::XSmQXQWl2xNIeJ4y',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::l2E0Z87YJ9mwhxL1' => 
=======
    'generated::8Ktw2GqAraIhvN3l' => 
>>>>>>> sahil
=======
    'generated::K03JDj4974PdBvaj' => 
>>>>>>> sahil
=======
    'generated::fMoilcxbGoqRxyhm' => 
>>>>>>> sahil
=======
    'generated::OVnI94XfzqTPUNfW' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::l2E0Z87YJ9mwhxL1',
=======
        'as' => 'generated::8Ktw2GqAraIhvN3l',
>>>>>>> sahil
=======
        'as' => 'generated::K03JDj4974PdBvaj',
>>>>>>> sahil
=======
        'as' => 'generated::fMoilcxbGoqRxyhm',
>>>>>>> sahil
=======
        'as' => 'generated::OVnI94XfzqTPUNfW',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::eBhYVJOaihTtaBEd' => 
=======
    'generated::3xel3mfFE9NTHSKJ' => 
>>>>>>> sahil
=======
    'generated::MYePcmcdlK6yJDYS' => 
>>>>>>> sahil
=======
    'generated::EckXrLy2J2mVA4W3' => 
>>>>>>> sahil
=======
    'generated::NkzxuZ1WFzQXEKp6' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::eBhYVJOaihTtaBEd',
=======
        'as' => 'generated::3xel3mfFE9NTHSKJ',
>>>>>>> sahil
=======
        'as' => 'generated::MYePcmcdlK6yJDYS',
>>>>>>> sahil
=======
        'as' => 'generated::EckXrLy2J2mVA4W3',
>>>>>>> sahil
=======
        'as' => 'generated::NkzxuZ1WFzQXEKp6',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::Q4JUSEEotGOOylwU' => 
=======
    'generated::9tw4VBNBV4FWCLL1' => 
>>>>>>> sahil
=======
    'generated::pa1aHeT5rVV6E9z1' => 
>>>>>>> sahil
=======
    'generated::oqSLRNhV3ReTjBg9' => 
>>>>>>> sahil
=======
    'generated::hBvEYBxqosDUi8DB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/savedroutes/checkroute',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\savedroutes@checkroute',
        'controller' => 'App\\Http\\Controllers\\API\\savedroutes@checkroute',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hBvEYBxqosDUi8DB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VRdKbZrQk8Xpwbfj' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::Q4JUSEEotGOOylwU',
=======
        'as' => 'generated::9tw4VBNBV4FWCLL1',
>>>>>>> sahil
=======
        'as' => 'generated::pa1aHeT5rVV6E9z1',
>>>>>>> sahil
=======
        'as' => 'generated::oqSLRNhV3ReTjBg9',
>>>>>>> sahil
=======
        'as' => 'generated::VRdKbZrQk8Xpwbfj',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::YZNrY9SUi7GSVGcu' => 
=======
    'generated::Ql86jwTAAaBH5sZJ' => 
>>>>>>> sahil
=======
    'generated::KuJpsjhFg3NAAc97' => 
>>>>>>> sahil
=======
    'generated::ngtItORqJRSZgWa2' => 
>>>>>>> sahil
=======
    'generated::VM3SaHC9f0b2qYAe' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::YZNrY9SUi7GSVGcu',
=======
        'as' => 'generated::Ql86jwTAAaBH5sZJ',
>>>>>>> sahil
=======
        'as' => 'generated::KuJpsjhFg3NAAc97',
>>>>>>> sahil
=======
        'as' => 'generated::ngtItORqJRSZgWa2',
>>>>>>> sahil
=======
        'as' => 'generated::VM3SaHC9f0b2qYAe',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::LLQs5tc5BsXZ3lzG' => 
=======
    'generated::U56v9awU1H67EFV2' => 
>>>>>>> sahil
=======
    'generated::t50o4XcC1nHCBnPW' => 
>>>>>>> sahil
=======
    'generated::GN4V8rfOouAjvPFq' => 
>>>>>>> sahil
=======
    'generated::cjpx3P8oxrk0kBNS' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::LLQs5tc5BsXZ3lzG',
=======
        'as' => 'generated::U56v9awU1H67EFV2',
>>>>>>> sahil
=======
        'as' => 'generated::t50o4XcC1nHCBnPW',
>>>>>>> sahil
=======
        'as' => 'generated::GN4V8rfOouAjvPFq',
>>>>>>> sahil
=======
        'as' => 'generated::cjpx3P8oxrk0kBNS',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::2SfmD0J9GW82GI84' => 
=======
    'generated::tdXBBu0A8WRuUPhI' => 
>>>>>>> sahil
=======
    'generated::XN58QfjbLAkbhswU' => 
>>>>>>> sahil
=======
    'generated::mVNJq2V8LzWY2l2E' => 
>>>>>>> sahil
=======
    'generated::g7OqAEZObAY3gv44' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::2SfmD0J9GW82GI84',
=======
        'as' => 'generated::tdXBBu0A8WRuUPhI',
=======
        'as' => 'generated::XN58QfjbLAkbhswU',
>>>>>>> sahil
=======
        'as' => 'generated::mVNJq2V8LzWY2l2E',
>>>>>>> sahil
=======
        'as' => 'generated::g7OqAEZObAY3gv44',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LqIr7PYkL8QL4zTJ' => 
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
        'uses' => 'App\\Http\\Controllers\\API\\Addreview@index',
        'controller' => 'App\\Http\\Controllers\\API\\Addreview@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LqIr7PYkL8QL4zTJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Si8we4cVAC5XPwF' => 
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
        'as' => 'generated::9Si8we4cVAC5XPwF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jsNjiMQsBzrPtO6L' => 
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
        'as' => 'generated::jsNjiMQsBzrPtO6L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BCPeLG6y73HR3uAE' => 
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
        'as' => 'generated::BCPeLG6y73HR3uAE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4cNUTL0H67oMoZgp' => 
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
        'as' => 'generated::4cNUTL0H67oMoZgp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TB32p4BEVO8udunt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addreview/addreviewphotos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Addreview@addreviewphotos',
        'controller' => 'App\\Http\\Controllers\\API\\Addreview@addreviewphotos',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TB32p4BEVO8udunt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J0YR1JkqEoJ6gAXY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addreview/delete_review_photos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Addreview@delete_review_photos',
        'controller' => 'App\\Http\\Controllers\\API\\Addreview@delete_review_photos',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::J0YR1JkqEoJ6gAXY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xYqIWmtEtASJYDQp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addreview/Report_review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Addreview@Report_review',
        'controller' => 'App\\Http\\Controllers\\API\\Addreview@Report_review',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xYqIWmtEtASJYDQp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::whN9OPyqRAaOLBcz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addreview/like_review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Addreview@like_review',
        'controller' => 'App\\Http\\Controllers\\API\\Addreview@like_review',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::whN9OPyqRAaOLBcz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lcmIxeyBR3feCYvT' => 
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
        'as' => 'generated::lcmIxeyBR3feCYvT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QgUiylIpTdLkCnig' => 
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
        'as' => 'generated::QgUiylIpTdLkCnig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QLKvUQ4PbamOE6wY' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::cB1lJ6TPab0syaML',
>>>>>>> sahil
=======
        'as' => 'generated::vfYSwEIS4ash3DnP',
>>>>>>> sahil
=======
        'as' => 'generated::VRNav6zwHcPzISCR',
=======
        'as' => 'generated::QLKvUQ4PbamOE6wY',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5OUZ7fu0fGqWWmnR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/search/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SearchApi@index',
        'controller' => 'App\\Http\\Controllers\\API\\SearchApi@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5OUZ7fu0fGqWWmnR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UvkNXerRYO8Hye65' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/search/simplefileter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SearchApi@simplefileter',
        'controller' => 'App\\Http\\Controllers\\API\\SearchApi@simplefileter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UvkNXerRYO8Hye65',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LjFJhB34ooSH4ztx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search/Category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SearchApi@Category',
        'controller' => 'App\\Http\\Controllers\\API\\SearchApi@Category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LjFJhB34ooSH4ztx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dF30KMSpuAqlcc80' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/search/Subcategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SearchApi@Subcategories',
        'controller' => 'App\\Http\\Controllers\\API\\SearchApi@Subcategories',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dF30KMSpuAqlcc80',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HFTccjBa9fYiA5OA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/search/facilities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SearchApi@facilities',
        'controller' => 'App\\Http\\Controllers\\API\\SearchApi@facilities',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HFTccjBa9fYiA5OA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GGRMMaKVrPlhnshq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/search/nearbysearch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SearchApi@nearbysearch',
        'controller' => 'App\\Http\\Controllers\\API\\SearchApi@nearbysearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GGRMMaKVrPlhnshq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SIcIvVZmZru9cm5l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/search/simplesearch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SearchApi@simplesearch',
        'controller' => 'App\\Http\\Controllers\\API\\SearchApi@simplesearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SIcIvVZmZru9cm5l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NzRJlQY5ZqKu1y0k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search/Search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SearchApi@Search',
        'controller' => 'App\\Http\\Controllers\\API\\SearchApi@Search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NzRJlQY5ZqKu1y0k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SmfOloXzBOraZgAc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search/metrostations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SearchApi@metrostations',
        'controller' => 'App\\Http\\Controllers\\API\\SearchApi@metrostations',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SmfOloXzBOraZgAc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ON89A3O1ijJ2SQMs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/Places/Metro',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Places@Metro',
        'controller' => 'App\\Http\\Controllers\\API\\Places@Metro',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ON89A3O1ijJ2SQMs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x6tYr5kvDNh21Fo7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/Places/Tourism',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Places@Tourism',
        'controller' => 'App\\Http\\Controllers\\API\\Places@Tourism',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::x6tYr5kvDNh21Fo7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6HJ7Z6GECYqgkx8s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/Places/Parking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Places@Parking',
        'controller' => 'App\\Http\\Controllers\\API\\Places@Parking',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6HJ7Z6GECYqgkx8s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4e4cv5Pk31r3soee' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/Places/Photos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Places@Photos',
        'controller' => 'App\\Http\\Controllers\\API\\Places@Photos',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4e4cv5Pk31r3soee',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z2Fd7EW4o1ao9H9L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/feedback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Addfeedback@index',
        'controller' => 'App\\Http\\Controllers\\API\\Addfeedback@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Z2Fd7EW4o1ao9H9L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PccdJprDav2Z6rdF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/feedback/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Addfeedback@store',
        'controller' => 'App\\Http\\Controllers\\API\\Addfeedback@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::2tTcrYflX2o1JP6G',
>>>>>>> sahil
=======
        'as' => 'generated::PccdJprDav2Z6rdF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uIwUoHB41VBzVDK3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/Claimorgnizatioon/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Claimorgnizatioon@store',
        'controller' => 'App\\Http\\Controllers\\API\\Claimorgnizatioon@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uIwUoHB41VBzVDK3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IKvFvxrZK9088aig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/Claimorgnizatioon/PromotOrganisation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Claimorgnizatioon@PromotOrganisation',
        'controller' => 'App\\Http\\Controllers\\API\\Claimorgnizatioon@PromotOrganisation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IKvFvxrZK9088aig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1TB9kNgN98zLWVau' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/Pricingforplace',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@Pricingforplace',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@Pricingforplace',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1TB9kNgN98zLWVau',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fznPQfloHJa6veJQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/MyAddress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MyAddress@show',
        'controller' => 'App\\Http\\Controllers\\API\\MyAddress@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fznPQfloHJa6veJQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qIPY4IE0wjddI2SG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/MyAddress/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MyAddress@store',
        'controller' => 'App\\Http\\Controllers\\API\\MyAddress@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qIPY4IE0wjddI2SG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3B0CmOSZOQHptwxp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/MyAddress/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MyAddress@delete',
        'controller' => 'App\\Http\\Controllers\\API\\MyAddress@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3B0CmOSZOQHptwxp',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::XI3B79ubDmR24t7O' => 
=======
    'generated::Fu4jET46EukD8jsH' => 
>>>>>>> sahil
=======
    'generated::Jya9nMNt8fZNcve6' => 
>>>>>>> sahil
=======
    'generated::NtVIL8kQaOH2lIGT' => 
>>>>>>> sahil
=======
    'generated::gcx2f7A2Jn2YaRN5' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::XI3B79ubDmR24t7O',
=======
        'as' => 'generated::Fu4jET46EukD8jsH',
>>>>>>> sahil
=======
        'as' => 'generated::Jya9nMNt8fZNcve6',
>>>>>>> sahil
=======
        'as' => 'generated::NtVIL8kQaOH2lIGT',
>>>>>>> sahil
=======
        'as' => 'generated::gcx2f7A2Jn2YaRN5',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::1bwUIYRHPw26wjZk' => 
=======
    'generated::xENKas3n6X7mXydK' => 
>>>>>>> sahil
=======
    'generated::yxVfgBVxx7hGg4DJ' => 
>>>>>>> sahil
=======
    'generated::t6E0aRbbEJzxxeQe' => 
>>>>>>> sahil
=======
    'generated::qjM9NvoXr8dxdNHC' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::1bwUIYRHPw26wjZk',
=======
        'as' => 'generated::xENKas3n6X7mXydK',
>>>>>>> sahil
=======
        'as' => 'generated::yxVfgBVxx7hGg4DJ',
>>>>>>> sahil
=======
        'as' => 'generated::t6E0aRbbEJzxxeQe',
>>>>>>> sahil
=======
        'as' => 'generated::qjM9NvoXr8dxdNHC',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::iYlVuQtBmbgeFcr4' => 
=======
    'generated::hEesriLejzvoyF2b' => 
>>>>>>> sahil
=======
    'generated::enYHdn0rfy3fefOn' => 
>>>>>>> sahil
=======
    'generated::iPUiuQeKhDv8lTV6' => 
>>>>>>> sahil
=======
    'generated::Bjfxd2JJXeuXvCJ8' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::iYlVuQtBmbgeFcr4',
=======
        'as' => 'generated::hEesriLejzvoyF2b',
>>>>>>> sahil
=======
        'as' => 'generated::enYHdn0rfy3fefOn',
>>>>>>> sahil
=======
        'as' => 'generated::iPUiuQeKhDv8lTV6',
>>>>>>> sahil
=======
        'as' => 'generated::Bjfxd2JJXeuXvCJ8',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::SWfmxvDRvogeCsXt' => 
=======
    'generated::e5ue047vFkIRZA7X' => 
>>>>>>> sahil
=======
    'generated::kkWyQG6kxyEuCnA4' => 
>>>>>>> sahil
=======
    'generated::HZMXmSo2iQv0cBG1' => 
>>>>>>> sahil
=======
    'generated::sg9UhZG4CsZ485Tl' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::SWfmxvDRvogeCsXt',
=======
        'as' => 'generated::e5ue047vFkIRZA7X',
>>>>>>> sahil
=======
        'as' => 'generated::kkWyQG6kxyEuCnA4',
>>>>>>> sahil
=======
        'as' => 'generated::HZMXmSo2iQv0cBG1',
>>>>>>> sahil
=======
        'as' => 'generated::sg9UhZG4CsZ485Tl',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::UBUOMmP9wvARwjwh' => 
=======
    'generated::Rm8AeFIF1VBPSAoU' => 
>>>>>>> sahil
=======
    'generated::I4I1to0TxbA8eIYX' => 
>>>>>>> sahil
=======
    'generated::HgiDx53o4n3We6s7' => 
>>>>>>> sahil
=======
    'generated::T5e8vufkcQkiTvzs' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::UBUOMmP9wvARwjwh',
=======
        'as' => 'generated::Rm8AeFIF1VBPSAoU',
>>>>>>> sahil
=======
        'as' => 'generated::I4I1to0TxbA8eIYX',
>>>>>>> sahil
=======
        'as' => 'generated::HgiDx53o4n3We6s7',
>>>>>>> sahil
=======
        'as' => 'generated::T5e8vufkcQkiTvzs',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::XN8uFWTIM1lXeLLM' => 
=======
    'generated::ovYCfcKKWXeX6Btq' => 
>>>>>>> sahil
=======
    'generated::At5mGzClSIhOwfq7' => 
>>>>>>> sahil
=======
    'generated::AHuMlU9L3aIlMJzl' => 
>>>>>>> sahil
=======
    'generated::w7DS2ERsuvjxMi1r' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::XN8uFWTIM1lXeLLM',
=======
        'as' => 'generated::ovYCfcKKWXeX6Btq',
>>>>>>> sahil
=======
        'as' => 'generated::At5mGzClSIhOwfq7',
>>>>>>> sahil
=======
        'as' => 'generated::AHuMlU9L3aIlMJzl',
>>>>>>> sahil
=======
        'as' => 'generated::w7DS2ERsuvjxMi1r',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::flpRL6Kp6O4ojmxh' => 
=======
    'generated::yrCin2jx9oIaNLAf' => 
>>>>>>> sahil
=======
    'generated::5fp5K7yiJhuhz2nZ' => 
>>>>>>> sahil
=======
    'generated::ZcdAxu8c8eVNSYpq' => 
>>>>>>> sahil
=======
    'generated::OKxQ2Df0Wbik5fYY' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::flpRL6Kp6O4ojmxh',
=======
        'as' => 'generated::yrCin2jx9oIaNLAf',
>>>>>>> sahil
=======
        'as' => 'generated::5fp5K7yiJhuhz2nZ',
>>>>>>> sahil
=======
        'as' => 'generated::ZcdAxu8c8eVNSYpq',
>>>>>>> sahil
=======
        'as' => 'generated::OKxQ2Df0Wbik5fYY',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::b48ObM9iV1p4SZYH' => 
=======
    'generated::n0TlcdqBcUEm78y3' => 
>>>>>>> sahil
=======
    'generated::wHv5PQpEW7qBFCpv' => 
>>>>>>> sahil
=======
    'generated::DAOSOCXC7BqB4cUH' => 
>>>>>>> sahil
=======
    'generated::vCYsFaJ96pDfcZTZ' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::b48ObM9iV1p4SZYH',
=======
        'as' => 'generated::n0TlcdqBcUEm78y3',
>>>>>>> sahil
=======
        'as' => 'generated::wHv5PQpEW7qBFCpv',
>>>>>>> sahil
=======
        'as' => 'generated::DAOSOCXC7BqB4cUH',
>>>>>>> sahil
=======
        'as' => 'generated::vCYsFaJ96pDfcZTZ',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::G2ZKdskhgo9DKTOn' => 
=======
    'generated::bblpDIeIZRPT990l' => 
>>>>>>> sahil
=======
    'generated::F0RgclpZyD91hR1r' => 
>>>>>>> sahil
=======
    'generated::q21X7sWXv43BvzOx' => 
>>>>>>> sahil
=======
    'generated::IEeavLQ77Z3M4PC9' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::G2ZKdskhgo9DKTOn',
=======
        'as' => 'generated::bblpDIeIZRPT990l',
>>>>>>> sahil
=======
        'as' => 'generated::F0RgclpZyD91hR1r',
>>>>>>> sahil
=======
        'as' => 'generated::q21X7sWXv43BvzOx',
>>>>>>> sahil
=======
        'as' => 'generated::IEeavLQ77Z3M4PC9',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::pgYHH9jSsjz8PDzK' => 
=======
    'generated::BWI4g6W7Sor1LhWn' => 
>>>>>>> sahil
=======
    'generated::gzkqu4pm9DRsaDBF' => 
>>>>>>> sahil
=======
    'generated::CtnRAeJqM68PW9QX' => 
>>>>>>> sahil
=======
    'generated::i8IeN8sdzsZUMXHv' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::pgYHH9jSsjz8PDzK',
=======
        'as' => 'generated::BWI4g6W7Sor1LhWn',
>>>>>>> sahil
=======
        'as' => 'generated::gzkqu4pm9DRsaDBF',
>>>>>>> sahil
=======
        'as' => 'generated::CtnRAeJqM68PW9QX',
>>>>>>> sahil
=======
        'as' => 'generated::i8IeN8sdzsZUMXHv',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::qb387Gt8WQrzwO6j' => 
=======
    'generated::shXgU4riy1yPyGPu' => 
>>>>>>> sahil
=======
    'generated::vHSEkhVaukeTkeZn' => 
>>>>>>> sahil
=======
    'generated::GpQU3xkTMVmC7hDD' => 
>>>>>>> sahil
=======
    'generated::qga9jWtlKqKjMIOp' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::qb387Gt8WQrzwO6j',
=======
        'as' => 'generated::shXgU4riy1yPyGPu',
>>>>>>> sahil
=======
        'as' => 'generated::vHSEkhVaukeTkeZn',
>>>>>>> sahil
=======
        'as' => 'generated::GpQU3xkTMVmC7hDD',
>>>>>>> sahil
=======
        'as' => 'generated::qga9jWtlKqKjMIOp',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::cH1uCDrEZ5OKkb8R' => 
=======
    'generated::GprKqSj5MmWOMFlC' => 
>>>>>>> sahil
=======
    'generated::jL48MpNQ6kYIBa4k' => 
>>>>>>> sahil
=======
    'generated::xvSxFbY7gVR8YVoe' => 
>>>>>>> sahil
=======
    'generated::cmFxh8GmwaktGaEW' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::cH1uCDrEZ5OKkb8R',
=======
        'as' => 'generated::GprKqSj5MmWOMFlC',
>>>>>>> sahil
=======
        'as' => 'generated::jL48MpNQ6kYIBa4k',
>>>>>>> sahil
=======
        'as' => 'generated::xvSxFbY7gVR8YVoe',
>>>>>>> sahil
=======
        'as' => 'generated::cmFxh8GmwaktGaEW',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::q6Kw1oxb9UzKCD71' => 
=======
    'generated::24wWmzKyLQaKxcxC' => 
>>>>>>> sahil
=======
    'generated::2wbHZVUxzn3IL9g7' => 
>>>>>>> sahil
=======
    'generated::OoriutFB27twPRJR' => 
>>>>>>> sahil
=======
    'generated::7flTSvXwgYUmbREq' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::q6Kw1oxb9UzKCD71',
=======
        'as' => 'generated::24wWmzKyLQaKxcxC',
>>>>>>> sahil
=======
        'as' => 'generated::2wbHZVUxzn3IL9g7',
>>>>>>> sahil
=======
        'as' => 'generated::OoriutFB27twPRJR',
>>>>>>> sahil
=======
        'as' => 'generated::7flTSvXwgYUmbREq',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::CsZEoAcWU4gRrjBy' => 
=======
    'generated::TrrlHa0GGUN5PjDD' => 
>>>>>>> sahil
=======
    'generated::rp9hiMZYVN7q4cAZ' => 
>>>>>>> sahil
=======
    'generated::a8NBteUsMnpUbr2Y' => 
>>>>>>> sahil
=======
    'generated::ZWuVrdjhyqTEEShi' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::CsZEoAcWU4gRrjBy',
=======
        'as' => 'generated::TrrlHa0GGUN5PjDD',
>>>>>>> sahil
=======
        'as' => 'generated::rp9hiMZYVN7q4cAZ',
>>>>>>> sahil
=======
        'as' => 'generated::a8NBteUsMnpUbr2Y',
>>>>>>> sahil
=======
        'as' => 'generated::ZWuVrdjhyqTEEShi',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::GOZGIFO4677PiFGQ' => 
=======
    'generated::LGQpiXaPBxcoVJej' => 
>>>>>>> sahil
=======
    'generated::saZUFQ7ahad6MtPA' => 
>>>>>>> sahil
=======
    'generated::h5dgtGubpU76ZbkZ' => 
>>>>>>> sahil
=======
    'generated::ySelTNjsuiRpX00V' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::GOZGIFO4677PiFGQ',
=======
        'as' => 'generated::LGQpiXaPBxcoVJej',
>>>>>>> sahil
=======
        'as' => 'generated::saZUFQ7ahad6MtPA',
>>>>>>> sahil
=======
        'as' => 'generated::h5dgtGubpU76ZbkZ',
>>>>>>> sahil
=======
        'as' => 'generated::ySelTNjsuiRpX00V',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::Fbm7i1EBkRVSO5Dv' => 
=======
    'generated::oj09ldmEcSc0V5R3' => 
>>>>>>> sahil
=======
    'generated::ID2oQP7rxgVRkXbq' => 
>>>>>>> sahil
=======
    'generated::0j1RCo8b0ln1DPuB' => 
>>>>>>> sahil
=======
    'generated::Ic1QzVdn4PwTPJWy' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::Fbm7i1EBkRVSO5Dv',
=======
        'as' => 'generated::oj09ldmEcSc0V5R3',
>>>>>>> sahil
=======
        'as' => 'generated::ID2oQP7rxgVRkXbq',
>>>>>>> sahil
=======
        'as' => 'generated::0j1RCo8b0ln1DPuB',
>>>>>>> sahil
=======
        'as' => 'generated::Ic1QzVdn4PwTPJWy',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::ECqvmqcScyVnoYna' => 
=======
    'generated::Zy5gf0ggM39NCuZG' => 
>>>>>>> sahil
=======
    'generated::qSspmTPlczijKlyY' => 
>>>>>>> sahil
=======
    'generated::QTVIlqiLgbNeXDEo' => 
>>>>>>> sahil
=======
    'generated::KMAISgw9FoDuR0Bw' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::ECqvmqcScyVnoYna',
=======
        'as' => 'generated::Zy5gf0ggM39NCuZG',
>>>>>>> sahil
=======
        'as' => 'generated::qSspmTPlczijKlyY',
>>>>>>> sahil
=======
        'as' => 'generated::QTVIlqiLgbNeXDEo',
>>>>>>> sahil
=======
        'as' => 'generated::KMAISgw9FoDuR0Bw',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::LCKTyRHNIZ9X9EwY' => 
=======
    'generated::7UXUMAjQd6eYhRVN' => 
>>>>>>> sahil
=======
    'generated::Cc4jqLdVfeWH0NHJ' => 
>>>>>>> sahil
=======
    'generated::nb0kJNAKhHgC6mtW' => 
>>>>>>> sahil
=======
    'generated::SZm5DRfyUy7jEBrO' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::LCKTyRHNIZ9X9EwY',
=======
        'as' => 'generated::7UXUMAjQd6eYhRVN',
>>>>>>> sahil
=======
        'as' => 'generated::Cc4jqLdVfeWH0NHJ',
>>>>>>> sahil
=======
        'as' => 'generated::nb0kJNAKhHgC6mtW',
>>>>>>> sahil
=======
        'as' => 'generated::SZm5DRfyUy7jEBrO',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::X1wzerxFRqTKGp5u' => 
=======
    'generated::JodMSVZy9k7W8Xz5' => 
>>>>>>> sahil
=======
    'generated::miNkkYETJeVWdu7b' => 
>>>>>>> sahil
=======
    'generated::YUsoe9UCbj14Xi3b' => 
>>>>>>> sahil
=======
    'generated::VeqlxxkE8PK0Zz3m' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::X1wzerxFRqTKGp5u',
=======
        'as' => 'generated::JodMSVZy9k7W8Xz5',
>>>>>>> sahil
=======
        'as' => 'generated::miNkkYETJeVWdu7b',
>>>>>>> sahil
=======
        'as' => 'generated::YUsoe9UCbj14Xi3b',
>>>>>>> sahil
=======
        'as' => 'generated::VeqlxxkE8PK0Zz3m',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::We1eY3nAZ4xA3SXI' => 
=======
    'generated::6wTHn9lp9O6NPYVc' => 
>>>>>>> sahil
=======
    'generated::OqTmkXFN1co7taZ1' => 
>>>>>>> sahil
=======
    'generated::l1u7xwLCZnaGalaO' => 
>>>>>>> sahil
=======
    'generated::LX6HDgZIICSR2knO' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::We1eY3nAZ4xA3SXI',
=======
        'as' => 'generated::6wTHn9lp9O6NPYVc',
>>>>>>> sahil
=======
        'as' => 'generated::OqTmkXFN1co7taZ1',
>>>>>>> sahil
=======
        'as' => 'generated::l1u7xwLCZnaGalaO',
>>>>>>> sahil
=======
        'as' => 'generated::LX6HDgZIICSR2knO',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'resetpassword_user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'resetpassword_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@resetpassword',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@resetpassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'resetpassword_user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forgotpasswordupdate_api' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgotpasswordupdate_api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@forgotpasswordupdate_api',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@forgotpasswordupdate_api',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'forgotpasswordupdate_api',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'generated::Wm4nqPUn5DN6Bggk' => 
=======
    'generated::VGm2q08VanqCtivu' => 
>>>>>>> sahil
=======
    'generated::gLLKi3YS55MrMokj' => 
>>>>>>> sahil
=======
    'generated::ImMuH8GoY2S5IgqY' => 
>>>>>>> sahil
=======
    'generated::AbSfkyMczeNeGkRb' => 
>>>>>>> sahil
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'as' => 'generated::Wm4nqPUn5DN6Bggk',
=======
        'as' => 'generated::VGm2q08VanqCtivu',
>>>>>>> sahil
=======
        'as' => 'generated::gLLKi3YS55MrMokj',
>>>>>>> sahil
=======
        'as' => 'generated::ImMuH8GoY2S5IgqY',
>>>>>>> sahil
=======
        'as' => 'generated::AbSfkyMczeNeGkRb',
>>>>>>> sahil
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
