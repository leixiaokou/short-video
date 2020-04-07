
        $headers = [
        'Connection' => 'keep-alive',
        'User-Agent'=>'Mozilla/5.0 (iPhone; CPU iPhone OS 12_1_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/16D57 Version/12.0 Safari/604.1'
       ];
        $client = new \GuzzleHttp\Client(['timeout' => $timeout, 'headers' => $headers, 'http_errors' => false,]);
        $data['headers'] = $headers;
        $jar = new \GuzzleHttp\Cookie\CookieJar;
        $data['cookies'] = $jar;
        $response = $client->request('GET', $url, $data);

        $body = $response->getBody();
        if ($body instanceof Stream) {
            $body = $body->getContents();
        }
        $res = json_decode($body, true);
        $result = htmlspecialchars_decode($result);
        $pattern = '#"srcNoMark":"(.*?)"#';
        preg_match($pattern, $result, $match);
        $data = [
            'video_src' => '',
            'cover_image' => '',
        ];
        if (empty($match[1])) {
            return false;
        }
        $data['video_src'] = $match[1];
        $pattern = '#"poster":"(.*?)"#';
        preg_match($pattern, $result, $match);
        if (!empty($match[1])) {
            $data['cover_image'] = $match[1];
        }
        echo json_encode($data);
