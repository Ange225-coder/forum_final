<?php session_start();

    /**
     * user or member management right here
    */
    require_once('../controllers/usersCtrl/userRegistrationCtrl.php');
    require_once('../controllers/usersCtrl/userLoginCtrl.php');
    require_once('../controllers/usersCtrl/settings/updateEmailCtrl.php');
    require_once('../controllers/usersCtrl/settings/updatePasswordCtrl.php');
    require_once('../controllers/usersCtrl/settings/deleteAccountCtrl.php');
    /**
     * topics and their comments manage right here
    */

    require_once('../controllers/topicsCtrl/insertionTopicCtrl.php');
    require_once('../controllers/topicsCtrl/readingTopicCtrl.php');
    require_once('../controllers/topicsCtrl/commentTopicCtrl.php');
    require_once('../controllers/topicsCtrl/insertCommentsCtrl.php');
    require_once('../controllers/topicsCtrl/setCommentResponseCtrl.php');

    /**
     * admin management right here
    */
    require_once('../controllers/adminCtrl/adminRegistrationCtrl.php');
    require_once('../controllers/adminCtrl/adminLoginCtrl.php');
    require_once('../controllers/administratorManageCtrl/deletionCtrl/deleteCtrl/deleteUserCtrl.php');
    require_once('../controllers/administratorManageCtrl/deletionCtrl/deleteCtrl/deleteTopicCtrl.php');
    require_once('../controllers/administratorManageCtrl/deletionCtrl/deleteCtrl/deleteCommentCtrl.php');

    /**
     * devProblem
     */
    require_once('../controllers/devProblemCtrl/devProblemCtrl.php');
    require_once('../controllers/administratorManageCtrl/deletionCtrl/deleteCtrl/deleteProblemCtrl.php');

    
    if(isset($_GET['action'])) {


        /** user registration */
        try {
            if ($_GET['action'] == 'newUserInsertionCtrl') {
                newUserInsertionCtrl();

                header('Location: ../../front/view/users/userHome/memberHomePage.php');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }


        /** user login */
        if ($_GET['action'] == 'loginUserCtrl') {

            loginUserCtrl();

            header('Location: ../../front/view/users/userHome/memberHomePage.php');
        }


        if ($_GET['action'] == 'topicsManageCtrl') {
            try {
                topicsManageCtrl();

                header('Location: ../../front/view/users/topics/topicsList.php');
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }


        /**try
         * {
         * if($_GET['action'] == 'displayTopic') {
         * displayTopic();
         *
         * header('Location: ../../front/view/commentTopic.php?idPost='.$_GET['idPost']);
         * }
         * }
         * catch(Exception $e)
         * {
         * echo $e->getMessage();
         * }
        */































        try {
            if ($_GET['action'] == 'insertCommentsCtrl') {
                insertCommentsCtrl();

                header('Location: ../../front/view/users/comments/displayPostComments.php?idPost=' . $_GET['idPost']);
            }
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }



        try {
            if ($_GET['action'] == 'adminRegistrationCtrl') {
                adminRegistrationCtrl();

                header('Location: ../../front/view/admin/adminHome/adminHomePage.php');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        
        if ($_GET['action'] == 'adminLoginCtrl') {
            adminLoginCtrl();

            header('Location: ../../front/view/admin/adminHome/adminHomePage.php');
        }


        /**
         * delete user by admin
         */
        try {
            if ($_GET['action'] == 'deleteUserCtrl') {
                deleteUserCtrl();

                header('Location: ../../front/view/admin/redirections/deletionSuccess.php');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }



        /**
         * delete topic by admin
         */
        try {
            if ($_GET['action'] == 'deleteTopicCtrl') {
                deleteTopicCtrl();

                header('Location: ../../front/view/admin/redirections/deletionSuccess.php');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }



        /**
         * delete comment by admin
         */
        try {
            if ($_GET['action'] == 'deleteCommentCtrl') {
                deleteCommentCtrl();

                header('Location: ../../front/view/admin/redirections/deletionSuccess.php');

            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }


        /**
         * email updating
         */
        try {
            if ($_GET['action'] == 'update_emailCtrl') {
                update_emailCtrl();

                header('Location: ../../front/view/users/settings/account/update/successMaj.php');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        /**
         * password updating
         */
        try {
            if ($_GET['action'] == 'update_passwordCtrl') {
                update_passwordCtrl();

                header('Location: ../../front/view/users/settings/account/update/successMaj.php');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }


        /**
         * delete account
         */
        try {
            if ($_GET['action'] == 'deleteAccountCtrl') {
                deleteAccountCtrl();

                header('Location: ../../front/view/users/settings/account/deletion/successDeletion.php');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }



        /**
         * Parenthèse finale du if à revoir
         */

        /**
         * dev problem
         */
        try {
            if ($_GET['action'] == 'setProblemCtrl') {
                setProblemCtrl();

                header('Location: ../../front/view/admin/problemManage/displayProblem.php');
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }


        /**
         * dev problem
         *
         * problem deletion
         */
        try {
            if ($_GET['action'] == 'deleteProblemCtrl') {
                deleteProblemCtrl();

                header('Location: ../../front/view/admin/redirections/deletionSuccess.php');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }



        /**
         * response
         */

        try
        {
            if($_GET['action'] == 'setResponseCtrl') {
                setResponseCtrl();

                header('Location: ../../front/view/users/comments/displayResponseCom.php?idPost='.$_GET['idPost'].'&idCom='.$_GET['idCom']);
            }
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }

    }