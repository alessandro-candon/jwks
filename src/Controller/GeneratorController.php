<?php

namespace App\Controller;

use Firebase\JWT\JWK;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GeneratorController extends AbstractController
{

    #[Route('/generate', name: 'app_generator')]
    public function index(): JsonResponse
    {
        $privateKey = <<<EOD
            -----BEGIN RSA PRIVATE KEY-----
            MIIJKQIBAAKCAgEAr1b7zqGR++QwwKToqQIZgE2bq/U4hZmSOpPpx4jSwSm/hUpO
            QrQsz4vWC0AvSD7bchukteBaEvo8qOcblYTRrJmdjnRuSHQz05I3/L+QvvaIolKw
            qhbX0N0tshz1Pd1J07fiMNRpZZJsEoF7TpMA7A5CC5je/KO7FJKuQKpn/Ya7347l
            BlN5MonVkBDuo16byoLS1DG/J9yVDm3HehsQxGii58iMFALwBE7z15igD+BU6zG5
            q3Y0dQ5mh9Xg4lfA5gL9//VHxiG35syTkg9gg3RiZrM1XJVntjEoaSIgjn0cNZg8
            viyC3eEXO8w0xSwxBXaK24DYZer3STZnho0NG6Gd5q9sFE1skc7mBaQy3wfktpff
            V/l2hFBOgQALpM/DWHspjjk+v6KFkNxvjh8YRAyqff0itCG4Gi/bf984rmgzrWj/
            1OrWaDJcajjJhV2ZS+YbfgD1gKzYMYhYMi2Xy2R+QpbQlhXaBsBaYPxJ9AiuS3zR
            6y3JsFptjLDi40io4YOd/9rYv7RCnviuk0hUxYxEDE9JjW1e7sNjf2aaTPQ3ncPE
            VXXPvJ7hgRGQHk6OSH4CSzoolmR+D5bvOnGydUVtF21mVASAlcNYCqiz9PgV/j3j
            hlEnYnHYw745iKk50NNhFdb7NQzQtmcV/A8uPTEIlY+ixgDF1+q7Vap5YhUCAwEA
            AQKCAgALp3htL4gIeg5Tf6KHOUCAqqfiMhZjquVxR0uOm6WGeUPllB7HiDpCQUUk
            0ktSPftQBk5YWGUkRcWqZFINChr1ofA6+7oozrBzK5DVF9aDGtfSEjTz2TjXBRx4
            bjxOtFqn290I6dVnjufoAvszKcox5nC1XJ/VovxYTbePTMREsaPjJBhM51dy6H5t
            aPKzoSIxv6hLulK+T4cIwnszvoDKzTmmtkm5OsjBQI4sklRxObPrPg7dOqoZ7a8a
            8DhWUwbbQu+nB6KRpMQYbxiP6L29fwrbUKYHVVbjYTkSY9ZOIjqxxUCkU0kPflqQ
            +u22/Uz01AA+vr2jaI6vKxKOeumYBGK7I7HuPxYP/cY6WQ016/viuXrEaw4eMN6D
            Bheyk0uQAlSeim0zHSawHaXO03hiJRzCvARsGztR5G6I7waeeYY6CMjgbpEmIWBy
            Nr4prp8JikPEnk7zOwRqB55EK+9A4V470KJbGXQ+Gl3aGAniFmffs/H29pFfvj31
            Fc2Nof6+g+rxECBErz+MeeIgnSoY8iayQuzZoy3Su/TFbEx33Qxd3fS3ug/ocQvY
            TVaF313zhO3RvbOQp7KCzXF7m3jGK25AcbNVI8ITV5lyczxwoWVS3sR4VUTHKYb/
            9J/UxsO+N6TmnVRDbYCB2NhNlQxSh29IqYIiPRgnIRcmJs1zsQKCAQEA3BQjabdG
            M+0GPXIossM8T+UPwSo800iBdwx82L9O+1heYfLxwfSVGJizuqCA5hURag43x5cK
            N0LxqrOhyC062JPmU4BMXcRZYGwYkA/1ywzdI/7xVg3bu5CWa7hNkYo7mT4qHxwz
            huCVs1UBdRKkMsHq06Jeiqsir04cyepoQzfty5GjugWr5o1EL5eDykgVXqjQ4ucn
            hBjcwczToYYMWrJZIgL78Iz882uNwIXPRQhSDWK/R/DexILlh16hM+yX3FQIzmj0
            c3P1o1aa2C7ovGTpdhU/2COoDijG3PT2vXm1O8UB13Kx0Aj2c3yjFCTiG5fmHr8f
            DRJvkWT86n17uwKCAQEAy/V02UW78Fdmq6ah+xmoSliWTZG7mbBn/eOFaTH3n2ZQ
            91M9UMCOEt6vRamlemkgcj+pmfkz7U/zLAk6Jh2zBg/vk1Q1IYwFvRm3ftvbdOLu
            kG7kdvpcMBEBmpvoti4wjQG6+RrlCblKlG24gvxq2kZJ3nNQ5WQ8WqBMp5Re1qN2
            vG3cEMLPMG1v275KEYTslB8WL40mNA9rd2RIgQfInunx+6NlWJ4MA5kiBw9Ksdl7
            FvrVyfFKW2MoLtA+NcIB1eoMghaYRhsEo9aIOPWoc8KyRwWSTP1bDByBuJykVupd
            NwtfU8HTw/Q3wwvsS45vUJLEFM83GaSVpV5iRgB0bwKCAQEAuoEqfaV+jfS5TAtZ
            qBzCGOcC0e0sfNU+OhhQGRMPKPv7iEBtVrQiQiTucyMf+VwzVNBVvwQl+Sz3RnVS
            jiSecPntwCfDD9ec8pTIwBV2dCwjoCSmewnlg++FOiaHPeaKmVRQN+sbU5sx4jcQ
            tBknI4ioq883FYbwLuYgiZDn6McV82Up/jReOFTRSw+49QzfZ0fjNdc06sJzGp2t
            X34NLDNmS+eBgJrKprMn/tanD1Z8yrE7bwkWkCxpva2ZKTrAe0yP5fSV7N2Bdnmn
            YbtnKnjOTG63m0CkY9N0q73A+FOTHeLXq7CcNbPSv44JWcHkCARTVQ0ckGRmPi36
            E/JhjwKCAQAH/4Ynhw6JrEPAc3ZirGznDXZHcHGU41AQqr1ulKELRS3jpQYAhqyL
            nOPurWpp1HmLQWfbO+SHZ903Wt1G5V9B25ofguvadu06ryl89g4zFTsZut+Gsuau
            k9wmPfrwOft5bBny7tUQfo2oKG1V5aQjDyKScJ85f6bGPwcCg1T8wchEN2Kr3ZfW
            ZFRAn8Oz0Cye2mE6WCSpYflq4ynctXtuj+oHXi75PKln8rdc44KgWtDy479Cfg3W
            a5sFyvDFlugPhXAcIdqy1RhnfGA3K5sBfx8SnetQzZamcO+9V5cyOVqScAW6+Rze
            0FLneS45AErpM/gwgLe+b6/Wnk7oQ9hNAoIBAQDHH2P4m9iE/c896+GUOCD9WFcg
            ++aB9ilvcLpGS2nCBWHoaOBM7cBfk3DiFPqOwHhefQLYcfl0t/dPQ4IlBzVBlmNk
            BIgwzPn0CI9MZKce1wd908lKgL/onl28kbXzC9O1tOq9LFQR/ZYZarpkYAk4gmwc
            ZaoE9fY5ZzQNdARF7WbRYFiWGIbo+Uc0ZURVFxm1ptfl+BpzwJNco3FeM/mWlp6u
            1C6djR8rlMgjcmL3TpArt8bJVqWh5IeuwGY2lOUl9S9c5un+TRH1evAtOZK6cMf1
            XSejgyRDL7i3sAjlb9o+D9pdrqhwllREip5YZ7F9q47wTvZbOXWsYowEf5JT
            -----END RSA PRIVATE KEY-----
            EOD;

        $publicKey = <<<EOD
            -----BEGIN PUBLIC KEY-----
            MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAr1b7zqGR++QwwKToqQIZ
            gE2bq/U4hZmSOpPpx4jSwSm/hUpOQrQsz4vWC0AvSD7bchukteBaEvo8qOcblYTR
            rJmdjnRuSHQz05I3/L+QvvaIolKwqhbX0N0tshz1Pd1J07fiMNRpZZJsEoF7TpMA
            7A5CC5je/KO7FJKuQKpn/Ya7347lBlN5MonVkBDuo16byoLS1DG/J9yVDm3HehsQ
            xGii58iMFALwBE7z15igD+BU6zG5q3Y0dQ5mh9Xg4lfA5gL9//VHxiG35syTkg9g
            g3RiZrM1XJVntjEoaSIgjn0cNZg8viyC3eEXO8w0xSwxBXaK24DYZer3STZnho0N
            G6Gd5q9sFE1skc7mBaQy3wfktpffV/l2hFBOgQALpM/DWHspjjk+v6KFkNxvjh8Y
            RAyqff0itCG4Gi/bf984rmgzrWj/1OrWaDJcajjJhV2ZS+YbfgD1gKzYMYhYMi2X
            y2R+QpbQlhXaBsBaYPxJ9AiuS3zR6y3JsFptjLDi40io4YOd/9rYv7RCnviuk0hU
            xYxEDE9JjW1e7sNjf2aaTPQ3ncPEVXXPvJ7hgRGQHk6OSH4CSzoolmR+D5bvOnGy
            dUVtF21mVASAlcNYCqiz9PgV/j3jhlEnYnHYw745iKk50NNhFdb7NQzQtmcV/A8u
            PTEIlY+ixgDF1+q7Vap5YhUCAwEAAQ==
            -----END PUBLIC KEY-----
            EOD;

        $jwks = [
            'keys' => [
                [
                    "kty" => "RSA",
                    "n" => "r1b7zqGR--QwwKToqQIZgE2bq_U4hZmSOpPpx4jSwSm_hUpOQrQsz4vWC0AvSD7bchukteBaEvo8qOcblYTRrJmdjnRuSHQz05I3_L-QvvaIolKwqhbX0N0tshz1Pd1J07fiMNRpZZJsEoF7TpMA7A5CC5je_KO7FJKuQKpn_Ya7347lBlN5MonVkBDuo16byoLS1DG_J9yVDm3HehsQxGii58iMFALwBE7z15igD-BU6zG5q3Y0dQ5mh9Xg4lfA5gL9__VHxiG35syTkg9gg3RiZrM1XJVntjEoaSIgjn0cNZg8viyC3eEXO8w0xSwxBXaK24DYZer3STZnho0NG6Gd5q9sFE1skc7mBaQy3wfktpffV_l2hFBOgQALpM_DWHspjjk-v6KFkNxvjh8YRAyqff0itCG4Gi_bf984rmgzrWj_1OrWaDJcajjJhV2ZS-YbfgD1gKzYMYhYMi2Xy2R-QpbQlhXaBsBaYPxJ9AiuS3zR6y3JsFptjLDi40io4YOd_9rYv7RCnviuk0hUxYxEDE9JjW1e7sNjf2aaTPQ3ncPEVXXPvJ7hgRGQHk6OSH4CSzoolmR-D5bvOnGydUVtF21mVASAlcNYCqiz9PgV_j3jhlEnYnHYw745iKk50NNhFdb7NQzQtmcV_A8uPTEIlY-ixgDF1-q7Vap5YhU",
                    "e" => "AQAB",
                    "alg" => "RS256",
                    "kid" => "public",
                    "use" => "sig"
                ]
            ]
        ];

        $now = time();

        $payload = [
            'iss' => 'example.org',
            'aud' => 'example.com',
            "exp" => $now + (60 * 60),
            'iat' => $now,
            'nbf' => $now - 60
        ];

        $jwt = JWT::encode($payload, $privateKey, 'RS256', 'public');

        $decoded = JWT::decode($jwt, new Key($publicKey, 'RS256'));

        $jwksParsed = JWK::parseKeySet($jwks);

        $decodedJwk = JWT::decode($jwt, $jwksParsed);

        return $this->json([
            'jwt' => $jwt,
            'decoded' => $decoded,
            'jwks' => $decodedJwk
        ]);
    }

}
