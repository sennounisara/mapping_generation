<?php


/**
 * Base class that represents a row from the 'champ_supplementaire' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseChampSupplementaire extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ChampSupplementairePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ChampSupplementairePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_champ_supplementaire field.
     * @var        int
     */
    protected $id_champ_supplementaire;

    /**
     * The value for the id_organisme field.
     * @var        int
     */
    protected $id_organisme;

    /**
     * The value for the id_theme field.
     * @var        int
     */
    protected $id_theme;

    /**
     * The value for the id_action field.
     * @var        int
     */
    protected $id_action;

    /**
     * The value for the label_fr1 field.
     * @var        string
     */
    protected $label_fr1;

    /**
     * The value for the label_ar1 field.
     * @var        string
     */
    protected $label_ar1;

    /**
     * The value for the label_court1 field.
     * @var        string
     */
    protected $label_court1;

    /**
     * The value for the type1 field.
     * @var        int
     */
    protected $type1;

    /**
     * The value for the obligatoire1 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligatoire1;

    /**
     * The value for the actif1 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $actif1;

    /**
     * The value for the visible1 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible1;

    /**
     * The value for the emplacement1 field.
     * @var        string
     */
    protected $emplacement1;

    /**
     * The value for the label_fr2 field.
     * @var        string
     */
    protected $label_fr2;

    /**
     * The value for the label_ar2 field.
     * @var        string
     */
    protected $label_ar2;

    /**
     * The value for the label_court2 field.
     * @var        string
     */
    protected $label_court2;

    /**
     * The value for the type2 field.
     * @var        string
     */
    protected $type2;

    /**
     * The value for the obligatoire2 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligatoire2;

    /**
     * The value for the actif2 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $actif2;

    /**
     * The value for the visible2 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible2;

    /**
     * The value for the emplacement2 field.
     * @var        string
     */
    protected $emplacement2;

    /**
     * The value for the label_fr3 field.
     * @var        string
     */
    protected $label_fr3;

    /**
     * The value for the label_ar3 field.
     * @var        string
     */
    protected $label_ar3;

    /**
     * The value for the label_court3 field.
     * @var        string
     */
    protected $label_court3;

    /**
     * The value for the type3 field.
     * @var        string
     */
    protected $type3;

    /**
     * The value for the obligatoire3 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligatoire3;

    /**
     * The value for the actif3 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $actif3;

    /**
     * The value for the visible3 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible3;

    /**
     * The value for the emplacement3 field.
     * @var        string
     */
    protected $emplacement3;

    /**
     * The value for the label_fr4 field.
     * @var        string
     */
    protected $label_fr4;

    /**
     * The value for the label_ar4 field.
     * @var        string
     */
    protected $label_ar4;

    /**
     * The value for the label_court4 field.
     * @var        string
     */
    protected $label_court4;

    /**
     * The value for the type4 field.
     * @var        string
     */
    protected $type4;

    /**
     * The value for the obligatoire4 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligatoire4;

    /**
     * The value for the actif4 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $actif4;

    /**
     * The value for the visible4 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible4;

    /**
     * The value for the emplacement4 field.
     * @var        string
     */
    protected $emplacement4;

    /**
     * The value for the label_fr5 field.
     * @var        string
     */
    protected $label_fr5;

    /**
     * The value for the label_ar5 field.
     * @var        string
     */
    protected $label_ar5;

    /**
     * The value for the label_court5 field.
     * @var        string
     */
    protected $label_court5;

    /**
     * The value for the type5 field.
     * @var        string
     */
    protected $type5;

    /**
     * The value for the obligatoire5 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligatoire5;

    /**
     * The value for the actif5 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $actif5;

    /**
     * The value for the visible5 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible5;

    /**
     * The value for the emplacement5 field.
     * @var        string
     */
    protected $emplacement5;

    /**
     * The value for the valeur_liste_fr_1 field.
     * @var        string
     */
    protected $valeur_liste_fr_1;

    /**
     * The value for the valeur_liste_ar_1 field.
     * @var        string
     */
    protected $valeur_liste_ar_1;

    /**
     * The value for the valeur_liste_fr_2 field.
     * @var        string
     */
    protected $valeur_liste_fr_2;

    /**
     * The value for the valeur_liste_ar_2 field.
     * @var        string
     */
    protected $valeur_liste_ar_2;

    /**
     * The value for the valeur_liste_fr_3 field.
     * @var        string
     */
    protected $valeur_liste_fr_3;

    /**
     * The value for the valeur_liste_ar_3 field.
     * @var        string
     */
    protected $valeur_liste_ar_3;

    /**
     * The value for the valeur_liste_fr_4 field.
     * @var        string
     */
    protected $valeur_liste_fr_4;

    /**
     * The value for the valeur_liste_ar_4 field.
     * @var        string
     */
    protected $valeur_liste_ar_4;

    /**
     * The value for the valeur_liste_fr_5 field.
     * @var        string
     */
    protected $valeur_liste_fr_5;

    /**
     * The value for the valeur_liste_ar_5 field.
     * @var        string
     */
    protected $valeur_liste_ar_5;

    /**
     * The value for the position1 field.
     * @var        string
     */
    protected $position1;

    /**
     * The value for the position2 field.
     * @var        string
     */
    protected $position2;

    /**
     * The value for the position3 field.
     * @var        string
     */
    protected $position3;

    /**
     * The value for the position4 field.
     * @var        string
     */
    protected $position4;

    /**
     * The value for the position5 field.
     * @var        string
     */
    protected $position5;

    /**
     * The value for the visible_bov1 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible_bov1;

    /**
     * The value for the visible_bov2 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible_bov2;

    /**
     * The value for the visible_bov3 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible_bov3;

    /**
     * The value for the visible_bov4 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible_bov4;

    /**
     * The value for the visible_bov5 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible_bov5;

    /**
     * The value for the visible_tableau1 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible_tableau1;

    /**
     * The value for the visible_tableau2 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible_tableau2;

    /**
     * The value for the visible_tableau3 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible_tableau3;

    /**
     * The value for the visible_tableau4 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible_tableau4;

    /**
     * The value for the visible_tableau5 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible_tableau5;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->obligatoire1 = '0';
        $this->actif1 = '0';
        $this->visible1 = '0';
        $this->obligatoire2 = '0';
        $this->actif2 = '0';
        $this->visible2 = '0';
        $this->obligatoire3 = '0';
        $this->actif3 = '0';
        $this->visible3 = '0';
        $this->obligatoire4 = '0';
        $this->actif4 = '0';
        $this->visible4 = '0';
        $this->obligatoire5 = '0';
        $this->actif5 = '0';
        $this->visible5 = '0';
        $this->visible_bov1 = '0';
        $this->visible_bov2 = '0';
        $this->visible_bov3 = '0';
        $this->visible_bov4 = '0';
        $this->visible_bov5 = '0';
        $this->visible_tableau1 = '0';
        $this->visible_tableau2 = '0';
        $this->visible_tableau3 = '0';
        $this->visible_tableau4 = '0';
        $this->visible_tableau5 = '0';
    }

    /**
     * Initializes internal state of BaseChampSupplementaire object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_champ_supplementaire] column value.
     * 
     * @return int
     */
    public function getIdChampSupplementaire()
    {

        return $this->id_champ_supplementaire;
    }

    /**
     * Get the [id_organisme] column value.
     * 
     * @return int
     */
    public function getIdOrganisme()
    {

        return $this->id_organisme;
    }

    /**
     * Get the [id_theme] column value.
     * 
     * @return int
     */
    public function getIdTheme()
    {

        return $this->id_theme;
    }

    /**
     * Get the [id_action] column value.
     * 
     * @return int
     */
    public function getIdAction()
    {

        return $this->id_action;
    }

    /**
     * Get the [label_fr1] column value.
     * 
     * @return string
     */
    public function getLabelFr1()
    {

        return $this->label_fr1;
    }

    /**
     * Get the [label_ar1] column value.
     * 
     * @return string
     */
    public function getLabelAr1()
    {

        return $this->label_ar1;
    }

    /**
     * Get the [label_court1] column value.
     * 
     * @return string
     */
    public function getLabelCourt1()
    {

        return $this->label_court1;
    }

    /**
     * Get the [type1] column value.
     * 
     * @return int
     */
    public function getType1()
    {

        return $this->type1;
    }

    /**
     * Get the [obligatoire1] column value.
     * 
     * @return string
     */
    public function getObligatoire1()
    {

        return $this->obligatoire1;
    }

    /**
     * Get the [actif1] column value.
     * 
     * @return string
     */
    public function getActif1()
    {

        return $this->actif1;
    }

    /**
     * Get the [visible1] column value.
     * 
     * @return string
     */
    public function getVisible1()
    {

        return $this->visible1;
    }

    /**
     * Get the [emplacement1] column value.
     * 
     * @return string
     */
    public function getEmplacement1()
    {

        return $this->emplacement1;
    }

    /**
     * Get the [label_fr2] column value.
     * 
     * @return string
     */
    public function getLabelFr2()
    {

        return $this->label_fr2;
    }

    /**
     * Get the [label_ar2] column value.
     * 
     * @return string
     */
    public function getLabelAr2()
    {

        return $this->label_ar2;
    }

    /**
     * Get the [label_court2] column value.
     * 
     * @return string
     */
    public function getLabelCourt2()
    {

        return $this->label_court2;
    }

    /**
     * Get the [type2] column value.
     * 
     * @return string
     */
    public function getType2()
    {

        return $this->type2;
    }

    /**
     * Get the [obligatoire2] column value.
     * 
     * @return string
     */
    public function getObligatoire2()
    {

        return $this->obligatoire2;
    }

    /**
     * Get the [actif2] column value.
     * 
     * @return string
     */
    public function getActif2()
    {

        return $this->actif2;
    }

    /**
     * Get the [visible2] column value.
     * 
     * @return string
     */
    public function getVisible2()
    {

        return $this->visible2;
    }

    /**
     * Get the [emplacement2] column value.
     * 
     * @return string
     */
    public function getEmplacement2()
    {

        return $this->emplacement2;
    }

    /**
     * Get the [label_fr3] column value.
     * 
     * @return string
     */
    public function getLabelFr3()
    {

        return $this->label_fr3;
    }

    /**
     * Get the [label_ar3] column value.
     * 
     * @return string
     */
    public function getLabelAr3()
    {

        return $this->label_ar3;
    }

    /**
     * Get the [label_court3] column value.
     * 
     * @return string
     */
    public function getLabelCourt3()
    {

        return $this->label_court3;
    }

    /**
     * Get the [type3] column value.
     * 
     * @return string
     */
    public function getType3()
    {

        return $this->type3;
    }

    /**
     * Get the [obligatoire3] column value.
     * 
     * @return string
     */
    public function getObligatoire3()
    {

        return $this->obligatoire3;
    }

    /**
     * Get the [actif3] column value.
     * 
     * @return string
     */
    public function getActif3()
    {

        return $this->actif3;
    }

    /**
     * Get the [visible3] column value.
     * 
     * @return string
     */
    public function getVisible3()
    {

        return $this->visible3;
    }

    /**
     * Get the [emplacement3] column value.
     * 
     * @return string
     */
    public function getEmplacement3()
    {

        return $this->emplacement3;
    }

    /**
     * Get the [label_fr4] column value.
     * 
     * @return string
     */
    public function getLabelFr4()
    {

        return $this->label_fr4;
    }

    /**
     * Get the [label_ar4] column value.
     * 
     * @return string
     */
    public function getLabelAr4()
    {

        return $this->label_ar4;
    }

    /**
     * Get the [label_court4] column value.
     * 
     * @return string
     */
    public function getLabelCourt4()
    {

        return $this->label_court4;
    }

    /**
     * Get the [type4] column value.
     * 
     * @return string
     */
    public function getType4()
    {

        return $this->type4;
    }

    /**
     * Get the [obligatoire4] column value.
     * 
     * @return string
     */
    public function getObligatoire4()
    {

        return $this->obligatoire4;
    }

    /**
     * Get the [actif4] column value.
     * 
     * @return string
     */
    public function getActif4()
    {

        return $this->actif4;
    }

    /**
     * Get the [visible4] column value.
     * 
     * @return string
     */
    public function getVisible4()
    {

        return $this->visible4;
    }

    /**
     * Get the [emplacement4] column value.
     * 
     * @return string
     */
    public function getEmplacement4()
    {

        return $this->emplacement4;
    }

    /**
     * Get the [label_fr5] column value.
     * 
     * @return string
     */
    public function getLabelFr5()
    {

        return $this->label_fr5;
    }

    /**
     * Get the [label_ar5] column value.
     * 
     * @return string
     */
    public function getLabelAr5()
    {

        return $this->label_ar5;
    }

    /**
     * Get the [label_court5] column value.
     * 
     * @return string
     */
    public function getLabelCourt5()
    {

        return $this->label_court5;
    }

    /**
     * Get the [type5] column value.
     * 
     * @return string
     */
    public function getType5()
    {

        return $this->type5;
    }

    /**
     * Get the [obligatoire5] column value.
     * 
     * @return string
     */
    public function getObligatoire5()
    {

        return $this->obligatoire5;
    }

    /**
     * Get the [actif5] column value.
     * 
     * @return string
     */
    public function getActif5()
    {

        return $this->actif5;
    }

    /**
     * Get the [visible5] column value.
     * 
     * @return string
     */
    public function getVisible5()
    {

        return $this->visible5;
    }

    /**
     * Get the [emplacement5] column value.
     * 
     * @return string
     */
    public function getEmplacement5()
    {

        return $this->emplacement5;
    }

    /**
     * Get the [valeur_liste_fr_1] column value.
     * 
     * @return string
     */
    public function getValeurListeFr1()
    {

        return $this->valeur_liste_fr_1;
    }

    /**
     * Get the [valeur_liste_ar_1] column value.
     * 
     * @return string
     */
    public function getValeurListeAr1()
    {

        return $this->valeur_liste_ar_1;
    }

    /**
     * Get the [valeur_liste_fr_2] column value.
     * 
     * @return string
     */
    public function getValeurListeFr2()
    {

        return $this->valeur_liste_fr_2;
    }

    /**
     * Get the [valeur_liste_ar_2] column value.
     * 
     * @return string
     */
    public function getValeurListeAr2()
    {

        return $this->valeur_liste_ar_2;
    }

    /**
     * Get the [valeur_liste_fr_3] column value.
     * 
     * @return string
     */
    public function getValeurListeFr3()
    {

        return $this->valeur_liste_fr_3;
    }

    /**
     * Get the [valeur_liste_ar_3] column value.
     * 
     * @return string
     */
    public function getValeurListeAr3()
    {

        return $this->valeur_liste_ar_3;
    }

    /**
     * Get the [valeur_liste_fr_4] column value.
     * 
     * @return string
     */
    public function getValeurListeFr4()
    {

        return $this->valeur_liste_fr_4;
    }

    /**
     * Get the [valeur_liste_ar_4] column value.
     * 
     * @return string
     */
    public function getValeurListeAr4()
    {

        return $this->valeur_liste_ar_4;
    }

    /**
     * Get the [valeur_liste_fr_5] column value.
     * 
     * @return string
     */
    public function getValeurListeFr5()
    {

        return $this->valeur_liste_fr_5;
    }

    /**
     * Get the [valeur_liste_ar_5] column value.
     * 
     * @return string
     */
    public function getValeurListeAr5()
    {

        return $this->valeur_liste_ar_5;
    }

    /**
     * Get the [position1] column value.
     * 
     * @return string
     */
    public function getPosition1()
    {

        return $this->position1;
    }

    /**
     * Get the [position2] column value.
     * 
     * @return string
     */
    public function getPosition2()
    {

        return $this->position2;
    }

    /**
     * Get the [position3] column value.
     * 
     * @return string
     */
    public function getPosition3()
    {

        return $this->position3;
    }

    /**
     * Get the [position4] column value.
     * 
     * @return string
     */
    public function getPosition4()
    {

        return $this->position4;
    }

    /**
     * Get the [position5] column value.
     * 
     * @return string
     */
    public function getPosition5()
    {

        return $this->position5;
    }

    /**
     * Get the [visible_bov1] column value.
     * 
     * @return string
     */
    public function getVisibleBov1()
    {

        return $this->visible_bov1;
    }

    /**
     * Get the [visible_bov2] column value.
     * 
     * @return string
     */
    public function getVisibleBov2()
    {

        return $this->visible_bov2;
    }

    /**
     * Get the [visible_bov3] column value.
     * 
     * @return string
     */
    public function getVisibleBov3()
    {

        return $this->visible_bov3;
    }

    /**
     * Get the [visible_bov4] column value.
     * 
     * @return string
     */
    public function getVisibleBov4()
    {

        return $this->visible_bov4;
    }

    /**
     * Get the [visible_bov5] column value.
     * 
     * @return string
     */
    public function getVisibleBov5()
    {

        return $this->visible_bov5;
    }

    /**
     * Get the [visible_tableau1] column value.
     * 
     * @return string
     */
    public function getVisibleTableau1()
    {

        return $this->visible_tableau1;
    }

    /**
     * Get the [visible_tableau2] column value.
     * 
     * @return string
     */
    public function getVisibleTableau2()
    {

        return $this->visible_tableau2;
    }

    /**
     * Get the [visible_tableau3] column value.
     * 
     * @return string
     */
    public function getVisibleTableau3()
    {

        return $this->visible_tableau3;
    }

    /**
     * Get the [visible_tableau4] column value.
     * 
     * @return string
     */
    public function getVisibleTableau4()
    {

        return $this->visible_tableau4;
    }

    /**
     * Get the [visible_tableau5] column value.
     * 
     * @return string
     */
    public function getVisibleTableau5()
    {

        return $this->visible_tableau5;
    }

    /**
     * Set the value of [id_champ_supplementaire] column.
     * 
     * @param int $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setIdChampSupplementaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_champ_supplementaire !== $v) {
            $this->id_champ_supplementaire = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE;
        }


        return $this;
    } // setIdChampSupplementaire()

    /**
     * Set the value of [id_organisme] column.
     * 
     * @param int $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setIdOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_organisme !== $v) {
            $this->id_organisme = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::ID_ORGANISME;
        }


        return $this;
    } // setIdOrganisme()

    /**
     * Set the value of [id_theme] column.
     * 
     * @param int $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setIdTheme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_theme !== $v) {
            $this->id_theme = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::ID_THEME;
        }


        return $this;
    } // setIdTheme()

    /**
     * Set the value of [id_action] column.
     * 
     * @param int $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setIdAction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_action !== $v) {
            $this->id_action = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::ID_ACTION;
        }


        return $this;
    } // setIdAction()

    /**
     * Set the value of [label_fr1] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelFr1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_fr1 !== $v) {
            $this->label_fr1 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_FR1;
        }


        return $this;
    } // setLabelFr1()

    /**
     * Set the value of [label_ar1] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelAr1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_ar1 !== $v) {
            $this->label_ar1 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_AR1;
        }


        return $this;
    } // setLabelAr1()

    /**
     * Set the value of [label_court1] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelCourt1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_court1 !== $v) {
            $this->label_court1 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_COURT1;
        }


        return $this;
    } // setLabelCourt1()

    /**
     * Set the value of [type1] column.
     * 
     * @param int $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setType1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type1 !== $v) {
            $this->type1 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::TYPE1;
        }


        return $this;
    } // setType1()

    /**
     * Set the value of [obligatoire1] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setObligatoire1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligatoire1 !== $v) {
            $this->obligatoire1 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::OBLIGATOIRE1;
        }


        return $this;
    } // setObligatoire1()

    /**
     * Set the value of [actif1] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setActif1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->actif1 !== $v) {
            $this->actif1 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::ACTIF1;
        }


        return $this;
    } // setActif1()

    /**
     * Set the value of [visible1] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisible1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible1 !== $v) {
            $this->visible1 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE1;
        }


        return $this;
    } // setVisible1()

    /**
     * Set the value of [emplacement1] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setEmplacement1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->emplacement1 !== $v) {
            $this->emplacement1 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::EMPLACEMENT1;
        }


        return $this;
    } // setEmplacement1()

    /**
     * Set the value of [label_fr2] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelFr2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_fr2 !== $v) {
            $this->label_fr2 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_FR2;
        }


        return $this;
    } // setLabelFr2()

    /**
     * Set the value of [label_ar2] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelAr2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_ar2 !== $v) {
            $this->label_ar2 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_AR2;
        }


        return $this;
    } // setLabelAr2()

    /**
     * Set the value of [label_court2] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelCourt2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_court2 !== $v) {
            $this->label_court2 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_COURT2;
        }


        return $this;
    } // setLabelCourt2()

    /**
     * Set the value of [type2] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setType2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type2 !== $v) {
            $this->type2 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::TYPE2;
        }


        return $this;
    } // setType2()

    /**
     * Set the value of [obligatoire2] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setObligatoire2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligatoire2 !== $v) {
            $this->obligatoire2 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::OBLIGATOIRE2;
        }


        return $this;
    } // setObligatoire2()

    /**
     * Set the value of [actif2] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setActif2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->actif2 !== $v) {
            $this->actif2 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::ACTIF2;
        }


        return $this;
    } // setActif2()

    /**
     * Set the value of [visible2] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisible2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible2 !== $v) {
            $this->visible2 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE2;
        }


        return $this;
    } // setVisible2()

    /**
     * Set the value of [emplacement2] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setEmplacement2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->emplacement2 !== $v) {
            $this->emplacement2 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::EMPLACEMENT2;
        }


        return $this;
    } // setEmplacement2()

    /**
     * Set the value of [label_fr3] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelFr3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_fr3 !== $v) {
            $this->label_fr3 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_FR3;
        }


        return $this;
    } // setLabelFr3()

    /**
     * Set the value of [label_ar3] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelAr3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_ar3 !== $v) {
            $this->label_ar3 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_AR3;
        }


        return $this;
    } // setLabelAr3()

    /**
     * Set the value of [label_court3] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelCourt3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_court3 !== $v) {
            $this->label_court3 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_COURT3;
        }


        return $this;
    } // setLabelCourt3()

    /**
     * Set the value of [type3] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setType3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type3 !== $v) {
            $this->type3 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::TYPE3;
        }


        return $this;
    } // setType3()

    /**
     * Set the value of [obligatoire3] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setObligatoire3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligatoire3 !== $v) {
            $this->obligatoire3 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::OBLIGATOIRE3;
        }


        return $this;
    } // setObligatoire3()

    /**
     * Set the value of [actif3] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setActif3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->actif3 !== $v) {
            $this->actif3 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::ACTIF3;
        }


        return $this;
    } // setActif3()

    /**
     * Set the value of [visible3] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisible3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible3 !== $v) {
            $this->visible3 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE3;
        }


        return $this;
    } // setVisible3()

    /**
     * Set the value of [emplacement3] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setEmplacement3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->emplacement3 !== $v) {
            $this->emplacement3 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::EMPLACEMENT3;
        }


        return $this;
    } // setEmplacement3()

    /**
     * Set the value of [label_fr4] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelFr4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_fr4 !== $v) {
            $this->label_fr4 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_FR4;
        }


        return $this;
    } // setLabelFr4()

    /**
     * Set the value of [label_ar4] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelAr4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_ar4 !== $v) {
            $this->label_ar4 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_AR4;
        }


        return $this;
    } // setLabelAr4()

    /**
     * Set the value of [label_court4] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelCourt4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_court4 !== $v) {
            $this->label_court4 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_COURT4;
        }


        return $this;
    } // setLabelCourt4()

    /**
     * Set the value of [type4] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setType4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type4 !== $v) {
            $this->type4 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::TYPE4;
        }


        return $this;
    } // setType4()

    /**
     * Set the value of [obligatoire4] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setObligatoire4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligatoire4 !== $v) {
            $this->obligatoire4 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::OBLIGATOIRE4;
        }


        return $this;
    } // setObligatoire4()

    /**
     * Set the value of [actif4] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setActif4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->actif4 !== $v) {
            $this->actif4 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::ACTIF4;
        }


        return $this;
    } // setActif4()

    /**
     * Set the value of [visible4] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisible4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible4 !== $v) {
            $this->visible4 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE4;
        }


        return $this;
    } // setVisible4()

    /**
     * Set the value of [emplacement4] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setEmplacement4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->emplacement4 !== $v) {
            $this->emplacement4 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::EMPLACEMENT4;
        }


        return $this;
    } // setEmplacement4()

    /**
     * Set the value of [label_fr5] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelFr5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_fr5 !== $v) {
            $this->label_fr5 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_FR5;
        }


        return $this;
    } // setLabelFr5()

    /**
     * Set the value of [label_ar5] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelAr5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_ar5 !== $v) {
            $this->label_ar5 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_AR5;
        }


        return $this;
    } // setLabelAr5()

    /**
     * Set the value of [label_court5] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setLabelCourt5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->label_court5 !== $v) {
            $this->label_court5 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::LABEL_COURT5;
        }


        return $this;
    } // setLabelCourt5()

    /**
     * Set the value of [type5] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setType5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type5 !== $v) {
            $this->type5 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::TYPE5;
        }


        return $this;
    } // setType5()

    /**
     * Set the value of [obligatoire5] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setObligatoire5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligatoire5 !== $v) {
            $this->obligatoire5 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::OBLIGATOIRE5;
        }


        return $this;
    } // setObligatoire5()

    /**
     * Set the value of [actif5] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setActif5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->actif5 !== $v) {
            $this->actif5 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::ACTIF5;
        }


        return $this;
    } // setActif5()

    /**
     * Set the value of [visible5] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisible5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible5 !== $v) {
            $this->visible5 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE5;
        }


        return $this;
    } // setVisible5()

    /**
     * Set the value of [emplacement5] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setEmplacement5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->emplacement5 !== $v) {
            $this->emplacement5 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::EMPLACEMENT5;
        }


        return $this;
    } // setEmplacement5()

    /**
     * Set the value of [valeur_liste_fr_1] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setValeurListeFr1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_liste_fr_1 !== $v) {
            $this->valeur_liste_fr_1 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VALEUR_LISTE_FR_1;
        }


        return $this;
    } // setValeurListeFr1()

    /**
     * Set the value of [valeur_liste_ar_1] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setValeurListeAr1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_liste_ar_1 !== $v) {
            $this->valeur_liste_ar_1 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VALEUR_LISTE_AR_1;
        }


        return $this;
    } // setValeurListeAr1()

    /**
     * Set the value of [valeur_liste_fr_2] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setValeurListeFr2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_liste_fr_2 !== $v) {
            $this->valeur_liste_fr_2 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VALEUR_LISTE_FR_2;
        }


        return $this;
    } // setValeurListeFr2()

    /**
     * Set the value of [valeur_liste_ar_2] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setValeurListeAr2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_liste_ar_2 !== $v) {
            $this->valeur_liste_ar_2 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VALEUR_LISTE_AR_2;
        }


        return $this;
    } // setValeurListeAr2()

    /**
     * Set the value of [valeur_liste_fr_3] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setValeurListeFr3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_liste_fr_3 !== $v) {
            $this->valeur_liste_fr_3 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VALEUR_LISTE_FR_3;
        }


        return $this;
    } // setValeurListeFr3()

    /**
     * Set the value of [valeur_liste_ar_3] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setValeurListeAr3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_liste_ar_3 !== $v) {
            $this->valeur_liste_ar_3 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VALEUR_LISTE_AR_3;
        }


        return $this;
    } // setValeurListeAr3()

    /**
     * Set the value of [valeur_liste_fr_4] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setValeurListeFr4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_liste_fr_4 !== $v) {
            $this->valeur_liste_fr_4 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VALEUR_LISTE_FR_4;
        }


        return $this;
    } // setValeurListeFr4()

    /**
     * Set the value of [valeur_liste_ar_4] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setValeurListeAr4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_liste_ar_4 !== $v) {
            $this->valeur_liste_ar_4 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VALEUR_LISTE_AR_4;
        }


        return $this;
    } // setValeurListeAr4()

    /**
     * Set the value of [valeur_liste_fr_5] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setValeurListeFr5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_liste_fr_5 !== $v) {
            $this->valeur_liste_fr_5 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VALEUR_LISTE_FR_5;
        }


        return $this;
    } // setValeurListeFr5()

    /**
     * Set the value of [valeur_liste_ar_5] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setValeurListeAr5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_liste_ar_5 !== $v) {
            $this->valeur_liste_ar_5 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VALEUR_LISTE_AR_5;
        }


        return $this;
    } // setValeurListeAr5()

    /**
     * Set the value of [position1] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setPosition1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->position1 !== $v) {
            $this->position1 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::POSITION1;
        }


        return $this;
    } // setPosition1()

    /**
     * Set the value of [position2] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setPosition2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->position2 !== $v) {
            $this->position2 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::POSITION2;
        }


        return $this;
    } // setPosition2()

    /**
     * Set the value of [position3] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setPosition3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->position3 !== $v) {
            $this->position3 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::POSITION3;
        }


        return $this;
    } // setPosition3()

    /**
     * Set the value of [position4] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setPosition4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->position4 !== $v) {
            $this->position4 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::POSITION4;
        }


        return $this;
    } // setPosition4()

    /**
     * Set the value of [position5] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setPosition5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->position5 !== $v) {
            $this->position5 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::POSITION5;
        }


        return $this;
    } // setPosition5()

    /**
     * Set the value of [visible_bov1] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisibleBov1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_bov1 !== $v) {
            $this->visible_bov1 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE_BOV1;
        }


        return $this;
    } // setVisibleBov1()

    /**
     * Set the value of [visible_bov2] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisibleBov2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_bov2 !== $v) {
            $this->visible_bov2 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE_BOV2;
        }


        return $this;
    } // setVisibleBov2()

    /**
     * Set the value of [visible_bov3] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisibleBov3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_bov3 !== $v) {
            $this->visible_bov3 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE_BOV3;
        }


        return $this;
    } // setVisibleBov3()

    /**
     * Set the value of [visible_bov4] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisibleBov4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_bov4 !== $v) {
            $this->visible_bov4 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE_BOV4;
        }


        return $this;
    } // setVisibleBov4()

    /**
     * Set the value of [visible_bov5] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisibleBov5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_bov5 !== $v) {
            $this->visible_bov5 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE_BOV5;
        }


        return $this;
    } // setVisibleBov5()

    /**
     * Set the value of [visible_tableau1] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisibleTableau1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_tableau1 !== $v) {
            $this->visible_tableau1 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE_TABLEAU1;
        }


        return $this;
    } // setVisibleTableau1()

    /**
     * Set the value of [visible_tableau2] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisibleTableau2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_tableau2 !== $v) {
            $this->visible_tableau2 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE_TABLEAU2;
        }


        return $this;
    } // setVisibleTableau2()

    /**
     * Set the value of [visible_tableau3] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisibleTableau3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_tableau3 !== $v) {
            $this->visible_tableau3 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE_TABLEAU3;
        }


        return $this;
    } // setVisibleTableau3()

    /**
     * Set the value of [visible_tableau4] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisibleTableau4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_tableau4 !== $v) {
            $this->visible_tableau4 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE_TABLEAU4;
        }


        return $this;
    } // setVisibleTableau4()

    /**
     * Set the value of [visible_tableau5] column.
     * 
     * @param string $v new value
     * @return ChampSupplementaire The current object (for fluent API support)
     */
    public function setVisibleTableau5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_tableau5 !== $v) {
            $this->visible_tableau5 = $v;
            $this->modifiedColumns[] = ChampSupplementairePeer::VISIBLE_TABLEAU5;
        }


        return $this;
    } // setVisibleTableau5()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->obligatoire1 !== '0') {
                return false;
            }

            if ($this->actif1 !== '0') {
                return false;
            }

            if ($this->visible1 !== '0') {
                return false;
            }

            if ($this->obligatoire2 !== '0') {
                return false;
            }

            if ($this->actif2 !== '0') {
                return false;
            }

            if ($this->visible2 !== '0') {
                return false;
            }

            if ($this->obligatoire3 !== '0') {
                return false;
            }

            if ($this->actif3 !== '0') {
                return false;
            }

            if ($this->visible3 !== '0') {
                return false;
            }

            if ($this->obligatoire4 !== '0') {
                return false;
            }

            if ($this->actif4 !== '0') {
                return false;
            }

            if ($this->visible4 !== '0') {
                return false;
            }

            if ($this->obligatoire5 !== '0') {
                return false;
            }

            if ($this->actif5 !== '0') {
                return false;
            }

            if ($this->visible5 !== '0') {
                return false;
            }

            if ($this->visible_bov1 !== '0') {
                return false;
            }

            if ($this->visible_bov2 !== '0') {
                return false;
            }

            if ($this->visible_bov3 !== '0') {
                return false;
            }

            if ($this->visible_bov4 !== '0') {
                return false;
            }

            if ($this->visible_bov5 !== '0') {
                return false;
            }

            if ($this->visible_tableau1 !== '0') {
                return false;
            }

            if ($this->visible_tableau2 !== '0') {
                return false;
            }

            if ($this->visible_tableau3 !== '0') {
                return false;
            }

            if ($this->visible_tableau4 !== '0') {
                return false;
            }

            if ($this->visible_tableau5 !== '0') {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id_champ_supplementaire = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_organisme = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_theme = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_action = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->label_fr1 = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->label_ar1 = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->label_court1 = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->type1 = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->obligatoire1 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->actif1 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->visible1 = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->emplacement1 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->label_fr2 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->label_ar2 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->label_court2 = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->type2 = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->obligatoire2 = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->actif2 = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->visible2 = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->emplacement2 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->label_fr3 = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->label_ar3 = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->label_court3 = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->type3 = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->obligatoire3 = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->actif3 = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->visible3 = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->emplacement3 = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->label_fr4 = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->label_ar4 = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->label_court4 = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->type4 = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->obligatoire4 = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->actif4 = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->visible4 = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->emplacement4 = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->label_fr5 = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->label_ar5 = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->label_court5 = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->type5 = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->obligatoire5 = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->actif5 = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->visible5 = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->emplacement5 = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->valeur_liste_fr_1 = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->valeur_liste_ar_1 = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->valeur_liste_fr_2 = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->valeur_liste_ar_2 = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->valeur_liste_fr_3 = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->valeur_liste_ar_3 = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->valeur_liste_fr_4 = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->valeur_liste_ar_4 = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->valeur_liste_fr_5 = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->valeur_liste_ar_5 = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->position1 = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->position2 = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->position3 = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->position4 = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->position5 = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->visible_bov1 = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->visible_bov2 = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->visible_bov3 = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->visible_bov4 = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->visible_bov5 = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->visible_tableau1 = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->visible_tableau2 = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->visible_tableau3 = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->visible_tableau4 = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->visible_tableau5 = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 69; // 69 = ChampSupplementairePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ChampSupplementaire object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ChampSupplementairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ChampSupplementairePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ChampSupplementairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ChampSupplementaireQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ChampSupplementairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                ChampSupplementairePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE;
        if (null !== $this->id_champ_supplementaire) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_CHAMP_SUPPLEMENTAIRE`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::ID_ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ORGANISME`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::ID_THEME)) {
            $modifiedColumns[':p' . $index++]  = '`ID_THEME`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::ID_ACTION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ACTION`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_FR1)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_FR1`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_AR1)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_AR1`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_COURT1)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_COURT1`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::TYPE1)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE1`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::OBLIGATOIRE1)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATOIRE1`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::ACTIF1)) {
            $modifiedColumns[':p' . $index++]  = '`ACTIF1`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE1)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE1`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::EMPLACEMENT1)) {
            $modifiedColumns[':p' . $index++]  = '`EMPLACEMENT1`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_FR2)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_FR2`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_AR2)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_AR2`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_COURT2)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_COURT2`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::TYPE2)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE2`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::OBLIGATOIRE2)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATOIRE2`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::ACTIF2)) {
            $modifiedColumns[':p' . $index++]  = '`ACTIF2`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE2)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE2`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::EMPLACEMENT2)) {
            $modifiedColumns[':p' . $index++]  = '`EMPLACEMENT2`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_FR3)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_FR3`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_AR3)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_AR3`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_COURT3)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_COURT3`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::TYPE3)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE3`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::OBLIGATOIRE3)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATOIRE3`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::ACTIF3)) {
            $modifiedColumns[':p' . $index++]  = '`ACTIF3`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE3)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE3`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::EMPLACEMENT3)) {
            $modifiedColumns[':p' . $index++]  = '`EMPLACEMENT3`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_FR4)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_FR4`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_AR4)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_AR4`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_COURT4)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_COURT4`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::TYPE4)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE4`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::OBLIGATOIRE4)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATOIRE4`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::ACTIF4)) {
            $modifiedColumns[':p' . $index++]  = '`ACTIF4`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE4)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE4`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::EMPLACEMENT4)) {
            $modifiedColumns[':p' . $index++]  = '`EMPLACEMENT4`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_FR5)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_FR5`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_AR5)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_AR5`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_COURT5)) {
            $modifiedColumns[':p' . $index++]  = '`LABEL_COURT5`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::TYPE5)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE5`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::OBLIGATOIRE5)) {
            $modifiedColumns[':p' . $index++]  = '`OBLIGATOIRE5`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::ACTIF5)) {
            $modifiedColumns[':p' . $index++]  = '`ACTIF5`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE5)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE5`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::EMPLACEMENT5)) {
            $modifiedColumns[':p' . $index++]  = '`EMPLACEMENT5`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_FR_1)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_LISTE_FR_1`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_AR_1)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_LISTE_AR_1`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_FR_2)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_LISTE_FR_2`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_AR_2)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_LISTE_AR_2`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_FR_3)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_LISTE_FR_3`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_AR_3)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_LISTE_AR_3`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_FR_4)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_LISTE_FR_4`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_AR_4)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_LISTE_AR_4`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_FR_5)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_LISTE_FR_5`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_AR_5)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_LISTE_AR_5`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::POSITION1)) {
            $modifiedColumns[':p' . $index++]  = '`POSITION1`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::POSITION2)) {
            $modifiedColumns[':p' . $index++]  = '`POSITION2`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::POSITION3)) {
            $modifiedColumns[':p' . $index++]  = '`POSITION3`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::POSITION4)) {
            $modifiedColumns[':p' . $index++]  = '`POSITION4`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::POSITION5)) {
            $modifiedColumns[':p' . $index++]  = '`POSITION5`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_BOV1)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE_BOV1`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_BOV2)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE_BOV2`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_BOV3)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE_BOV3`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_BOV4)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE_BOV4`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_BOV5)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE_BOV5`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_TABLEAU1)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE_TABLEAU1`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_TABLEAU2)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE_TABLEAU2`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_TABLEAU3)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE_TABLEAU3`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_TABLEAU4)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE_TABLEAU4`';
        }
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_TABLEAU5)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE_TABLEAU5`';
        }

        $sql = sprintf(
            'INSERT INTO `champ_supplementaire` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_CHAMP_SUPPLEMENTAIRE`':						
                        $stmt->bindValue($identifier, $this->id_champ_supplementaire, PDO::PARAM_INT);
                        break;
                    case '`ID_ORGANISME`':						
                        $stmt->bindValue($identifier, $this->id_organisme, PDO::PARAM_INT);
                        break;
                    case '`ID_THEME`':						
                        $stmt->bindValue($identifier, $this->id_theme, PDO::PARAM_INT);
                        break;
                    case '`ID_ACTION`':						
                        $stmt->bindValue($identifier, $this->id_action, PDO::PARAM_INT);
                        break;
                    case '`LABEL_FR1`':						
                        $stmt->bindValue($identifier, $this->label_fr1, PDO::PARAM_STR);
                        break;
                    case '`LABEL_AR1`':						
                        $stmt->bindValue($identifier, $this->label_ar1, PDO::PARAM_STR);
                        break;
                    case '`LABEL_COURT1`':						
                        $stmt->bindValue($identifier, $this->label_court1, PDO::PARAM_STR);
                        break;
                    case '`TYPE1`':						
                        $stmt->bindValue($identifier, $this->type1, PDO::PARAM_INT);
                        break;
                    case '`OBLIGATOIRE1`':						
                        $stmt->bindValue($identifier, $this->obligatoire1, PDO::PARAM_STR);
                        break;
                    case '`ACTIF1`':						
                        $stmt->bindValue($identifier, $this->actif1, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE1`':						
                        $stmt->bindValue($identifier, $this->visible1, PDO::PARAM_STR);
                        break;
                    case '`EMPLACEMENT1`':						
                        $stmt->bindValue($identifier, $this->emplacement1, PDO::PARAM_STR);
                        break;
                    case '`LABEL_FR2`':						
                        $stmt->bindValue($identifier, $this->label_fr2, PDO::PARAM_STR);
                        break;
                    case '`LABEL_AR2`':						
                        $stmt->bindValue($identifier, $this->label_ar2, PDO::PARAM_STR);
                        break;
                    case '`LABEL_COURT2`':						
                        $stmt->bindValue($identifier, $this->label_court2, PDO::PARAM_STR);
                        break;
                    case '`TYPE2`':						
                        $stmt->bindValue($identifier, $this->type2, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATOIRE2`':						
                        $stmt->bindValue($identifier, $this->obligatoire2, PDO::PARAM_STR);
                        break;
                    case '`ACTIF2`':						
                        $stmt->bindValue($identifier, $this->actif2, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE2`':						
                        $stmt->bindValue($identifier, $this->visible2, PDO::PARAM_STR);
                        break;
                    case '`EMPLACEMENT2`':						
                        $stmt->bindValue($identifier, $this->emplacement2, PDO::PARAM_STR);
                        break;
                    case '`LABEL_FR3`':						
                        $stmt->bindValue($identifier, $this->label_fr3, PDO::PARAM_STR);
                        break;
                    case '`LABEL_AR3`':						
                        $stmt->bindValue($identifier, $this->label_ar3, PDO::PARAM_STR);
                        break;
                    case '`LABEL_COURT3`':						
                        $stmt->bindValue($identifier, $this->label_court3, PDO::PARAM_STR);
                        break;
                    case '`TYPE3`':						
                        $stmt->bindValue($identifier, $this->type3, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATOIRE3`':						
                        $stmt->bindValue($identifier, $this->obligatoire3, PDO::PARAM_STR);
                        break;
                    case '`ACTIF3`':						
                        $stmt->bindValue($identifier, $this->actif3, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE3`':						
                        $stmt->bindValue($identifier, $this->visible3, PDO::PARAM_STR);
                        break;
                    case '`EMPLACEMENT3`':						
                        $stmt->bindValue($identifier, $this->emplacement3, PDO::PARAM_STR);
                        break;
                    case '`LABEL_FR4`':						
                        $stmt->bindValue($identifier, $this->label_fr4, PDO::PARAM_STR);
                        break;
                    case '`LABEL_AR4`':						
                        $stmt->bindValue($identifier, $this->label_ar4, PDO::PARAM_STR);
                        break;
                    case '`LABEL_COURT4`':						
                        $stmt->bindValue($identifier, $this->label_court4, PDO::PARAM_STR);
                        break;
                    case '`TYPE4`':						
                        $stmt->bindValue($identifier, $this->type4, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATOIRE4`':						
                        $stmt->bindValue($identifier, $this->obligatoire4, PDO::PARAM_STR);
                        break;
                    case '`ACTIF4`':						
                        $stmt->bindValue($identifier, $this->actif4, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE4`':						
                        $stmt->bindValue($identifier, $this->visible4, PDO::PARAM_STR);
                        break;
                    case '`EMPLACEMENT4`':						
                        $stmt->bindValue($identifier, $this->emplacement4, PDO::PARAM_STR);
                        break;
                    case '`LABEL_FR5`':						
                        $stmt->bindValue($identifier, $this->label_fr5, PDO::PARAM_STR);
                        break;
                    case '`LABEL_AR5`':						
                        $stmt->bindValue($identifier, $this->label_ar5, PDO::PARAM_STR);
                        break;
                    case '`LABEL_COURT5`':						
                        $stmt->bindValue($identifier, $this->label_court5, PDO::PARAM_STR);
                        break;
                    case '`TYPE5`':						
                        $stmt->bindValue($identifier, $this->type5, PDO::PARAM_STR);
                        break;
                    case '`OBLIGATOIRE5`':						
                        $stmt->bindValue($identifier, $this->obligatoire5, PDO::PARAM_STR);
                        break;
                    case '`ACTIF5`':						
                        $stmt->bindValue($identifier, $this->actif5, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE5`':						
                        $stmt->bindValue($identifier, $this->visible5, PDO::PARAM_STR);
                        break;
                    case '`EMPLACEMENT5`':						
                        $stmt->bindValue($identifier, $this->emplacement5, PDO::PARAM_STR);
                        break;
                    case '`VALEUR_LISTE_FR_1`':						
                        $stmt->bindValue($identifier, $this->valeur_liste_fr_1, PDO::PARAM_STR);
                        break;
                    case '`VALEUR_LISTE_AR_1`':						
                        $stmt->bindValue($identifier, $this->valeur_liste_ar_1, PDO::PARAM_STR);
                        break;
                    case '`VALEUR_LISTE_FR_2`':						
                        $stmt->bindValue($identifier, $this->valeur_liste_fr_2, PDO::PARAM_STR);
                        break;
                    case '`VALEUR_LISTE_AR_2`':						
                        $stmt->bindValue($identifier, $this->valeur_liste_ar_2, PDO::PARAM_STR);
                        break;
                    case '`VALEUR_LISTE_FR_3`':						
                        $stmt->bindValue($identifier, $this->valeur_liste_fr_3, PDO::PARAM_STR);
                        break;
                    case '`VALEUR_LISTE_AR_3`':						
                        $stmt->bindValue($identifier, $this->valeur_liste_ar_3, PDO::PARAM_STR);
                        break;
                    case '`VALEUR_LISTE_FR_4`':						
                        $stmt->bindValue($identifier, $this->valeur_liste_fr_4, PDO::PARAM_STR);
                        break;
                    case '`VALEUR_LISTE_AR_4`':						
                        $stmt->bindValue($identifier, $this->valeur_liste_ar_4, PDO::PARAM_STR);
                        break;
                    case '`VALEUR_LISTE_FR_5`':						
                        $stmt->bindValue($identifier, $this->valeur_liste_fr_5, PDO::PARAM_STR);
                        break;
                    case '`VALEUR_LISTE_AR_5`':						
                        $stmt->bindValue($identifier, $this->valeur_liste_ar_5, PDO::PARAM_STR);
                        break;
                    case '`POSITION1`':						
                        $stmt->bindValue($identifier, $this->position1, PDO::PARAM_STR);
                        break;
                    case '`POSITION2`':						
                        $stmt->bindValue($identifier, $this->position2, PDO::PARAM_STR);
                        break;
                    case '`POSITION3`':						
                        $stmt->bindValue($identifier, $this->position3, PDO::PARAM_STR);
                        break;
                    case '`POSITION4`':						
                        $stmt->bindValue($identifier, $this->position4, PDO::PARAM_STR);
                        break;
                    case '`POSITION5`':						
                        $stmt->bindValue($identifier, $this->position5, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE_BOV1`':						
                        $stmt->bindValue($identifier, $this->visible_bov1, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE_BOV2`':						
                        $stmt->bindValue($identifier, $this->visible_bov2, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE_BOV3`':						
                        $stmt->bindValue($identifier, $this->visible_bov3, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE_BOV4`':						
                        $stmt->bindValue($identifier, $this->visible_bov4, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE_BOV5`':						
                        $stmt->bindValue($identifier, $this->visible_bov5, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE_TABLEAU1`':						
                        $stmt->bindValue($identifier, $this->visible_tableau1, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE_TABLEAU2`':						
                        $stmt->bindValue($identifier, $this->visible_tableau2, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE_TABLEAU3`':						
                        $stmt->bindValue($identifier, $this->visible_tableau3, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE_TABLEAU4`':						
                        $stmt->bindValue($identifier, $this->visible_tableau4, PDO::PARAM_STR);
                        break;
                    case '`VISIBLE_TABLEAU5`':						
                        $stmt->bindValue($identifier, $this->visible_tableau5, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdChampSupplementaire($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = ChampSupplementairePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ChampSupplementairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdChampSupplementaire();
                break;
            case 1:
                return $this->getIdOrganisme();
                break;
            case 2:
                return $this->getIdTheme();
                break;
            case 3:
                return $this->getIdAction();
                break;
            case 4:
                return $this->getLabelFr1();
                break;
            case 5:
                return $this->getLabelAr1();
                break;
            case 6:
                return $this->getLabelCourt1();
                break;
            case 7:
                return $this->getType1();
                break;
            case 8:
                return $this->getObligatoire1();
                break;
            case 9:
                return $this->getActif1();
                break;
            case 10:
                return $this->getVisible1();
                break;
            case 11:
                return $this->getEmplacement1();
                break;
            case 12:
                return $this->getLabelFr2();
                break;
            case 13:
                return $this->getLabelAr2();
                break;
            case 14:
                return $this->getLabelCourt2();
                break;
            case 15:
                return $this->getType2();
                break;
            case 16:
                return $this->getObligatoire2();
                break;
            case 17:
                return $this->getActif2();
                break;
            case 18:
                return $this->getVisible2();
                break;
            case 19:
                return $this->getEmplacement2();
                break;
            case 20:
                return $this->getLabelFr3();
                break;
            case 21:
                return $this->getLabelAr3();
                break;
            case 22:
                return $this->getLabelCourt3();
                break;
            case 23:
                return $this->getType3();
                break;
            case 24:
                return $this->getObligatoire3();
                break;
            case 25:
                return $this->getActif3();
                break;
            case 26:
                return $this->getVisible3();
                break;
            case 27:
                return $this->getEmplacement3();
                break;
            case 28:
                return $this->getLabelFr4();
                break;
            case 29:
                return $this->getLabelAr4();
                break;
            case 30:
                return $this->getLabelCourt4();
                break;
            case 31:
                return $this->getType4();
                break;
            case 32:
                return $this->getObligatoire4();
                break;
            case 33:
                return $this->getActif4();
                break;
            case 34:
                return $this->getVisible4();
                break;
            case 35:
                return $this->getEmplacement4();
                break;
            case 36:
                return $this->getLabelFr5();
                break;
            case 37:
                return $this->getLabelAr5();
                break;
            case 38:
                return $this->getLabelCourt5();
                break;
            case 39:
                return $this->getType5();
                break;
            case 40:
                return $this->getObligatoire5();
                break;
            case 41:
                return $this->getActif5();
                break;
            case 42:
                return $this->getVisible5();
                break;
            case 43:
                return $this->getEmplacement5();
                break;
            case 44:
                return $this->getValeurListeFr1();
                break;
            case 45:
                return $this->getValeurListeAr1();
                break;
            case 46:
                return $this->getValeurListeFr2();
                break;
            case 47:
                return $this->getValeurListeAr2();
                break;
            case 48:
                return $this->getValeurListeFr3();
                break;
            case 49:
                return $this->getValeurListeAr3();
                break;
            case 50:
                return $this->getValeurListeFr4();
                break;
            case 51:
                return $this->getValeurListeAr4();
                break;
            case 52:
                return $this->getValeurListeFr5();
                break;
            case 53:
                return $this->getValeurListeAr5();
                break;
            case 54:
                return $this->getPosition1();
                break;
            case 55:
                return $this->getPosition2();
                break;
            case 56:
                return $this->getPosition3();
                break;
            case 57:
                return $this->getPosition4();
                break;
            case 58:
                return $this->getPosition5();
                break;
            case 59:
                return $this->getVisibleBov1();
                break;
            case 60:
                return $this->getVisibleBov2();
                break;
            case 61:
                return $this->getVisibleBov3();
                break;
            case 62:
                return $this->getVisibleBov4();
                break;
            case 63:
                return $this->getVisibleBov5();
                break;
            case 64:
                return $this->getVisibleTableau1();
                break;
            case 65:
                return $this->getVisibleTableau2();
                break;
            case 66:
                return $this->getVisibleTableau3();
                break;
            case 67:
                return $this->getVisibleTableau4();
                break;
            case 68:
                return $this->getVisibleTableau5();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['ChampSupplementaire'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ChampSupplementaire'][$this->getPrimaryKey()] = true;
        $keys = ChampSupplementairePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdChampSupplementaire(),
            $keys[1] => $this->getIdOrganisme(),
            $keys[2] => $this->getIdTheme(),
            $keys[3] => $this->getIdAction(),
            $keys[4] => $this->getLabelFr1(),
            $keys[5] => $this->getLabelAr1(),
            $keys[6] => $this->getLabelCourt1(),
            $keys[7] => $this->getType1(),
            $keys[8] => $this->getObligatoire1(),
            $keys[9] => $this->getActif1(),
            $keys[10] => $this->getVisible1(),
            $keys[11] => $this->getEmplacement1(),
            $keys[12] => $this->getLabelFr2(),
            $keys[13] => $this->getLabelAr2(),
            $keys[14] => $this->getLabelCourt2(),
            $keys[15] => $this->getType2(),
            $keys[16] => $this->getObligatoire2(),
            $keys[17] => $this->getActif2(),
            $keys[18] => $this->getVisible2(),
            $keys[19] => $this->getEmplacement2(),
            $keys[20] => $this->getLabelFr3(),
            $keys[21] => $this->getLabelAr3(),
            $keys[22] => $this->getLabelCourt3(),
            $keys[23] => $this->getType3(),
            $keys[24] => $this->getObligatoire3(),
            $keys[25] => $this->getActif3(),
            $keys[26] => $this->getVisible3(),
            $keys[27] => $this->getEmplacement3(),
            $keys[28] => $this->getLabelFr4(),
            $keys[29] => $this->getLabelAr4(),
            $keys[30] => $this->getLabelCourt4(),
            $keys[31] => $this->getType4(),
            $keys[32] => $this->getObligatoire4(),
            $keys[33] => $this->getActif4(),
            $keys[34] => $this->getVisible4(),
            $keys[35] => $this->getEmplacement4(),
            $keys[36] => $this->getLabelFr5(),
            $keys[37] => $this->getLabelAr5(),
            $keys[38] => $this->getLabelCourt5(),
            $keys[39] => $this->getType5(),
            $keys[40] => $this->getObligatoire5(),
            $keys[41] => $this->getActif5(),
            $keys[42] => $this->getVisible5(),
            $keys[43] => $this->getEmplacement5(),
            $keys[44] => $this->getValeurListeFr1(),
            $keys[45] => $this->getValeurListeAr1(),
            $keys[46] => $this->getValeurListeFr2(),
            $keys[47] => $this->getValeurListeAr2(),
            $keys[48] => $this->getValeurListeFr3(),
            $keys[49] => $this->getValeurListeAr3(),
            $keys[50] => $this->getValeurListeFr4(),
            $keys[51] => $this->getValeurListeAr4(),
            $keys[52] => $this->getValeurListeFr5(),
            $keys[53] => $this->getValeurListeAr5(),
            $keys[54] => $this->getPosition1(),
            $keys[55] => $this->getPosition2(),
            $keys[56] => $this->getPosition3(),
            $keys[57] => $this->getPosition4(),
            $keys[58] => $this->getPosition5(),
            $keys[59] => $this->getVisibleBov1(),
            $keys[60] => $this->getVisibleBov2(),
            $keys[61] => $this->getVisibleBov3(),
            $keys[62] => $this->getVisibleBov4(),
            $keys[63] => $this->getVisibleBov5(),
            $keys[64] => $this->getVisibleTableau1(),
            $keys[65] => $this->getVisibleTableau2(),
            $keys[66] => $this->getVisibleTableau3(),
            $keys[67] => $this->getVisibleTableau4(),
            $keys[68] => $this->getVisibleTableau5(),
        );

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ChampSupplementairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdChampSupplementaire($value);
                break;
            case 1:
                $this->setIdOrganisme($value);
                break;
            case 2:
                $this->setIdTheme($value);
                break;
            case 3:
                $this->setIdAction($value);
                break;
            case 4:
                $this->setLabelFr1($value);
                break;
            case 5:
                $this->setLabelAr1($value);
                break;
            case 6:
                $this->setLabelCourt1($value);
                break;
            case 7:
                $this->setType1($value);
                break;
            case 8:
                $this->setObligatoire1($value);
                break;
            case 9:
                $this->setActif1($value);
                break;
            case 10:
                $this->setVisible1($value);
                break;
            case 11:
                $this->setEmplacement1($value);
                break;
            case 12:
                $this->setLabelFr2($value);
                break;
            case 13:
                $this->setLabelAr2($value);
                break;
            case 14:
                $this->setLabelCourt2($value);
                break;
            case 15:
                $this->setType2($value);
                break;
            case 16:
                $this->setObligatoire2($value);
                break;
            case 17:
                $this->setActif2($value);
                break;
            case 18:
                $this->setVisible2($value);
                break;
            case 19:
                $this->setEmplacement2($value);
                break;
            case 20:
                $this->setLabelFr3($value);
                break;
            case 21:
                $this->setLabelAr3($value);
                break;
            case 22:
                $this->setLabelCourt3($value);
                break;
            case 23:
                $this->setType3($value);
                break;
            case 24:
                $this->setObligatoire3($value);
                break;
            case 25:
                $this->setActif3($value);
                break;
            case 26:
                $this->setVisible3($value);
                break;
            case 27:
                $this->setEmplacement3($value);
                break;
            case 28:
                $this->setLabelFr4($value);
                break;
            case 29:
                $this->setLabelAr4($value);
                break;
            case 30:
                $this->setLabelCourt4($value);
                break;
            case 31:
                $this->setType4($value);
                break;
            case 32:
                $this->setObligatoire4($value);
                break;
            case 33:
                $this->setActif4($value);
                break;
            case 34:
                $this->setVisible4($value);
                break;
            case 35:
                $this->setEmplacement4($value);
                break;
            case 36:
                $this->setLabelFr5($value);
                break;
            case 37:
                $this->setLabelAr5($value);
                break;
            case 38:
                $this->setLabelCourt5($value);
                break;
            case 39:
                $this->setType5($value);
                break;
            case 40:
                $this->setObligatoire5($value);
                break;
            case 41:
                $this->setActif5($value);
                break;
            case 42:
                $this->setVisible5($value);
                break;
            case 43:
                $this->setEmplacement5($value);
                break;
            case 44:
                $this->setValeurListeFr1($value);
                break;
            case 45:
                $this->setValeurListeAr1($value);
                break;
            case 46:
                $this->setValeurListeFr2($value);
                break;
            case 47:
                $this->setValeurListeAr2($value);
                break;
            case 48:
                $this->setValeurListeFr3($value);
                break;
            case 49:
                $this->setValeurListeAr3($value);
                break;
            case 50:
                $this->setValeurListeFr4($value);
                break;
            case 51:
                $this->setValeurListeAr4($value);
                break;
            case 52:
                $this->setValeurListeFr5($value);
                break;
            case 53:
                $this->setValeurListeAr5($value);
                break;
            case 54:
                $this->setPosition1($value);
                break;
            case 55:
                $this->setPosition2($value);
                break;
            case 56:
                $this->setPosition3($value);
                break;
            case 57:
                $this->setPosition4($value);
                break;
            case 58:
                $this->setPosition5($value);
                break;
            case 59:
                $this->setVisibleBov1($value);
                break;
            case 60:
                $this->setVisibleBov2($value);
                break;
            case 61:
                $this->setVisibleBov3($value);
                break;
            case 62:
                $this->setVisibleBov4($value);
                break;
            case 63:
                $this->setVisibleBov5($value);
                break;
            case 64:
                $this->setVisibleTableau1($value);
                break;
            case 65:
                $this->setVisibleTableau2($value);
                break;
            case 66:
                $this->setVisibleTableau3($value);
                break;
            case 67:
                $this->setVisibleTableau4($value);
                break;
            case 68:
                $this->setVisibleTableau5($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = ChampSupplementairePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdChampSupplementaire($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdTheme($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdAction($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLabelFr1($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLabelAr1($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLabelCourt1($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setType1($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setObligatoire1($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setActif1($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setVisible1($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEmplacement1($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setLabelFr2($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setLabelAr2($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLabelCourt2($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setType2($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setObligatoire2($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setActif2($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setVisible2($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setEmplacement2($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setLabelFr3($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setLabelAr3($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setLabelCourt3($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setType3($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setObligatoire3($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setActif3($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setVisible3($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setEmplacement3($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setLabelFr4($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setLabelAr4($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setLabelCourt4($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setType4($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setObligatoire4($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setActif4($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setVisible4($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setEmplacement4($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setLabelFr5($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setLabelAr5($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setLabelCourt5($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setType5($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setObligatoire5($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setActif5($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setVisible5($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setEmplacement5($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setValeurListeFr1($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setValeurListeAr1($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setValeurListeFr2($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setValeurListeAr2($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setValeurListeFr3($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setValeurListeAr3($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setValeurListeFr4($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setValeurListeAr4($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setValeurListeFr5($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setValeurListeAr5($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setPosition1($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setPosition2($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setPosition3($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setPosition4($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setPosition5($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setVisibleBov1($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setVisibleBov2($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setVisibleBov3($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setVisibleBov4($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setVisibleBov5($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setVisibleTableau1($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setVisibleTableau2($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setVisibleTableau3($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setVisibleTableau4($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setVisibleTableau5($arr[$keys[68]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ChampSupplementairePeer::DATABASE_NAME);

        if ($this->isColumnModified(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE)) $criteria->add(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE, $this->id_champ_supplementaire);
        if ($this->isColumnModified(ChampSupplementairePeer::ID_ORGANISME)) $criteria->add(ChampSupplementairePeer::ID_ORGANISME, $this->id_organisme);
        if ($this->isColumnModified(ChampSupplementairePeer::ID_THEME)) $criteria->add(ChampSupplementairePeer::ID_THEME, $this->id_theme);
        if ($this->isColumnModified(ChampSupplementairePeer::ID_ACTION)) $criteria->add(ChampSupplementairePeer::ID_ACTION, $this->id_action);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_FR1)) $criteria->add(ChampSupplementairePeer::LABEL_FR1, $this->label_fr1);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_AR1)) $criteria->add(ChampSupplementairePeer::LABEL_AR1, $this->label_ar1);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_COURT1)) $criteria->add(ChampSupplementairePeer::LABEL_COURT1, $this->label_court1);
        if ($this->isColumnModified(ChampSupplementairePeer::TYPE1)) $criteria->add(ChampSupplementairePeer::TYPE1, $this->type1);
        if ($this->isColumnModified(ChampSupplementairePeer::OBLIGATOIRE1)) $criteria->add(ChampSupplementairePeer::OBLIGATOIRE1, $this->obligatoire1);
        if ($this->isColumnModified(ChampSupplementairePeer::ACTIF1)) $criteria->add(ChampSupplementairePeer::ACTIF1, $this->actif1);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE1)) $criteria->add(ChampSupplementairePeer::VISIBLE1, $this->visible1);
        if ($this->isColumnModified(ChampSupplementairePeer::EMPLACEMENT1)) $criteria->add(ChampSupplementairePeer::EMPLACEMENT1, $this->emplacement1);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_FR2)) $criteria->add(ChampSupplementairePeer::LABEL_FR2, $this->label_fr2);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_AR2)) $criteria->add(ChampSupplementairePeer::LABEL_AR2, $this->label_ar2);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_COURT2)) $criteria->add(ChampSupplementairePeer::LABEL_COURT2, $this->label_court2);
        if ($this->isColumnModified(ChampSupplementairePeer::TYPE2)) $criteria->add(ChampSupplementairePeer::TYPE2, $this->type2);
        if ($this->isColumnModified(ChampSupplementairePeer::OBLIGATOIRE2)) $criteria->add(ChampSupplementairePeer::OBLIGATOIRE2, $this->obligatoire2);
        if ($this->isColumnModified(ChampSupplementairePeer::ACTIF2)) $criteria->add(ChampSupplementairePeer::ACTIF2, $this->actif2);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE2)) $criteria->add(ChampSupplementairePeer::VISIBLE2, $this->visible2);
        if ($this->isColumnModified(ChampSupplementairePeer::EMPLACEMENT2)) $criteria->add(ChampSupplementairePeer::EMPLACEMENT2, $this->emplacement2);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_FR3)) $criteria->add(ChampSupplementairePeer::LABEL_FR3, $this->label_fr3);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_AR3)) $criteria->add(ChampSupplementairePeer::LABEL_AR3, $this->label_ar3);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_COURT3)) $criteria->add(ChampSupplementairePeer::LABEL_COURT3, $this->label_court3);
        if ($this->isColumnModified(ChampSupplementairePeer::TYPE3)) $criteria->add(ChampSupplementairePeer::TYPE3, $this->type3);
        if ($this->isColumnModified(ChampSupplementairePeer::OBLIGATOIRE3)) $criteria->add(ChampSupplementairePeer::OBLIGATOIRE3, $this->obligatoire3);
        if ($this->isColumnModified(ChampSupplementairePeer::ACTIF3)) $criteria->add(ChampSupplementairePeer::ACTIF3, $this->actif3);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE3)) $criteria->add(ChampSupplementairePeer::VISIBLE3, $this->visible3);
        if ($this->isColumnModified(ChampSupplementairePeer::EMPLACEMENT3)) $criteria->add(ChampSupplementairePeer::EMPLACEMENT3, $this->emplacement3);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_FR4)) $criteria->add(ChampSupplementairePeer::LABEL_FR4, $this->label_fr4);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_AR4)) $criteria->add(ChampSupplementairePeer::LABEL_AR4, $this->label_ar4);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_COURT4)) $criteria->add(ChampSupplementairePeer::LABEL_COURT4, $this->label_court4);
        if ($this->isColumnModified(ChampSupplementairePeer::TYPE4)) $criteria->add(ChampSupplementairePeer::TYPE4, $this->type4);
        if ($this->isColumnModified(ChampSupplementairePeer::OBLIGATOIRE4)) $criteria->add(ChampSupplementairePeer::OBLIGATOIRE4, $this->obligatoire4);
        if ($this->isColumnModified(ChampSupplementairePeer::ACTIF4)) $criteria->add(ChampSupplementairePeer::ACTIF4, $this->actif4);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE4)) $criteria->add(ChampSupplementairePeer::VISIBLE4, $this->visible4);
        if ($this->isColumnModified(ChampSupplementairePeer::EMPLACEMENT4)) $criteria->add(ChampSupplementairePeer::EMPLACEMENT4, $this->emplacement4);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_FR5)) $criteria->add(ChampSupplementairePeer::LABEL_FR5, $this->label_fr5);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_AR5)) $criteria->add(ChampSupplementairePeer::LABEL_AR5, $this->label_ar5);
        if ($this->isColumnModified(ChampSupplementairePeer::LABEL_COURT5)) $criteria->add(ChampSupplementairePeer::LABEL_COURT5, $this->label_court5);
        if ($this->isColumnModified(ChampSupplementairePeer::TYPE5)) $criteria->add(ChampSupplementairePeer::TYPE5, $this->type5);
        if ($this->isColumnModified(ChampSupplementairePeer::OBLIGATOIRE5)) $criteria->add(ChampSupplementairePeer::OBLIGATOIRE5, $this->obligatoire5);
        if ($this->isColumnModified(ChampSupplementairePeer::ACTIF5)) $criteria->add(ChampSupplementairePeer::ACTIF5, $this->actif5);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE5)) $criteria->add(ChampSupplementairePeer::VISIBLE5, $this->visible5);
        if ($this->isColumnModified(ChampSupplementairePeer::EMPLACEMENT5)) $criteria->add(ChampSupplementairePeer::EMPLACEMENT5, $this->emplacement5);
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_FR_1)) $criteria->add(ChampSupplementairePeer::VALEUR_LISTE_FR_1, $this->valeur_liste_fr_1);
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_AR_1)) $criteria->add(ChampSupplementairePeer::VALEUR_LISTE_AR_1, $this->valeur_liste_ar_1);
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_FR_2)) $criteria->add(ChampSupplementairePeer::VALEUR_LISTE_FR_2, $this->valeur_liste_fr_2);
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_AR_2)) $criteria->add(ChampSupplementairePeer::VALEUR_LISTE_AR_2, $this->valeur_liste_ar_2);
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_FR_3)) $criteria->add(ChampSupplementairePeer::VALEUR_LISTE_FR_3, $this->valeur_liste_fr_3);
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_AR_3)) $criteria->add(ChampSupplementairePeer::VALEUR_LISTE_AR_3, $this->valeur_liste_ar_3);
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_FR_4)) $criteria->add(ChampSupplementairePeer::VALEUR_LISTE_FR_4, $this->valeur_liste_fr_4);
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_AR_4)) $criteria->add(ChampSupplementairePeer::VALEUR_LISTE_AR_4, $this->valeur_liste_ar_4);
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_FR_5)) $criteria->add(ChampSupplementairePeer::VALEUR_LISTE_FR_5, $this->valeur_liste_fr_5);
        if ($this->isColumnModified(ChampSupplementairePeer::VALEUR_LISTE_AR_5)) $criteria->add(ChampSupplementairePeer::VALEUR_LISTE_AR_5, $this->valeur_liste_ar_5);
        if ($this->isColumnModified(ChampSupplementairePeer::POSITION1)) $criteria->add(ChampSupplementairePeer::POSITION1, $this->position1);
        if ($this->isColumnModified(ChampSupplementairePeer::POSITION2)) $criteria->add(ChampSupplementairePeer::POSITION2, $this->position2);
        if ($this->isColumnModified(ChampSupplementairePeer::POSITION3)) $criteria->add(ChampSupplementairePeer::POSITION3, $this->position3);
        if ($this->isColumnModified(ChampSupplementairePeer::POSITION4)) $criteria->add(ChampSupplementairePeer::POSITION4, $this->position4);
        if ($this->isColumnModified(ChampSupplementairePeer::POSITION5)) $criteria->add(ChampSupplementairePeer::POSITION5, $this->position5);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_BOV1)) $criteria->add(ChampSupplementairePeer::VISIBLE_BOV1, $this->visible_bov1);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_BOV2)) $criteria->add(ChampSupplementairePeer::VISIBLE_BOV2, $this->visible_bov2);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_BOV3)) $criteria->add(ChampSupplementairePeer::VISIBLE_BOV3, $this->visible_bov3);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_BOV4)) $criteria->add(ChampSupplementairePeer::VISIBLE_BOV4, $this->visible_bov4);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_BOV5)) $criteria->add(ChampSupplementairePeer::VISIBLE_BOV5, $this->visible_bov5);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_TABLEAU1)) $criteria->add(ChampSupplementairePeer::VISIBLE_TABLEAU1, $this->visible_tableau1);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_TABLEAU2)) $criteria->add(ChampSupplementairePeer::VISIBLE_TABLEAU2, $this->visible_tableau2);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_TABLEAU3)) $criteria->add(ChampSupplementairePeer::VISIBLE_TABLEAU3, $this->visible_tableau3);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_TABLEAU4)) $criteria->add(ChampSupplementairePeer::VISIBLE_TABLEAU4, $this->visible_tableau4);
        if ($this->isColumnModified(ChampSupplementairePeer::VISIBLE_TABLEAU5)) $criteria->add(ChampSupplementairePeer::VISIBLE_TABLEAU5, $this->visible_tableau5);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ChampSupplementairePeer::DATABASE_NAME);
        $criteria->add(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE, $this->id_champ_supplementaire);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdChampSupplementaire();
    }

    /**
     * Generic method to set the primary key (id_champ_supplementaire column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdChampSupplementaire($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdChampSupplementaire();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ChampSupplementaire (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdOrganisme($this->getIdOrganisme());
        $copyObj->setIdTheme($this->getIdTheme());
        $copyObj->setIdAction($this->getIdAction());
        $copyObj->setLabelFr1($this->getLabelFr1());
        $copyObj->setLabelAr1($this->getLabelAr1());
        $copyObj->setLabelCourt1($this->getLabelCourt1());
        $copyObj->setType1($this->getType1());
        $copyObj->setObligatoire1($this->getObligatoire1());
        $copyObj->setActif1($this->getActif1());
        $copyObj->setVisible1($this->getVisible1());
        $copyObj->setEmplacement1($this->getEmplacement1());
        $copyObj->setLabelFr2($this->getLabelFr2());
        $copyObj->setLabelAr2($this->getLabelAr2());
        $copyObj->setLabelCourt2($this->getLabelCourt2());
        $copyObj->setType2($this->getType2());
        $copyObj->setObligatoire2($this->getObligatoire2());
        $copyObj->setActif2($this->getActif2());
        $copyObj->setVisible2($this->getVisible2());
        $copyObj->setEmplacement2($this->getEmplacement2());
        $copyObj->setLabelFr3($this->getLabelFr3());
        $copyObj->setLabelAr3($this->getLabelAr3());
        $copyObj->setLabelCourt3($this->getLabelCourt3());
        $copyObj->setType3($this->getType3());
        $copyObj->setObligatoire3($this->getObligatoire3());
        $copyObj->setActif3($this->getActif3());
        $copyObj->setVisible3($this->getVisible3());
        $copyObj->setEmplacement3($this->getEmplacement3());
        $copyObj->setLabelFr4($this->getLabelFr4());
        $copyObj->setLabelAr4($this->getLabelAr4());
        $copyObj->setLabelCourt4($this->getLabelCourt4());
        $copyObj->setType4($this->getType4());
        $copyObj->setObligatoire4($this->getObligatoire4());
        $copyObj->setActif4($this->getActif4());
        $copyObj->setVisible4($this->getVisible4());
        $copyObj->setEmplacement4($this->getEmplacement4());
        $copyObj->setLabelFr5($this->getLabelFr5());
        $copyObj->setLabelAr5($this->getLabelAr5());
        $copyObj->setLabelCourt5($this->getLabelCourt5());
        $copyObj->setType5($this->getType5());
        $copyObj->setObligatoire5($this->getObligatoire5());
        $copyObj->setActif5($this->getActif5());
        $copyObj->setVisible5($this->getVisible5());
        $copyObj->setEmplacement5($this->getEmplacement5());
        $copyObj->setValeurListeFr1($this->getValeurListeFr1());
        $copyObj->setValeurListeAr1($this->getValeurListeAr1());
        $copyObj->setValeurListeFr2($this->getValeurListeFr2());
        $copyObj->setValeurListeAr2($this->getValeurListeAr2());
        $copyObj->setValeurListeFr3($this->getValeurListeFr3());
        $copyObj->setValeurListeAr3($this->getValeurListeAr3());
        $copyObj->setValeurListeFr4($this->getValeurListeFr4());
        $copyObj->setValeurListeAr4($this->getValeurListeAr4());
        $copyObj->setValeurListeFr5($this->getValeurListeFr5());
        $copyObj->setValeurListeAr5($this->getValeurListeAr5());
        $copyObj->setPosition1($this->getPosition1());
        $copyObj->setPosition2($this->getPosition2());
        $copyObj->setPosition3($this->getPosition3());
        $copyObj->setPosition4($this->getPosition4());
        $copyObj->setPosition5($this->getPosition5());
        $copyObj->setVisibleBov1($this->getVisibleBov1());
        $copyObj->setVisibleBov2($this->getVisibleBov2());
        $copyObj->setVisibleBov3($this->getVisibleBov3());
        $copyObj->setVisibleBov4($this->getVisibleBov4());
        $copyObj->setVisibleBov5($this->getVisibleBov5());
        $copyObj->setVisibleTableau1($this->getVisibleTableau1());
        $copyObj->setVisibleTableau2($this->getVisibleTableau2());
        $copyObj->setVisibleTableau3($this->getVisibleTableau3());
        $copyObj->setVisibleTableau4($this->getVisibleTableau4());
        $copyObj->setVisibleTableau5($this->getVisibleTableau5());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdChampSupplementaire(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return ChampSupplementaire Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return ChampSupplementairePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ChampSupplementairePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_champ_supplementaire = null;
        $this->id_organisme = null;
        $this->id_theme = null;
        $this->id_action = null;
        $this->label_fr1 = null;
        $this->label_ar1 = null;
        $this->label_court1 = null;
        $this->type1 = null;
        $this->obligatoire1 = null;
        $this->actif1 = null;
        $this->visible1 = null;
        $this->emplacement1 = null;
        $this->label_fr2 = null;
        $this->label_ar2 = null;
        $this->label_court2 = null;
        $this->type2 = null;
        $this->obligatoire2 = null;
        $this->actif2 = null;
        $this->visible2 = null;
        $this->emplacement2 = null;
        $this->label_fr3 = null;
        $this->label_ar3 = null;
        $this->label_court3 = null;
        $this->type3 = null;
        $this->obligatoire3 = null;
        $this->actif3 = null;
        $this->visible3 = null;
        $this->emplacement3 = null;
        $this->label_fr4 = null;
        $this->label_ar4 = null;
        $this->label_court4 = null;
        $this->type4 = null;
        $this->obligatoire4 = null;
        $this->actif4 = null;
        $this->visible4 = null;
        $this->emplacement4 = null;
        $this->label_fr5 = null;
        $this->label_ar5 = null;
        $this->label_court5 = null;
        $this->type5 = null;
        $this->obligatoire5 = null;
        $this->actif5 = null;
        $this->visible5 = null;
        $this->emplacement5 = null;
        $this->valeur_liste_fr_1 = null;
        $this->valeur_liste_ar_1 = null;
        $this->valeur_liste_fr_2 = null;
        $this->valeur_liste_ar_2 = null;
        $this->valeur_liste_fr_3 = null;
        $this->valeur_liste_ar_3 = null;
        $this->valeur_liste_fr_4 = null;
        $this->valeur_liste_ar_4 = null;
        $this->valeur_liste_fr_5 = null;
        $this->valeur_liste_ar_5 = null;
        $this->position1 = null;
        $this->position2 = null;
        $this->position3 = null;
        $this->position4 = null;
        $this->position5 = null;
        $this->visible_bov1 = null;
        $this->visible_bov2 = null;
        $this->visible_bov3 = null;
        $this->visible_bov4 = null;
        $this->visible_bov5 = null;
        $this->visible_tableau1 = null;
        $this->visible_tableau2 = null;
        $this->visible_tableau3 = null;
        $this->visible_tableau4 = null;
        $this->visible_tableau5 = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ChampSupplementairePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
