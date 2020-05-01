<?php 
include_once dirname( __FILE__ ) . '/Article.Class.php';
class Articles
{
  
  private $allArticles = array();// Properties.

  function __construct ( $jsonFilePath = '' ) // Methods.
  { 
    if ( file_exists( $jsonFilePath ) )
    { 
      $jsonString = file_get_contents( $jsonFilePath );
      
      $jsonObject = json_decode( $jsonString );
      
      if ( is_array( $jsonObject->articles ) )
      { 
        $this->allArticles = $jsonObject->articles;
      }
      
      else 
      { 
        echo '<p> The articles cannot be displayed</p>'; 
      }
    }
    else   
    { 
      echo '<p> Canot find you file</p>'; 
    }
  }

  
  public function output () 
  {
    if ( is_array( $this->allArticles ) && !empty( $this->allArticles ) )
    { 
      echo '<h2>List of Available  Articles </h2><ul>';
      
      foreach ( $this->allArticles as $article )
      { 
        $newArticle = new Article( $article->id, $article->title, $article->content );
        
        echo '<li>'.$newArticle->output( FALSE ).'</li>';
      } 
      echo '</ul>';
    }
  }
}

  