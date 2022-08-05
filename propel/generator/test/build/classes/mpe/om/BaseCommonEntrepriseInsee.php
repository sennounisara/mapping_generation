<?php


/**
 * Base class that represents a row from the 'EntrepriseInsee' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEntrepriseInsee extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonEntrepriseInseePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonEntrepriseInseePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the siren field.
     * @var        string
     */
    protected $siren;

    /**
     * The value for the raisonsociale field.
     * @var        string
     */
    protected $raisonsociale;

    /**
     * The value for the nbeta field.
     * @var        int
     */
    protected $nbeta;

    /**
     * The value for the etat field.
     * @var        string
     */
    protected $etat;

    /**
     * The value for the etatlib field.
     * @var        string
     */
    protected $etatlib;

    /**
     * The value for the etatdebdate field.
     * @var        string
     */
    protected $etatdebdate;

    /**
     * The value for the eff3112tr field.
     * @var        int
     */
    protected $eff3112tr;

    /**
     * The value for the eff3112trlib field.
     * @var        string
     */
    protected $eff3112trlib;

    /**
     * The value for the effan field.
     * @var        string
     */
    protected $effan;

    /**
     * The value for the apen field.
     * @var        string
     */
    protected $apen;

    /**
     * The value for the apenlib field.
     * @var        string
     */
    protected $apenlib;

    /**
     * The value for the cj field.
     * @var        string
     */
    protected $cj;

    /**
     * The value for the cjlib field.
     * @var        string
     */
    protected $cjlib;

    /**
     * The value for the indndc field.
     * @var        string
     */
    protected $indndc;

    /**
     * The value for the inddoublon field.
     * @var        string
     */
    protected $inddoublon;

    /**
     * The value for the indpurge field.
     * @var        string
     */
    protected $indpurge;

    /**
     * The value for the nicsiege field.
     * Note: this column has a database default value of: '00000'
     * @var        string
     */
    protected $nicsiege;

    /**
     * The value for the etatsiege field.
     * @var        string
     */
    protected $etatsiege;

    /**
     * The value for the etatsiegelib field.
     * @var        string
     */
    protected $etatsiegelib;

    /**
     * The value for the etatdebdatesiege field.
     * @var        string
     */
    protected $etatdebdatesiege;

    /**
     * The value for the eff3112trsiege field.
     * @var        int
     */
    protected $eff3112trsiege;

    /**
     * The value for the eff3112trsiegelib field.
     * @var        string
     */
    protected $eff3112trsiegelib;

    /**
     * The value for the effansiege field.
     * @var        string
     */
    protected $effansiege;

    /**
     * The value for the apetsiege field.
     * @var        string
     */
    protected $apetsiege;

    /**
     * The value for the apetsiegelib field.
     * @var        string
     */
    protected $apetsiegelib;

    /**
     * The value for the trtderdatesiege field.
     * @var        string
     */
    protected $trtderdatesiege;

    /**
     * The value for the adretvoienum field.
     * @var        string
     */
    protected $adretvoienum;

    /**
     * The value for the adretvoietype field.
     * @var        string
     */
    protected $adretvoietype;

    /**
     * The value for the adretvoielib field.
     * @var        string
     */
    protected $adretvoielib;

    /**
     * The value for the adretdepcom field.
     * @var        string
     */
    protected $adretdepcom;

    /**
     * The value for the adretcomlib field.
     * @var        string
     */
    protected $adretcomlib;

    /**
     * The value for the adretcodepost field.
     * @var        string
     */
    protected $adretcodepost;

    /**
     * The value for the adretpost1 field.
     * @var        string
     */
    protected $adretpost1;

    /**
     * The value for the adretpost2 field.
     * @var        string
     */
    protected $adretpost2;

    /**
     * The value for the adretpost3 field.
     * @var        string
     */
    protected $adretpost3;

    /**
     * The value for the nic field.
     * Note: this column has a database default value of: '00000'
     * @var        string
     */
    protected $nic;

    /**
     * The value for the etatet field.
     * @var        string
     */
    protected $etatet;

    /**
     * The value for the etatdebdateet field.
     * @var        string
     */
    protected $etatdebdateet;

    /**
     * The value for the catet field.
     * @var        string
     */
    protected $catet;

    /**
     * The value for the catetlib field.
     * @var        string
     */
    protected $catetlib;

    /**
     * The value for the eff3112tret field.
     * @var        string
     */
    protected $eff3112tret;

    /**
     * The value for the eff3112tretlib field.
     * @var        string
     */
    protected $eff3112tretlib;

    /**
     * The value for the effanet field.
     * @var        string
     */
    protected $effanet;

    /**
     * The value for the apet field.
     * @var        string
     */
    protected $apet;

    /**
     * The value for the apetlib field.
     * @var        string
     */
    protected $apetlib;

    /**
     * The value for the trtderdateet field.
     * @var        string
     */
    protected $trtderdateet;

    /**
     * The value for the etatetlib field.
     * @var        string
     */
    protected $etatetlib;

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
        $this->nicsiege = '00000';
        $this->nic = '00000';
    }

    /**
     * Initializes internal state of BaseCommonEntrepriseInsee object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id] column value.
     * 
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [siren] column value.
     * 
     * @return string
     */
    public function getSiren()
    {

        return $this->siren;
    }

    /**
     * Get the [raisonsociale] column value.
     * 
     * @return string
     */
    public function getRaisonsociale()
    {

        return $this->raisonsociale;
    }

    /**
     * Get the [nbeta] column value.
     * 
     * @return int
     */
    public function getNbeta()
    {

        return $this->nbeta;
    }

    /**
     * Get the [etat] column value.
     * 
     * @return string
     */
    public function getEtat()
    {

        return $this->etat;
    }

    /**
     * Get the [etatlib] column value.
     * 
     * @return string
     */
    public function getEtatlib()
    {

        return $this->etatlib;
    }

    /**
     * Get the [etatdebdate] column value.
     * 
     * @return string
     */
    public function getEtatdebdate()
    {

        return $this->etatdebdate;
    }

    /**
     * Get the [eff3112tr] column value.
     * 
     * @return int
     */
    public function getEff3112tr()
    {

        return $this->eff3112tr;
    }

    /**
     * Get the [eff3112trlib] column value.
     * 
     * @return string
     */
    public function getEff3112trlib()
    {

        return $this->eff3112trlib;
    }

    /**
     * Get the [effan] column value.
     * 
     * @return string
     */
    public function getEffan()
    {

        return $this->effan;
    }

    /**
     * Get the [apen] column value.
     * 
     * @return string
     */
    public function getApen()
    {

        return $this->apen;
    }

    /**
     * Get the [apenlib] column value.
     * 
     * @return string
     */
    public function getApenlib()
    {

        return $this->apenlib;
    }

    /**
     * Get the [cj] column value.
     * 
     * @return string
     */
    public function getCj()
    {

        return $this->cj;
    }

    /**
     * Get the [cjlib] column value.
     * 
     * @return string
     */
    public function getCjlib()
    {

        return $this->cjlib;
    }

    /**
     * Get the [indndc] column value.
     * 
     * @return string
     */
    public function getIndndc()
    {

        return $this->indndc;
    }

    /**
     * Get the [inddoublon] column value.
     * 
     * @return string
     */
    public function getInddoublon()
    {

        return $this->inddoublon;
    }

    /**
     * Get the [indpurge] column value.
     * 
     * @return string
     */
    public function getIndpurge()
    {

        return $this->indpurge;
    }

    /**
     * Get the [nicsiege] column value.
     * 
     * @return string
     */
    public function getNicsiege()
    {

        return $this->nicsiege;
    }

    /**
     * Get the [etatsiege] column value.
     * 
     * @return string
     */
    public function getEtatsiege()
    {

        return $this->etatsiege;
    }

    /**
     * Get the [etatsiegelib] column value.
     * 
     * @return string
     */
    public function getEtatsiegelib()
    {

        return $this->etatsiegelib;
    }

    /**
     * Get the [etatdebdatesiege] column value.
     * 
     * @return string
     */
    public function getEtatdebdatesiege()
    {

        return $this->etatdebdatesiege;
    }

    /**
     * Get the [eff3112trsiege] column value.
     * 
     * @return int
     */
    public function getEff3112trsiege()
    {

        return $this->eff3112trsiege;
    }

    /**
     * Get the [eff3112trsiegelib] column value.
     * 
     * @return string
     */
    public function getEff3112trsiegelib()
    {

        return $this->eff3112trsiegelib;
    }

    /**
     * Get the [effansiege] column value.
     * 
     * @return string
     */
    public function getEffansiege()
    {

        return $this->effansiege;
    }

    /**
     * Get the [apetsiege] column value.
     * 
     * @return string
     */
    public function getApetsiege()
    {

        return $this->apetsiege;
    }

    /**
     * Get the [apetsiegelib] column value.
     * 
     * @return string
     */
    public function getApetsiegelib()
    {

        return $this->apetsiegelib;
    }

    /**
     * Get the [trtderdatesiege] column value.
     * 
     * @return string
     */
    public function getTrtderdatesiege()
    {

        return $this->trtderdatesiege;
    }

    /**
     * Get the [adretvoienum] column value.
     * 
     * @return string
     */
    public function getAdretvoienum()
    {

        return $this->adretvoienum;
    }

    /**
     * Get the [adretvoietype] column value.
     * 
     * @return string
     */
    public function getAdretvoietype()
    {

        return $this->adretvoietype;
    }

    /**
     * Get the [adretvoielib] column value.
     * 
     * @return string
     */
    public function getAdretvoielib()
    {

        return $this->adretvoielib;
    }

    /**
     * Get the [adretdepcom] column value.
     * 
     * @return string
     */
    public function getAdretdepcom()
    {

        return $this->adretdepcom;
    }

    /**
     * Get the [adretcomlib] column value.
     * 
     * @return string
     */
    public function getAdretcomlib()
    {

        return $this->adretcomlib;
    }

    /**
     * Get the [adretcodepost] column value.
     * 
     * @return string
     */
    public function getAdretcodepost()
    {

        return $this->adretcodepost;
    }

    /**
     * Get the [adretpost1] column value.
     * 
     * @return string
     */
    public function getAdretpost1()
    {

        return $this->adretpost1;
    }

    /**
     * Get the [adretpost2] column value.
     * 
     * @return string
     */
    public function getAdretpost2()
    {

        return $this->adretpost2;
    }

    /**
     * Get the [adretpost3] column value.
     * 
     * @return string
     */
    public function getAdretpost3()
    {

        return $this->adretpost3;
    }

    /**
     * Get the [nic] column value.
     * 
     * @return string
     */
    public function getNic()
    {

        return $this->nic;
    }

    /**
     * Get the [etatet] column value.
     * 
     * @return string
     */
    public function getEtatet()
    {

        return $this->etatet;
    }

    /**
     * Get the [etatdebdateet] column value.
     * 
     * @return string
     */
    public function getEtatdebdateet()
    {

        return $this->etatdebdateet;
    }

    /**
     * Get the [catet] column value.
     * 
     * @return string
     */
    public function getCatet()
    {

        return $this->catet;
    }

    /**
     * Get the [catetlib] column value.
     * 
     * @return string
     */
    public function getCatetlib()
    {

        return $this->catetlib;
    }

    /**
     * Get the [eff3112tret] column value.
     * 
     * @return string
     */
    public function getEff3112tret()
    {

        return $this->eff3112tret;
    }

    /**
     * Get the [eff3112tretlib] column value.
     * 
     * @return string
     */
    public function getEff3112tretlib()
    {

        return $this->eff3112tretlib;
    }

    /**
     * Get the [effanet] column value.
     * 
     * @return string
     */
    public function getEffanet()
    {

        return $this->effanet;
    }

    /**
     * Get the [apet] column value.
     * 
     * @return string
     */
    public function getApet()
    {

        return $this->apet;
    }

    /**
     * Get the [apetlib] column value.
     * 
     * @return string
     */
    public function getApetlib()
    {

        return $this->apetlib;
    }

    /**
     * Get the [trtderdateet] column value.
     * 
     * @return string
     */
    public function getTrtderdateet()
    {

        return $this->trtderdateet;
    }

    /**
     * Get the [etatetlib] column value.
     * 
     * @return string
     */
    public function getEtatetlib()
    {

        return $this->etatetlib;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [siren] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setSiren($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siren !== $v) {
            $this->siren = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::SIREN;
        }


        return $this;
    } // setSiren()

    /**
     * Set the value of [raisonsociale] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setRaisonsociale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->raisonsociale !== $v) {
            $this->raisonsociale = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::RAISONSOCIALE;
        }


        return $this;
    } // setRaisonsociale()

    /**
     * Set the value of [nbeta] column.
     * 
     * @param int $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setNbeta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nbeta !== $v) {
            $this->nbeta = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::NBETA;
        }


        return $this;
    } // setNbeta()

    /**
     * Set the value of [etat] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEtat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etat !== $v) {
            $this->etat = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ETAT;
        }


        return $this;
    } // setEtat()

    /**
     * Set the value of [etatlib] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEtatlib($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etatlib !== $v) {
            $this->etatlib = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ETATLIB;
        }


        return $this;
    } // setEtatlib()

    /**
     * Set the value of [etatdebdate] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEtatdebdate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etatdebdate !== $v) {
            $this->etatdebdate = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ETATDEBDATE;
        }


        return $this;
    } // setEtatdebdate()

    /**
     * Set the value of [eff3112tr] column.
     * 
     * @param int $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEff3112tr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eff3112tr !== $v) {
            $this->eff3112tr = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::EFF3112TR;
        }


        return $this;
    } // setEff3112tr()

    /**
     * Set the value of [eff3112trlib] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEff3112trlib($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eff3112trlib !== $v) {
            $this->eff3112trlib = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::EFF3112TRLIB;
        }


        return $this;
    } // setEff3112trlib()

    /**
     * Set the value of [effan] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEffan($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->effan !== $v) {
            $this->effan = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::EFFAN;
        }


        return $this;
    } // setEffan()

    /**
     * Set the value of [apen] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setApen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->apen !== $v) {
            $this->apen = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::APEN;
        }


        return $this;
    } // setApen()

    /**
     * Set the value of [apenlib] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setApenlib($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->apenlib !== $v) {
            $this->apenlib = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::APENLIB;
        }


        return $this;
    } // setApenlib()

    /**
     * Set the value of [cj] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setCj($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cj !== $v) {
            $this->cj = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::CJ;
        }


        return $this;
    } // setCj()

    /**
     * Set the value of [cjlib] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setCjlib($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cjlib !== $v) {
            $this->cjlib = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::CJLIB;
        }


        return $this;
    } // setCjlib()

    /**
     * Set the value of [indndc] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setIndndc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->indndc !== $v) {
            $this->indndc = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::INDNDC;
        }


        return $this;
    } // setIndndc()

    /**
     * Set the value of [inddoublon] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setInddoublon($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->inddoublon !== $v) {
            $this->inddoublon = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::INDDOUBLON;
        }


        return $this;
    } // setInddoublon()

    /**
     * Set the value of [indpurge] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setIndpurge($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->indpurge !== $v) {
            $this->indpurge = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::INDPURGE;
        }


        return $this;
    } // setIndpurge()

    /**
     * Set the value of [nicsiege] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setNicsiege($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nicsiege !== $v) {
            $this->nicsiege = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::NICSIEGE;
        }


        return $this;
    } // setNicsiege()

    /**
     * Set the value of [etatsiege] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEtatsiege($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etatsiege !== $v) {
            $this->etatsiege = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ETATSIEGE;
        }


        return $this;
    } // setEtatsiege()

    /**
     * Set the value of [etatsiegelib] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEtatsiegelib($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etatsiegelib !== $v) {
            $this->etatsiegelib = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ETATSIEGELIB;
        }


        return $this;
    } // setEtatsiegelib()

    /**
     * Set the value of [etatdebdatesiege] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEtatdebdatesiege($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etatdebdatesiege !== $v) {
            $this->etatdebdatesiege = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ETATDEBDATESIEGE;
        }


        return $this;
    } // setEtatdebdatesiege()

    /**
     * Set the value of [eff3112trsiege] column.
     * 
     * @param int $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEff3112trsiege($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eff3112trsiege !== $v) {
            $this->eff3112trsiege = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::EFF3112TRSIEGE;
        }


        return $this;
    } // setEff3112trsiege()

    /**
     * Set the value of [eff3112trsiegelib] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEff3112trsiegelib($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eff3112trsiegelib !== $v) {
            $this->eff3112trsiegelib = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::EFF3112TRSIEGELIB;
        }


        return $this;
    } // setEff3112trsiegelib()

    /**
     * Set the value of [effansiege] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEffansiege($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->effansiege !== $v) {
            $this->effansiege = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::EFFANSIEGE;
        }


        return $this;
    } // setEffansiege()

    /**
     * Set the value of [apetsiege] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setApetsiege($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->apetsiege !== $v) {
            $this->apetsiege = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::APETSIEGE;
        }


        return $this;
    } // setApetsiege()

    /**
     * Set the value of [apetsiegelib] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setApetsiegelib($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->apetsiegelib !== $v) {
            $this->apetsiegelib = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::APETSIEGELIB;
        }


        return $this;
    } // setApetsiegelib()

    /**
     * Set the value of [trtderdatesiege] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setTrtderdatesiege($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->trtderdatesiege !== $v) {
            $this->trtderdatesiege = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::TRTDERDATESIEGE;
        }


        return $this;
    } // setTrtderdatesiege()

    /**
     * Set the value of [adretvoienum] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setAdretvoienum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adretvoienum !== $v) {
            $this->adretvoienum = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ADRETVOIENUM;
        }


        return $this;
    } // setAdretvoienum()

    /**
     * Set the value of [adretvoietype] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setAdretvoietype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adretvoietype !== $v) {
            $this->adretvoietype = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ADRETVOIETYPE;
        }


        return $this;
    } // setAdretvoietype()

    /**
     * Set the value of [adretvoielib] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setAdretvoielib($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adretvoielib !== $v) {
            $this->adretvoielib = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ADRETVOIELIB;
        }


        return $this;
    } // setAdretvoielib()

    /**
     * Set the value of [adretdepcom] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setAdretdepcom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adretdepcom !== $v) {
            $this->adretdepcom = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ADRETDEPCOM;
        }


        return $this;
    } // setAdretdepcom()

    /**
     * Set the value of [adretcomlib] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setAdretcomlib($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adretcomlib !== $v) {
            $this->adretcomlib = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ADRETCOMLIB;
        }


        return $this;
    } // setAdretcomlib()

    /**
     * Set the value of [adretcodepost] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setAdretcodepost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adretcodepost !== $v) {
            $this->adretcodepost = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ADRETCODEPOST;
        }


        return $this;
    } // setAdretcodepost()

    /**
     * Set the value of [adretpost1] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setAdretpost1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adretpost1 !== $v) {
            $this->adretpost1 = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ADRETPOST1;
        }


        return $this;
    } // setAdretpost1()

    /**
     * Set the value of [adretpost2] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setAdretpost2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adretpost2 !== $v) {
            $this->adretpost2 = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ADRETPOST2;
        }


        return $this;
    } // setAdretpost2()

    /**
     * Set the value of [adretpost3] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setAdretpost3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adretpost3 !== $v) {
            $this->adretpost3 = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ADRETPOST3;
        }


        return $this;
    } // setAdretpost3()

    /**
     * Set the value of [nic] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setNic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nic !== $v) {
            $this->nic = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::NIC;
        }


        return $this;
    } // setNic()

    /**
     * Set the value of [etatet] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEtatet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etatet !== $v) {
            $this->etatet = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ETATET;
        }


        return $this;
    } // setEtatet()

    /**
     * Set the value of [etatdebdateet] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEtatdebdateet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etatdebdateet !== $v) {
            $this->etatdebdateet = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ETATDEBDATEET;
        }


        return $this;
    } // setEtatdebdateet()

    /**
     * Set the value of [catet] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setCatet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->catet !== $v) {
            $this->catet = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::CATET;
        }


        return $this;
    } // setCatet()

    /**
     * Set the value of [catetlib] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setCatetlib($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->catetlib !== $v) {
            $this->catetlib = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::CATETLIB;
        }


        return $this;
    } // setCatetlib()

    /**
     * Set the value of [eff3112tret] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEff3112tret($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eff3112tret !== $v) {
            $this->eff3112tret = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::EFF3112TRET;
        }


        return $this;
    } // setEff3112tret()

    /**
     * Set the value of [eff3112tretlib] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEff3112tretlib($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eff3112tretlib !== $v) {
            $this->eff3112tretlib = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::EFF3112TRETLIB;
        }


        return $this;
    } // setEff3112tretlib()

    /**
     * Set the value of [effanet] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEffanet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->effanet !== $v) {
            $this->effanet = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::EFFANET;
        }


        return $this;
    } // setEffanet()

    /**
     * Set the value of [apet] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setApet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->apet !== $v) {
            $this->apet = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::APET;
        }


        return $this;
    } // setApet()

    /**
     * Set the value of [apetlib] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setApetlib($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->apetlib !== $v) {
            $this->apetlib = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::APETLIB;
        }


        return $this;
    } // setApetlib()

    /**
     * Set the value of [trtderdateet] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setTrtderdateet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->trtderdateet !== $v) {
            $this->trtderdateet = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::TRTDERDATEET;
        }


        return $this;
    } // setTrtderdateet()

    /**
     * Set the value of [etatetlib] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInsee The current object (for fluent API support)
     */
    public function setEtatetlib($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etatetlib !== $v) {
            $this->etatetlib = $v;
            $this->modifiedColumns[] = CommonEntrepriseInseePeer::ETATETLIB;
        }


        return $this;
    } // setEtatetlib()

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
            if ($this->nicsiege !== '00000') {
                return false;
            }

            if ($this->nic !== '00000') {
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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->siren = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->raisonsociale = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->nbeta = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->etat = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->etatlib = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->etatdebdate = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->eff3112tr = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->eff3112trlib = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->effan = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->apen = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->apenlib = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->cj = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->cjlib = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->indndc = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->inddoublon = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->indpurge = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->nicsiege = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->etatsiege = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->etatsiegelib = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->etatdebdatesiege = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->eff3112trsiege = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->eff3112trsiegelib = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->effansiege = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->apetsiege = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->apetsiegelib = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->trtderdatesiege = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->adretvoienum = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->adretvoietype = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->adretvoielib = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->adretdepcom = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->adretcomlib = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->adretcodepost = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->adretpost1 = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->adretpost2 = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->adretpost3 = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->nic = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->etatet = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->etatdebdateet = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->catet = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->catetlib = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->eff3112tret = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->eff3112tretlib = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->effanet = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->apet = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->apetlib = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->trtderdateet = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->etatetlib = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 48; // 48 = CommonEntrepriseInseePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonEntrepriseInsee object", $e);
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
            $con = Propel::getConnection(CommonEntrepriseInseePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonEntrepriseInseePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonEntrepriseInseePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonEntrepriseInseeQuery::create()
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
            $con = Propel::getConnection(CommonEntrepriseInseePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonEntrepriseInseePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonEntrepriseInseePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonEntrepriseInseePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::SIREN)) {
            $modifiedColumns[':p' . $index++]  = '`siren`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::RAISONSOCIALE)) {
            $modifiedColumns[':p' . $index++]  = '`raisonSociale`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::NBETA)) {
            $modifiedColumns[':p' . $index++]  = '`nbEtA`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETAT)) {
            $modifiedColumns[':p' . $index++]  = '`etat`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATLIB)) {
            $modifiedColumns[':p' . $index++]  = '`etatLib`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATDEBDATE)) {
            $modifiedColumns[':p' . $index++]  = '`etatDebDate`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFF3112TR)) {
            $modifiedColumns[':p' . $index++]  = '`eff3112Tr`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFF3112TRLIB)) {
            $modifiedColumns[':p' . $index++]  = '`eff3112TrLib`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFFAN)) {
            $modifiedColumns[':p' . $index++]  = '`effAn`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::APEN)) {
            $modifiedColumns[':p' . $index++]  = '`apen`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::APENLIB)) {
            $modifiedColumns[':p' . $index++]  = '`apenLib`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::CJ)) {
            $modifiedColumns[':p' . $index++]  = '`cj`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::CJLIB)) {
            $modifiedColumns[':p' . $index++]  = '`cjLib`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::INDNDC)) {
            $modifiedColumns[':p' . $index++]  = '`indNDC`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::INDDOUBLON)) {
            $modifiedColumns[':p' . $index++]  = '`indDoublon`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::INDPURGE)) {
            $modifiedColumns[':p' . $index++]  = '`indPurge`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::NICSIEGE)) {
            $modifiedColumns[':p' . $index++]  = '`nicSiege`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATSIEGE)) {
            $modifiedColumns[':p' . $index++]  = '`etatSiege`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATSIEGELIB)) {
            $modifiedColumns[':p' . $index++]  = '`etatSiegeLib`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATDEBDATESIEGE)) {
            $modifiedColumns[':p' . $index++]  = '`etatDebDateSiege`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFF3112TRSIEGE)) {
            $modifiedColumns[':p' . $index++]  = '`eff3112TrSiege`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFF3112TRSIEGELIB)) {
            $modifiedColumns[':p' . $index++]  = '`eff3112TrSiegeLib`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFFANSIEGE)) {
            $modifiedColumns[':p' . $index++]  = '`effAnSiege`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::APETSIEGE)) {
            $modifiedColumns[':p' . $index++]  = '`apetSiege`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::APETSIEGELIB)) {
            $modifiedColumns[':p' . $index++]  = '`apetSiegeLib`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::TRTDERDATESIEGE)) {
            $modifiedColumns[':p' . $index++]  = '`trtDerDateSiege`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETVOIENUM)) {
            $modifiedColumns[':p' . $index++]  = '`adrEtVoieNum`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETVOIETYPE)) {
            $modifiedColumns[':p' . $index++]  = '`adrEtVoieType`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETVOIELIB)) {
            $modifiedColumns[':p' . $index++]  = '`adrEtVoieLib`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETDEPCOM)) {
            $modifiedColumns[':p' . $index++]  = '`adrEtDepCom`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETCOMLIB)) {
            $modifiedColumns[':p' . $index++]  = '`adrEtComLib`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETCODEPOST)) {
            $modifiedColumns[':p' . $index++]  = '`adrEtCodePost`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETPOST1)) {
            $modifiedColumns[':p' . $index++]  = '`adrEtPost1`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETPOST2)) {
            $modifiedColumns[':p' . $index++]  = '`adrEtPost2`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETPOST3)) {
            $modifiedColumns[':p' . $index++]  = '`adrEtPost3`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::NIC)) {
            $modifiedColumns[':p' . $index++]  = '`nic`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATET)) {
            $modifiedColumns[':p' . $index++]  = '`etatEt`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATDEBDATEET)) {
            $modifiedColumns[':p' . $index++]  = '`etatDebDateEt`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::CATET)) {
            $modifiedColumns[':p' . $index++]  = '`catEt`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::CATETLIB)) {
            $modifiedColumns[':p' . $index++]  = '`catEtLib`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFF3112TRET)) {
            $modifiedColumns[':p' . $index++]  = '`eff3112TrEt`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFF3112TRETLIB)) {
            $modifiedColumns[':p' . $index++]  = '`eff3112TrEtLib`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFFANET)) {
            $modifiedColumns[':p' . $index++]  = '`effAnEt`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::APET)) {
            $modifiedColumns[':p' . $index++]  = '`apet`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::APETLIB)) {
            $modifiedColumns[':p' . $index++]  = '`apetLib`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::TRTDERDATEET)) {
            $modifiedColumns[':p' . $index++]  = '`trtDerDateEt`';
        }
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATETLIB)) {
            $modifiedColumns[':p' . $index++]  = '`etatEtLib`';
        }

        $sql = sprintf(
            'INSERT INTO `EntrepriseInsee` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`siren`':						
                        $stmt->bindValue($identifier, $this->siren, PDO::PARAM_STR);
                        break;
                    case '`raisonSociale`':						
                        $stmt->bindValue($identifier, $this->raisonsociale, PDO::PARAM_STR);
                        break;
                    case '`nbEtA`':						
                        $stmt->bindValue($identifier, $this->nbeta, PDO::PARAM_INT);
                        break;
                    case '`etat`':						
                        $stmt->bindValue($identifier, $this->etat, PDO::PARAM_STR);
                        break;
                    case '`etatLib`':						
                        $stmt->bindValue($identifier, $this->etatlib, PDO::PARAM_STR);
                        break;
                    case '`etatDebDate`':						
                        $stmt->bindValue($identifier, $this->etatdebdate, PDO::PARAM_STR);
                        break;
                    case '`eff3112Tr`':						
                        $stmt->bindValue($identifier, $this->eff3112tr, PDO::PARAM_INT);
                        break;
                    case '`eff3112TrLib`':						
                        $stmt->bindValue($identifier, $this->eff3112trlib, PDO::PARAM_STR);
                        break;
                    case '`effAn`':						
                        $stmt->bindValue($identifier, $this->effan, PDO::PARAM_STR);
                        break;
                    case '`apen`':						
                        $stmt->bindValue($identifier, $this->apen, PDO::PARAM_STR);
                        break;
                    case '`apenLib`':						
                        $stmt->bindValue($identifier, $this->apenlib, PDO::PARAM_STR);
                        break;
                    case '`cj`':						
                        $stmt->bindValue($identifier, $this->cj, PDO::PARAM_STR);
                        break;
                    case '`cjLib`':						
                        $stmt->bindValue($identifier, $this->cjlib, PDO::PARAM_STR);
                        break;
                    case '`indNDC`':						
                        $stmt->bindValue($identifier, $this->indndc, PDO::PARAM_STR);
                        break;
                    case '`indDoublon`':						
                        $stmt->bindValue($identifier, $this->inddoublon, PDO::PARAM_STR);
                        break;
                    case '`indPurge`':						
                        $stmt->bindValue($identifier, $this->indpurge, PDO::PARAM_STR);
                        break;
                    case '`nicSiege`':						
                        $stmt->bindValue($identifier, $this->nicsiege, PDO::PARAM_STR);
                        break;
                    case '`etatSiege`':						
                        $stmt->bindValue($identifier, $this->etatsiege, PDO::PARAM_STR);
                        break;
                    case '`etatSiegeLib`':						
                        $stmt->bindValue($identifier, $this->etatsiegelib, PDO::PARAM_STR);
                        break;
                    case '`etatDebDateSiege`':						
                        $stmt->bindValue($identifier, $this->etatdebdatesiege, PDO::PARAM_STR);
                        break;
                    case '`eff3112TrSiege`':						
                        $stmt->bindValue($identifier, $this->eff3112trsiege, PDO::PARAM_INT);
                        break;
                    case '`eff3112TrSiegeLib`':						
                        $stmt->bindValue($identifier, $this->eff3112trsiegelib, PDO::PARAM_STR);
                        break;
                    case '`effAnSiege`':						
                        $stmt->bindValue($identifier, $this->effansiege, PDO::PARAM_STR);
                        break;
                    case '`apetSiege`':						
                        $stmt->bindValue($identifier, $this->apetsiege, PDO::PARAM_STR);
                        break;
                    case '`apetSiegeLib`':						
                        $stmt->bindValue($identifier, $this->apetsiegelib, PDO::PARAM_STR);
                        break;
                    case '`trtDerDateSiege`':						
                        $stmt->bindValue($identifier, $this->trtderdatesiege, PDO::PARAM_STR);
                        break;
                    case '`adrEtVoieNum`':						
                        $stmt->bindValue($identifier, $this->adretvoienum, PDO::PARAM_STR);
                        break;
                    case '`adrEtVoieType`':						
                        $stmt->bindValue($identifier, $this->adretvoietype, PDO::PARAM_STR);
                        break;
                    case '`adrEtVoieLib`':						
                        $stmt->bindValue($identifier, $this->adretvoielib, PDO::PARAM_STR);
                        break;
                    case '`adrEtDepCom`':						
                        $stmt->bindValue($identifier, $this->adretdepcom, PDO::PARAM_STR);
                        break;
                    case '`adrEtComLib`':						
                        $stmt->bindValue($identifier, $this->adretcomlib, PDO::PARAM_STR);
                        break;
                    case '`adrEtCodePost`':						
                        $stmt->bindValue($identifier, $this->adretcodepost, PDO::PARAM_STR);
                        break;
                    case '`adrEtPost1`':						
                        $stmt->bindValue($identifier, $this->adretpost1, PDO::PARAM_STR);
                        break;
                    case '`adrEtPost2`':						
                        $stmt->bindValue($identifier, $this->adretpost2, PDO::PARAM_STR);
                        break;
                    case '`adrEtPost3`':						
                        $stmt->bindValue($identifier, $this->adretpost3, PDO::PARAM_STR);
                        break;
                    case '`nic`':						
                        $stmt->bindValue($identifier, $this->nic, PDO::PARAM_STR);
                        break;
                    case '`etatEt`':						
                        $stmt->bindValue($identifier, $this->etatet, PDO::PARAM_STR);
                        break;
                    case '`etatDebDateEt`':						
                        $stmt->bindValue($identifier, $this->etatdebdateet, PDO::PARAM_STR);
                        break;
                    case '`catEt`':						
                        $stmt->bindValue($identifier, $this->catet, PDO::PARAM_STR);
                        break;
                    case '`catEtLib`':						
                        $stmt->bindValue($identifier, $this->catetlib, PDO::PARAM_STR);
                        break;
                    case '`eff3112TrEt`':						
                        $stmt->bindValue($identifier, $this->eff3112tret, PDO::PARAM_STR);
                        break;
                    case '`eff3112TrEtLib`':						
                        $stmt->bindValue($identifier, $this->eff3112tretlib, PDO::PARAM_STR);
                        break;
                    case '`effAnEt`':						
                        $stmt->bindValue($identifier, $this->effanet, PDO::PARAM_STR);
                        break;
                    case '`apet`':						
                        $stmt->bindValue($identifier, $this->apet, PDO::PARAM_STR);
                        break;
                    case '`apetLib`':						
                        $stmt->bindValue($identifier, $this->apetlib, PDO::PARAM_STR);
                        break;
                    case '`trtDerDateEt`':						
                        $stmt->bindValue($identifier, $this->trtderdateet, PDO::PARAM_STR);
                        break;
                    case '`etatEtLib`':						
                        $stmt->bindValue($identifier, $this->etatetlib, PDO::PARAM_STR);
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
        $this->setId($pk);

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


            if (($retval = CommonEntrepriseInseePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonEntrepriseInseePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getId();
                break;
            case 1:
                return $this->getSiren();
                break;
            case 2:
                return $this->getRaisonsociale();
                break;
            case 3:
                return $this->getNbeta();
                break;
            case 4:
                return $this->getEtat();
                break;
            case 5:
                return $this->getEtatlib();
                break;
            case 6:
                return $this->getEtatdebdate();
                break;
            case 7:
                return $this->getEff3112tr();
                break;
            case 8:
                return $this->getEff3112trlib();
                break;
            case 9:
                return $this->getEffan();
                break;
            case 10:
                return $this->getApen();
                break;
            case 11:
                return $this->getApenlib();
                break;
            case 12:
                return $this->getCj();
                break;
            case 13:
                return $this->getCjlib();
                break;
            case 14:
                return $this->getIndndc();
                break;
            case 15:
                return $this->getInddoublon();
                break;
            case 16:
                return $this->getIndpurge();
                break;
            case 17:
                return $this->getNicsiege();
                break;
            case 18:
                return $this->getEtatsiege();
                break;
            case 19:
                return $this->getEtatsiegelib();
                break;
            case 20:
                return $this->getEtatdebdatesiege();
                break;
            case 21:
                return $this->getEff3112trsiege();
                break;
            case 22:
                return $this->getEff3112trsiegelib();
                break;
            case 23:
                return $this->getEffansiege();
                break;
            case 24:
                return $this->getApetsiege();
                break;
            case 25:
                return $this->getApetsiegelib();
                break;
            case 26:
                return $this->getTrtderdatesiege();
                break;
            case 27:
                return $this->getAdretvoienum();
                break;
            case 28:
                return $this->getAdretvoietype();
                break;
            case 29:
                return $this->getAdretvoielib();
                break;
            case 30:
                return $this->getAdretdepcom();
                break;
            case 31:
                return $this->getAdretcomlib();
                break;
            case 32:
                return $this->getAdretcodepost();
                break;
            case 33:
                return $this->getAdretpost1();
                break;
            case 34:
                return $this->getAdretpost2();
                break;
            case 35:
                return $this->getAdretpost3();
                break;
            case 36:
                return $this->getNic();
                break;
            case 37:
                return $this->getEtatet();
                break;
            case 38:
                return $this->getEtatdebdateet();
                break;
            case 39:
                return $this->getCatet();
                break;
            case 40:
                return $this->getCatetlib();
                break;
            case 41:
                return $this->getEff3112tret();
                break;
            case 42:
                return $this->getEff3112tretlib();
                break;
            case 43:
                return $this->getEffanet();
                break;
            case 44:
                return $this->getApet();
                break;
            case 45:
                return $this->getApetlib();
                break;
            case 46:
                return $this->getTrtderdateet();
                break;
            case 47:
                return $this->getEtatetlib();
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
        if (isset($alreadyDumpedObjects['CommonEntrepriseInsee'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonEntrepriseInsee'][$this->getPrimaryKey()] = true;
        $keys = CommonEntrepriseInseePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getSiren(),
            $keys[2] => $this->getRaisonsociale(),
            $keys[3] => $this->getNbeta(),
            $keys[4] => $this->getEtat(),
            $keys[5] => $this->getEtatlib(),
            $keys[6] => $this->getEtatdebdate(),
            $keys[7] => $this->getEff3112tr(),
            $keys[8] => $this->getEff3112trlib(),
            $keys[9] => $this->getEffan(),
            $keys[10] => $this->getApen(),
            $keys[11] => $this->getApenlib(),
            $keys[12] => $this->getCj(),
            $keys[13] => $this->getCjlib(),
            $keys[14] => $this->getIndndc(),
            $keys[15] => $this->getInddoublon(),
            $keys[16] => $this->getIndpurge(),
            $keys[17] => $this->getNicsiege(),
            $keys[18] => $this->getEtatsiege(),
            $keys[19] => $this->getEtatsiegelib(),
            $keys[20] => $this->getEtatdebdatesiege(),
            $keys[21] => $this->getEff3112trsiege(),
            $keys[22] => $this->getEff3112trsiegelib(),
            $keys[23] => $this->getEffansiege(),
            $keys[24] => $this->getApetsiege(),
            $keys[25] => $this->getApetsiegelib(),
            $keys[26] => $this->getTrtderdatesiege(),
            $keys[27] => $this->getAdretvoienum(),
            $keys[28] => $this->getAdretvoietype(),
            $keys[29] => $this->getAdretvoielib(),
            $keys[30] => $this->getAdretdepcom(),
            $keys[31] => $this->getAdretcomlib(),
            $keys[32] => $this->getAdretcodepost(),
            $keys[33] => $this->getAdretpost1(),
            $keys[34] => $this->getAdretpost2(),
            $keys[35] => $this->getAdretpost3(),
            $keys[36] => $this->getNic(),
            $keys[37] => $this->getEtatet(),
            $keys[38] => $this->getEtatdebdateet(),
            $keys[39] => $this->getCatet(),
            $keys[40] => $this->getCatetlib(),
            $keys[41] => $this->getEff3112tret(),
            $keys[42] => $this->getEff3112tretlib(),
            $keys[43] => $this->getEffanet(),
            $keys[44] => $this->getApet(),
            $keys[45] => $this->getApetlib(),
            $keys[46] => $this->getTrtderdateet(),
            $keys[47] => $this->getEtatetlib(),
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
        $pos = CommonEntrepriseInseePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setId($value);
                break;
            case 1:
                $this->setSiren($value);
                break;
            case 2:
                $this->setRaisonsociale($value);
                break;
            case 3:
                $this->setNbeta($value);
                break;
            case 4:
                $this->setEtat($value);
                break;
            case 5:
                $this->setEtatlib($value);
                break;
            case 6:
                $this->setEtatdebdate($value);
                break;
            case 7:
                $this->setEff3112tr($value);
                break;
            case 8:
                $this->setEff3112trlib($value);
                break;
            case 9:
                $this->setEffan($value);
                break;
            case 10:
                $this->setApen($value);
                break;
            case 11:
                $this->setApenlib($value);
                break;
            case 12:
                $this->setCj($value);
                break;
            case 13:
                $this->setCjlib($value);
                break;
            case 14:
                $this->setIndndc($value);
                break;
            case 15:
                $this->setInddoublon($value);
                break;
            case 16:
                $this->setIndpurge($value);
                break;
            case 17:
                $this->setNicsiege($value);
                break;
            case 18:
                $this->setEtatsiege($value);
                break;
            case 19:
                $this->setEtatsiegelib($value);
                break;
            case 20:
                $this->setEtatdebdatesiege($value);
                break;
            case 21:
                $this->setEff3112trsiege($value);
                break;
            case 22:
                $this->setEff3112trsiegelib($value);
                break;
            case 23:
                $this->setEffansiege($value);
                break;
            case 24:
                $this->setApetsiege($value);
                break;
            case 25:
                $this->setApetsiegelib($value);
                break;
            case 26:
                $this->setTrtderdatesiege($value);
                break;
            case 27:
                $this->setAdretvoienum($value);
                break;
            case 28:
                $this->setAdretvoietype($value);
                break;
            case 29:
                $this->setAdretvoielib($value);
                break;
            case 30:
                $this->setAdretdepcom($value);
                break;
            case 31:
                $this->setAdretcomlib($value);
                break;
            case 32:
                $this->setAdretcodepost($value);
                break;
            case 33:
                $this->setAdretpost1($value);
                break;
            case 34:
                $this->setAdretpost2($value);
                break;
            case 35:
                $this->setAdretpost3($value);
                break;
            case 36:
                $this->setNic($value);
                break;
            case 37:
                $this->setEtatet($value);
                break;
            case 38:
                $this->setEtatdebdateet($value);
                break;
            case 39:
                $this->setCatet($value);
                break;
            case 40:
                $this->setCatetlib($value);
                break;
            case 41:
                $this->setEff3112tret($value);
                break;
            case 42:
                $this->setEff3112tretlib($value);
                break;
            case 43:
                $this->setEffanet($value);
                break;
            case 44:
                $this->setApet($value);
                break;
            case 45:
                $this->setApetlib($value);
                break;
            case 46:
                $this->setTrtderdateet($value);
                break;
            case 47:
                $this->setEtatetlib($value);
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
        $keys = CommonEntrepriseInseePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSiren($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRaisonsociale($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNbeta($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEtat($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEtatlib($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEtatdebdate($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEff3112tr($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEff3112trlib($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEffan($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setApen($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setApenlib($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCj($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCjlib($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIndndc($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setInddoublon($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIndpurge($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setNicsiege($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setEtatsiege($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setEtatsiegelib($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setEtatdebdatesiege($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setEff3112trsiege($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setEff3112trsiegelib($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setEffansiege($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setApetsiege($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setApetsiegelib($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setTrtderdatesiege($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setAdretvoienum($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setAdretvoietype($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setAdretvoielib($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setAdretdepcom($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setAdretcomlib($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setAdretcodepost($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setAdretpost1($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setAdretpost2($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setAdretpost3($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setNic($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setEtatet($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setEtatdebdateet($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setCatet($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setCatetlib($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setEff3112tret($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setEff3112tretlib($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setEffanet($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setApet($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setApetlib($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setTrtderdateet($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setEtatetlib($arr[$keys[47]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonEntrepriseInseePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonEntrepriseInseePeer::ID)) $criteria->add(CommonEntrepriseInseePeer::ID, $this->id);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::SIREN)) $criteria->add(CommonEntrepriseInseePeer::SIREN, $this->siren);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::RAISONSOCIALE)) $criteria->add(CommonEntrepriseInseePeer::RAISONSOCIALE, $this->raisonsociale);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::NBETA)) $criteria->add(CommonEntrepriseInseePeer::NBETA, $this->nbeta);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETAT)) $criteria->add(CommonEntrepriseInseePeer::ETAT, $this->etat);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATLIB)) $criteria->add(CommonEntrepriseInseePeer::ETATLIB, $this->etatlib);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATDEBDATE)) $criteria->add(CommonEntrepriseInseePeer::ETATDEBDATE, $this->etatdebdate);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFF3112TR)) $criteria->add(CommonEntrepriseInseePeer::EFF3112TR, $this->eff3112tr);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFF3112TRLIB)) $criteria->add(CommonEntrepriseInseePeer::EFF3112TRLIB, $this->eff3112trlib);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFFAN)) $criteria->add(CommonEntrepriseInseePeer::EFFAN, $this->effan);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::APEN)) $criteria->add(CommonEntrepriseInseePeer::APEN, $this->apen);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::APENLIB)) $criteria->add(CommonEntrepriseInseePeer::APENLIB, $this->apenlib);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::CJ)) $criteria->add(CommonEntrepriseInseePeer::CJ, $this->cj);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::CJLIB)) $criteria->add(CommonEntrepriseInseePeer::CJLIB, $this->cjlib);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::INDNDC)) $criteria->add(CommonEntrepriseInseePeer::INDNDC, $this->indndc);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::INDDOUBLON)) $criteria->add(CommonEntrepriseInseePeer::INDDOUBLON, $this->inddoublon);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::INDPURGE)) $criteria->add(CommonEntrepriseInseePeer::INDPURGE, $this->indpurge);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::NICSIEGE)) $criteria->add(CommonEntrepriseInseePeer::NICSIEGE, $this->nicsiege);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATSIEGE)) $criteria->add(CommonEntrepriseInseePeer::ETATSIEGE, $this->etatsiege);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATSIEGELIB)) $criteria->add(CommonEntrepriseInseePeer::ETATSIEGELIB, $this->etatsiegelib);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATDEBDATESIEGE)) $criteria->add(CommonEntrepriseInseePeer::ETATDEBDATESIEGE, $this->etatdebdatesiege);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFF3112TRSIEGE)) $criteria->add(CommonEntrepriseInseePeer::EFF3112TRSIEGE, $this->eff3112trsiege);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFF3112TRSIEGELIB)) $criteria->add(CommonEntrepriseInseePeer::EFF3112TRSIEGELIB, $this->eff3112trsiegelib);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFFANSIEGE)) $criteria->add(CommonEntrepriseInseePeer::EFFANSIEGE, $this->effansiege);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::APETSIEGE)) $criteria->add(CommonEntrepriseInseePeer::APETSIEGE, $this->apetsiege);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::APETSIEGELIB)) $criteria->add(CommonEntrepriseInseePeer::APETSIEGELIB, $this->apetsiegelib);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::TRTDERDATESIEGE)) $criteria->add(CommonEntrepriseInseePeer::TRTDERDATESIEGE, $this->trtderdatesiege);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETVOIENUM)) $criteria->add(CommonEntrepriseInseePeer::ADRETVOIENUM, $this->adretvoienum);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETVOIETYPE)) $criteria->add(CommonEntrepriseInseePeer::ADRETVOIETYPE, $this->adretvoietype);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETVOIELIB)) $criteria->add(CommonEntrepriseInseePeer::ADRETVOIELIB, $this->adretvoielib);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETDEPCOM)) $criteria->add(CommonEntrepriseInseePeer::ADRETDEPCOM, $this->adretdepcom);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETCOMLIB)) $criteria->add(CommonEntrepriseInseePeer::ADRETCOMLIB, $this->adretcomlib);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETCODEPOST)) $criteria->add(CommonEntrepriseInseePeer::ADRETCODEPOST, $this->adretcodepost);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETPOST1)) $criteria->add(CommonEntrepriseInseePeer::ADRETPOST1, $this->adretpost1);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETPOST2)) $criteria->add(CommonEntrepriseInseePeer::ADRETPOST2, $this->adretpost2);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ADRETPOST3)) $criteria->add(CommonEntrepriseInseePeer::ADRETPOST3, $this->adretpost3);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::NIC)) $criteria->add(CommonEntrepriseInseePeer::NIC, $this->nic);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATET)) $criteria->add(CommonEntrepriseInseePeer::ETATET, $this->etatet);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATDEBDATEET)) $criteria->add(CommonEntrepriseInseePeer::ETATDEBDATEET, $this->etatdebdateet);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::CATET)) $criteria->add(CommonEntrepriseInseePeer::CATET, $this->catet);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::CATETLIB)) $criteria->add(CommonEntrepriseInseePeer::CATETLIB, $this->catetlib);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFF3112TRET)) $criteria->add(CommonEntrepriseInseePeer::EFF3112TRET, $this->eff3112tret);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFF3112TRETLIB)) $criteria->add(CommonEntrepriseInseePeer::EFF3112TRETLIB, $this->eff3112tretlib);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::EFFANET)) $criteria->add(CommonEntrepriseInseePeer::EFFANET, $this->effanet);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::APET)) $criteria->add(CommonEntrepriseInseePeer::APET, $this->apet);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::APETLIB)) $criteria->add(CommonEntrepriseInseePeer::APETLIB, $this->apetlib);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::TRTDERDATEET)) $criteria->add(CommonEntrepriseInseePeer::TRTDERDATEET, $this->trtderdateet);
        if ($this->isColumnModified(CommonEntrepriseInseePeer::ETATETLIB)) $criteria->add(CommonEntrepriseInseePeer::ETATETLIB, $this->etatetlib);

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
        $criteria = new Criteria(CommonEntrepriseInseePeer::DATABASE_NAME);
        $criteria->add(CommonEntrepriseInseePeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonEntrepriseInsee (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSiren($this->getSiren());
        $copyObj->setRaisonsociale($this->getRaisonsociale());
        $copyObj->setNbeta($this->getNbeta());
        $copyObj->setEtat($this->getEtat());
        $copyObj->setEtatlib($this->getEtatlib());
        $copyObj->setEtatdebdate($this->getEtatdebdate());
        $copyObj->setEff3112tr($this->getEff3112tr());
        $copyObj->setEff3112trlib($this->getEff3112trlib());
        $copyObj->setEffan($this->getEffan());
        $copyObj->setApen($this->getApen());
        $copyObj->setApenlib($this->getApenlib());
        $copyObj->setCj($this->getCj());
        $copyObj->setCjlib($this->getCjlib());
        $copyObj->setIndndc($this->getIndndc());
        $copyObj->setInddoublon($this->getInddoublon());
        $copyObj->setIndpurge($this->getIndpurge());
        $copyObj->setNicsiege($this->getNicsiege());
        $copyObj->setEtatsiege($this->getEtatsiege());
        $copyObj->setEtatsiegelib($this->getEtatsiegelib());
        $copyObj->setEtatdebdatesiege($this->getEtatdebdatesiege());
        $copyObj->setEff3112trsiege($this->getEff3112trsiege());
        $copyObj->setEff3112trsiegelib($this->getEff3112trsiegelib());
        $copyObj->setEffansiege($this->getEffansiege());
        $copyObj->setApetsiege($this->getApetsiege());
        $copyObj->setApetsiegelib($this->getApetsiegelib());
        $copyObj->setTrtderdatesiege($this->getTrtderdatesiege());
        $copyObj->setAdretvoienum($this->getAdretvoienum());
        $copyObj->setAdretvoietype($this->getAdretvoietype());
        $copyObj->setAdretvoielib($this->getAdretvoielib());
        $copyObj->setAdretdepcom($this->getAdretdepcom());
        $copyObj->setAdretcomlib($this->getAdretcomlib());
        $copyObj->setAdretcodepost($this->getAdretcodepost());
        $copyObj->setAdretpost1($this->getAdretpost1());
        $copyObj->setAdretpost2($this->getAdretpost2());
        $copyObj->setAdretpost3($this->getAdretpost3());
        $copyObj->setNic($this->getNic());
        $copyObj->setEtatet($this->getEtatet());
        $copyObj->setEtatdebdateet($this->getEtatdebdateet());
        $copyObj->setCatet($this->getCatet());
        $copyObj->setCatetlib($this->getCatetlib());
        $copyObj->setEff3112tret($this->getEff3112tret());
        $copyObj->setEff3112tretlib($this->getEff3112tretlib());
        $copyObj->setEffanet($this->getEffanet());
        $copyObj->setApet($this->getApet());
        $copyObj->setApetlib($this->getApetlib());
        $copyObj->setTrtderdateet($this->getTrtderdateet());
        $copyObj->setEtatetlib($this->getEtatetlib());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonEntrepriseInsee Clone of current object.
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
     * @return CommonEntrepriseInseePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonEntrepriseInseePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->siren = null;
        $this->raisonsociale = null;
        $this->nbeta = null;
        $this->etat = null;
        $this->etatlib = null;
        $this->etatdebdate = null;
        $this->eff3112tr = null;
        $this->eff3112trlib = null;
        $this->effan = null;
        $this->apen = null;
        $this->apenlib = null;
        $this->cj = null;
        $this->cjlib = null;
        $this->indndc = null;
        $this->inddoublon = null;
        $this->indpurge = null;
        $this->nicsiege = null;
        $this->etatsiege = null;
        $this->etatsiegelib = null;
        $this->etatdebdatesiege = null;
        $this->eff3112trsiege = null;
        $this->eff3112trsiegelib = null;
        $this->effansiege = null;
        $this->apetsiege = null;
        $this->apetsiegelib = null;
        $this->trtderdatesiege = null;
        $this->adretvoienum = null;
        $this->adretvoietype = null;
        $this->adretvoielib = null;
        $this->adretdepcom = null;
        $this->adretcomlib = null;
        $this->adretcodepost = null;
        $this->adretpost1 = null;
        $this->adretpost2 = null;
        $this->adretpost3 = null;
        $this->nic = null;
        $this->etatet = null;
        $this->etatdebdateet = null;
        $this->catet = null;
        $this->catetlib = null;
        $this->eff3112tret = null;
        $this->eff3112tretlib = null;
        $this->effanet = null;
        $this->apet = null;
        $this->apetlib = null;
        $this->trtderdateet = null;
        $this->etatetlib = null;
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
        return (string) $this->exportTo(CommonEntrepriseInseePeer::DEFAULT_STRING_FORMAT);
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
