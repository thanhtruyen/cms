<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-50">
    <div class="container">
        <div id="time-title" class="time-title">
            <h4>TIMETABLE FOR THE TRIP</h4>
        </div>
        
        <div class="row">

            <div class="table-container">
                <table class="shaka-table">
                    <thead>
                        <tr>
                            <th>GROUP: SEAHORSES</th>
                            <th class="align-center">8:00 - 10:00</th>
                            <th class="align-center">14:00 - 17:00</th>
                            <th class="align-center">20:00 - 22:00</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monday</td>
                            <td class="align-center">Swimming course</td>
                            <td class="align-center">Boat trip to Insland</td>
                            <td class="align-center">Town visit</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td class="align-center">Bike ride</td>
                            <td class="align-center">Lunch</td>
                            <td class="align-center">Dinner</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td class="align-center">Lecture</td>
                            <td class="align-center">Swimming with dolphins</td>
                            <td class="align-center">Walk</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td class="align-center">Surfing</td>
                            <td class="align-center">Sea world</td>
                            <td class="align-center">Night swimming</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td class="align-center">Viewing equipment</td>
                            <td class="align-center">Workout</td>
                            <td class="align-center">Dinner</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>