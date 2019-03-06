<?php  // $Id: lib.php,v 1.4 2006/08/28 16:41:20 mark-nielsen Exp $
/**
 * Library of functions and constants for module ejemplo
 *
 * @author
 * @version $Id: lib.php,v 1.4 2006/08/28 16:41:20 mark-nielsen Exp $
 * @package ejemplo
 **/

/// (replace ejemplo with the name of your module and delete this line)


$ejemplo_CONSTANT = 7;     /// for example

/**
 * Given an object containing all the necessary data,
 * (defined by the form in mod.html) this function
 * will create a new instance and return the id number
 * of the new instance.
 *
 * @param object $instance An object from the form in mod.html
 * @return int The id of the newly inserted ejemplo record
 **/
function ejemplo_add_instance($ejemplo) {

    // temp added for debugging
    echo "ADD INSTANCE CALLED";
   // print_object($ejemplo);

    $ejemplo->timemodified = time();
    if ($mod->course) {
      if (! $course = get_record("course", "id", $mod->course)) {
        error("Course is misconfigured");
      }
    }

    # May have to add extra stuff in here #

    return insert_record("ejemplo", $ejemplo);
}

/**
 * Given an object containing all the necessary data,
 * (defined by the form in mod.html) this function
 * will update an existing instance with new data.
 *
 * @param object $instance An object from the form in mod.html
 * @return boolean Success/Fail
 **/
function ejemplo_update_instance($ejemplo) {

    $ejemplo->timemodified = time();
    $ejemplo->id = $ejemplo->instance;

    # May have to add extra stuff in here #

    return update_record("ejemplo", $ejemplo);
}

/**
 * Given an ID of an instance of this module,
 * this function will permanently delete the instance
 * and any data that depends on it.
 *
 * @param int $id Id of the module instance
 * @return boolean Success/Failure
 **/
function ejemplo_delete_instance($id) {

    if (! $ejemplo = get_record("ejemplo", "id", "$id")) {
        return false;
    }

    $result = true;

    # Delete any dependent records here #

    if (! delete_records("ejemplo", "id", "$ejemplo->id")) {
        $result = false;
    }

    return $result;
}

/**
 * Return a small object with summary information about what a
 * user has done with a given particular instance of this module
 * Used for user activity reports.
 * $return->time = the time they did it
 * $return->info = a short text description
 *
 * @return null
 * @todo Finish documenting this function
 **/
function ejemplo_user_outline($course, $user, $mod, $ejemplo) {
    return $return;
}

/**
 * Print a detailed representation of what a user has done with
 * a given particular instance of this module, for user activity reports.
 *
 * @return boolean
 * @todo Finish documenting this function
 **/
function ejemplo_user_complete($course, $user, $mod, $ejemplo) {
    return true;
}

/**
 * Given a course and a time, this module should find recent activity
 * that has occurred in ejemplo activities and print it out.
 * Return true if there was output, or false is there was none.
 *
 * @uses $CFG
 * @return boolean
 * @todo Finish documenting this function
 **/
function ejemplo_print_recent_activity($course, $isteacher, $timestart) {
    global $CFG;

    return false;  //  True if anything was printed, otherwise false
}

/**
 * Function to be run periodically according to the moodle cron
 * This function searches for things that need to be done, such
 * as sending out mail, toggling flags etc ...
 *
 * @uses $CFG
 * @return boolean
 * @todo Finish documenting this function
 **/
function ejemplo_cron () {
    global $CFG;

    return true;
}

/**
 * Must return an array of grades for a given instance of this module,
 * indexed by user.  It also returns a maximum allowed grade.
 *
 * Example:
 *    $return->grades = array of grades;
 *    $return->maxgrade = maximum allowed grade;
 *
 *    return $return;
 *
 * @param int $ejemploid ID of an instance of this module
 * @return mixed Null or object with an array of grades and with the maximum grade
 **/
function ejemplo_grades($ejemploid) {
   return NULL;
}

/**
 * Must return an array of user records (all data) who are participants
 * for a given instance of ejemplo. Must include every user involved
 * in the instance, independient of his role (student, teacher, admin...)
 * See other modules as example.
 *
 * @param int $ejemploid ID of an instance of this module
 * @return mixed boolean/array of students
 **/
function ejemplo_get_participants($ejemploid) {
    return false;
}

/**
 * This function returns if a scale is being used by one ejemplo
 * it it has support for grading and scales. Commented code should be
 * modified if necessary. See forum, glossary or journal modules
 * as reference.
 *
 * @param int $ejemploid ID of an instance of this module
 * @return mixed
 * @todo Finish documenting this function
 **/
function ejemplo_scale_used ($ejemploid,$scaleid) {
    $return = false;

    //$rec = get_record("ejemplo","id","$ejemploid","scale","-$scaleid");
    //
    //if (!empty($rec)  && !empty($scaleid)) {
    //    $return = true;
    //}

    return $return;
}

//////////////////////////////////////////////////////////////////////////////////////
/// Any other ejemplo functions go here.  Each of them must have a name that
/// starts with ejemploejemplo_


?>
