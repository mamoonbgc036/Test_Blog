<?php 
    namespace Test_Blog\inc\traits;

    trait Singleton{
        public function __construct(){

        }

        public function __clone(){

        }

        final public static function get_instance(){
            static $instance = [];

            $calledclass = get_called_class();

            if ( ! isset ( $instance [ $calledclass ])){
                $instance [ $calledclass ] = new $calledclass;
                do_action( sprintf( 'Test_Blog_singleton_init%s ', $calledclass ) );
            }
            return $instance [ $calledclass ];
        }
    }
?>