<?php
require __DIR__ . '/../vendor/autoload.php';

class Import_Presentations_Command extends WP_CLI_Command {

     function presentations( $args, $assoc_args ) {
         list( $filename ) = $args;

         $objPHPExcel = PHPExcel_IOFactory::load( $filename );

         $sheet = $objPHPExcel->getSheet(0);
         $highestRow = $sheet->getHighestRow();
         $highestColumn = $sheet->getHighestColumn();

         for ($row = 2; $row <= $highestRow; $row++){
           $easychair_id = $sheet->getCellByColumnAndRow(3, $row)->getValue();

           if ( ! $easychair_id ) {
              continue;
           }

           // $track_num = intval($sheet->getCellByColumnAndRow(1, $row)->getValue());
           // $track_name = $sheet->getCellByColumnAndRow(2, $row)->getValue();
           $title = $sheet->getCellByColumnAndRow(4, $row)->getValue();
           $authors = $sheet->getCellByColumnAndRow(5, $row)->getValue();
           $organization = $sheet->getCellByColumnAndRow(6, $row)->getValue();

           $decision = $sheet->getCellByColumnAndRow(10, $row)->getValue();
           
           $abstract = $sheet->getCellByColumnAndRow(16, $row)->getValue();
           // $submission_num = $sheet->getCellByColumnAndRow(7, $row)->getValue();
           
           var_dump($decision, $easychair_id, $title, $authors, $organization, $abstract);

           // if ( $decision !== 'accept' ) {
           //   continue;
           // }

           $post_data = array(
             'post_type' => 'presentation',
             'post_title' => $title,
             'post_status' => 'publish',
             'post_content' => $abstract,
           );

           $post_id = wp_insert_post( $post_data, true );

           update_field('presentation_author', $authors, $post_id);
           update_field('presentation_institution', $organization, $post_id);
           update_field('presentation_easychair_id', $easychair_id, $post_id);

           // var_dump($track_num);

           // if ( $track_num === 1) {
           //   update_field('presentation_track','integration', $post_id);
           // }
           // if ( $track_num === 2) {
           //   update_field('presentation_track','collaboration', $post_id);
           // }
           // if ( $track_num === 3) {
           //   update_field('presentation_track','strategy', $post_id);
           // }
           // if ( $track_num === 4) {
           //   update_field('presentation_track','research', $post_id);
           // }
           // if ( $track_num === 5) {
           //   update_field('presentation_track','initiatives', $post_id);
           // }
           update_field('presentation_track','poster', $post_id);


         }
         WP_CLI::success( "Loaded $filename" );

     }


}

WP_CLI::add_command( 'custom-import', 'Import_Presentations_Command' );
