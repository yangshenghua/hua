<?php

namespace App\Http\Controllers;

use FFMpeg;
use Illuminate\Http\Request;
use FFMpeg\Coordinate\Dimension;

class FfmpegController extends Controller
{
    public function index()
    {
        $ffmpeg = FFMpeg\FFMpeg::create([
            'ffmpeg.binaries'  => '/usr/bin/ffmpeg',
            'ffprobe.binaries' => '/usr/bin/ffprobe'
        ]);
        $video = $ffmpeg->open('/home/vagrant/Pictures/IMG_2160.m4v');
        var_dump($video);
       /* $video
            ->filters()
            ->resize(new Dimension(320, 240))
            ->synchronize();
       */
        $video
            ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(3))
            ->save('frame.jpg');
        /*$video
            ->save(new FFMpeg\Format\Video\X264(), 'export-x264.mp4')
            ->save(new FFMpeg\Format\Video\WMV(), 'export-wmv.wmv')
            ->save(new FFMpeg\Format\Video\WebM(), 'export-webm.webm');*/
    }
}
