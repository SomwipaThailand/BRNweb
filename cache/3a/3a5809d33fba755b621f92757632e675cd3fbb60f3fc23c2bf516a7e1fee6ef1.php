<?php

/* login.html */
class __TwigTemplate_16e58cda33dd56f9c2fa2e7bb5e539507bf07ce3912f8156a428fd42fb31cd96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_base_home.html", "login.html", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'jscript' => array($this, 'block_jscript'),
            'content_head' => array($this, 'block_content_head'),
            'content' => array($this, 'block_content'),
            'content_last' => array($this, 'block_content_last'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base_home.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("css", $context, $blocks);
        echo "
<!-- //css here -->
";
    }

    // line 6
    public function block_jscript($context, array $blocks = array())
    {
        // line 7
        $this->displayParentBlock("jscript", $context, $blocks);
        echo "
<!-- //jscript here -->
";
    }

    // line 10
    public function block_content_head($context, array $blocks = array())
    {
        // line 11
        $this->displayParentBlock("content_head", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<script src=\"https://www.gstatic.com/firebasejs/3.3.0/firebase.js\"></script>
<script>
  // Initialize Firebase
console.log('first');
  var config = {
    apiKey: \"AIzaSyAzuaowm5sRdrHr882V-C6fmpXOZTxY310\",
    authDomain: \"irrigationpattani.firebaseapp.com\",
    databaseURL: \"https://irrigationpattani.firebaseio.com\",
    storageBucket: \"irrigationpattani.appspot.com\",
  };
  firebase.initializeApp(config);
  var starCountRef = firebase.database().ref().child('test');
  //console.log(starCountRef);
  starCountRef.once(\"value\")
  .then(function(snapshot){
\t  var a= snapshot.val();
\t  console.log(a);
  });
  
  var user = firebase.auth().currentUser;

  if (user) {
\t  user.providerData.forEach(function (profile) {
\t      console.log(\"Sign-in provider: \"+profile.providerId);
\t      console.log(\"  Provider-specific UID: \"+profile.uid);
\t      console.log(\"  Name: \"+profile.displayName);
\t      console.log(\"  Email: \"+profile.email);
\t      console.log(\"  Photo URL: \"+profile.photoURL);
\t    });
\t  
  }else{
\t  var provider = new firebase.auth.GoogleAuthProvider();
\t  firebase.auth().signInWithPopup(provider).then(function(result) {
\t    // This gives you a Google Access Token. You can use it to access the Google API.
\t    var token = result.credential.accessToken;
\t    // The signed-in user info.
\t    var user = result.user;
\t\tconsole.log(user.uid);
\t    // ...
\t  }).catch(function(error) {
\t    // Handle Errors here.
\t    var errorCode = error.code;
\t    var errorMessage = error.message;
\t    // The email of the user's account used.
\t    var email = error.email;
\t    // The firebase.auth.AuthCredential type that was used.
\t    var credential = error.credential;
\t    // ...
\t  });
  \t  
  }
  
  
\t  
</script>
<div >
\tLogin
</div>
";
    }

    // line 73
    public function block_content_last($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 73,  64 => 14,  61 => 13,  55 => 11,  52 => 10,  45 => 7,  42 => 6,  35 => 3,  32 => 2,  11 => 1,);
    }
}
/* {%extends '_base_home.html'%}*/
/* {%block css%}*/
/* {{ parent() }}*/
/* <!-- //css here -->*/
/* {%endblock%}*/
/* {%block jscript%}*/
/* {{ parent() }}*/
/* <!-- //jscript here -->*/
/* {%endblock%}*/
/* {%block content_head%}*/
/* {{ parent() }}*/
/* {%endblock%}*/
/* {%block content%}*/
/* <script src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>*/
/* <script>*/
/*   // Initialize Firebase*/
/* console.log('first');*/
/*   var config = {*/
/*     apiKey: "AIzaSyAzuaowm5sRdrHr882V-C6fmpXOZTxY310",*/
/*     authDomain: "irrigationpattani.firebaseapp.com",*/
/*     databaseURL: "https://irrigationpattani.firebaseio.com",*/
/*     storageBucket: "irrigationpattani.appspot.com",*/
/*   };*/
/*   firebase.initializeApp(config);*/
/*   var starCountRef = firebase.database().ref().child('test');*/
/*   //console.log(starCountRef);*/
/*   starCountRef.once("value")*/
/*   .then(function(snapshot){*/
/* 	  var a= snapshot.val();*/
/* 	  console.log(a);*/
/*   });*/
/*   */
/*   var user = firebase.auth().currentUser;*/
/* */
/*   if (user) {*/
/* 	  user.providerData.forEach(function (profile) {*/
/* 	      console.log("Sign-in provider: "+profile.providerId);*/
/* 	      console.log("  Provider-specific UID: "+profile.uid);*/
/* 	      console.log("  Name: "+profile.displayName);*/
/* 	      console.log("  Email: "+profile.email);*/
/* 	      console.log("  Photo URL: "+profile.photoURL);*/
/* 	    });*/
/* 	  */
/*   }else{*/
/* 	  var provider = new firebase.auth.GoogleAuthProvider();*/
/* 	  firebase.auth().signInWithPopup(provider).then(function(result) {*/
/* 	    // This gives you a Google Access Token. You can use it to access the Google API.*/
/* 	    var token = result.credential.accessToken;*/
/* 	    // The signed-in user info.*/
/* 	    var user = result.user;*/
/* 		console.log(user.uid);*/
/* 	    // ...*/
/* 	  }).catch(function(error) {*/
/* 	    // Handle Errors here.*/
/* 	    var errorCode = error.code;*/
/* 	    var errorMessage = error.message;*/
/* 	    // The email of the user's account used.*/
/* 	    var email = error.email;*/
/* 	    // The firebase.auth.AuthCredential type that was used.*/
/* 	    var credential = error.credential;*/
/* 	    // ...*/
/* 	  });*/
/*   	  */
/*   }*/
/*   */
/*   */
/* 	  */
/* </script>*/
/* <div >*/
/* 	Login*/
/* </div>*/
/* {%endblock%}*/
/* {%block content_last%}*/
/* {%endblock%}*/
/* */
/* */
