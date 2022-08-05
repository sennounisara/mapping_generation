<?php


/**
 * Base class that represents a row from the 'agent_banquier' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAgentBanquier extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonAgentBanquierPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonAgentBanquierPeer
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
     * The value for the username field.
     * @var        string
     */
    protected $username;

    /**
     * The value for the username_canonical field.
     * @var        string
     */
    protected $username_canonical;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the email_canonical field.
     * @var        string
     */
    protected $email_canonical;

    /**
     * The value for the enabled field.
     * @var        boolean
     */
    protected $enabled;

    /**
     * The value for the salt field.
     * @var        string
     */
    protected $salt;

    /**
     * The value for the password field.
     * @var        string
     */
    protected $password;

    /**
     * The value for the last_login field.
     * @var        string
     */
    protected $last_login;

    /**
     * The value for the confirmation_token field.
     * @var        string
     */
    protected $confirmation_token;

    /**
     * The value for the password_requested_at field.
     * @var        string
     */
    protected $password_requested_at;

    /**
     * The value for the roles field.
     * @var        string
     */
    protected $roles;

    /**
     * The value for the id_banque field.
     * @var        int
     */
    protected $id_banque;

    /**
     * The value for the id_profil field.
     * @var        int
     */
    protected $id_profil;

    /**
     * The value for the created_at field.
     * @var        string
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     * @var        string
     */
    protected $updated_at;

    /**
     * The value for the code_ville field.
     * @var        string
     */
    protected $code_ville;

    /**
     * The value for the code_agence field.
     * @var        string
     */
    protected $code_agence;

    /**
     * The value for the id_ref_ville field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_ref_ville;

    /**
     * The value for the nom field.
     * @var        string
     */
    protected $nom;

    /**
     * The value for the prenom field.
     * @var        string
     */
    protected $prenom;

    /**
     * The value for the telephone field.
     * @var        string
     */
    protected $telephone;

    /**
     * The value for the deleted field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $deleted;

    /**
     * The value for the notification field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $notification;

    /**
     * @var        CommonCautionProfil
     */
    protected $aCommonCautionProfil;

    /**
     * @var        PropelObjectCollection|CommonCautionDemande[] Collection to store aggregation of CommonCautionDemande objects.
     */
    protected $collCommonCautionDemandesRelatedByIdAgentBanquierRejet;
    protected $collCommonCautionDemandesRelatedByIdAgentBanquierRejetPartial;

    /**
     * @var        PropelObjectCollection|CommonCautionDemande[] Collection to store aggregation of CommonCautionDemande objects.
     */
    protected $collCommonCautionDemandesRelatedByIdAgentBanquierValidation;
    protected $collCommonCautionDemandesRelatedByIdAgentBanquierValidationPartial;

    /**
     * @var        PropelObjectCollection|CommonCautionDemande[] Collection to store aggregation of CommonCautionDemande objects.
     */
    protected $collCommonCautionDemandesRelatedByIdAgentPriseEnCharge;
    protected $collCommonCautionDemandesRelatedByIdAgentPriseEnChargePartial;

    /**
     * @var        PropelObjectCollection|CommonCautionDemande[] Collection to store aggregation of CommonCautionDemande objects.
     */
    protected $collCommonCautionDemandesRelatedByIdSignataire1;
    protected $collCommonCautionDemandesRelatedByIdSignataire1Partial;

    /**
     * @var        PropelObjectCollection|CommonCautionDemande[] Collection to store aggregation of CommonCautionDemande objects.
     */
    protected $collCommonCautionDemandesRelatedByIdSignataire2;
    protected $collCommonCautionDemandesRelatedByIdSignataire2Partial;

    /**
     * @var        PropelObjectCollection|CommonCautionSignataireDemande[] Collection to store aggregation of CommonCautionSignataireDemande objects.
     */
    protected $collCommonCautionSignataireDemandes;
    protected $collCommonCautionSignataireDemandesPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonCautionDemandesRelatedByIdAgentBanquierRejetScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonCautionDemandesRelatedByIdAgentBanquierValidationScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonCautionDemandesRelatedByIdAgentPriseEnChargeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonCautionDemandesRelatedByIdSignataire1ScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonCautionDemandesRelatedByIdSignataire2ScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonCautionSignataireDemandesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->id_ref_ville = 0;
        $this->deleted = false;
        $this->notification = '1';
    }

    /**
     * Initializes internal state of BaseCommonAgentBanquier object.
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
     * Get the [username] column value.
     * 
     * @return string
     */
    public function getUsername()
    {

        return $this->username;
    }

    /**
     * Get the [username_canonical] column value.
     * 
     * @return string
     */
    public function getUsernameCanonical()
    {

        return $this->username_canonical;
    }

    /**
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [email_canonical] column value.
     * 
     * @return string
     */
    public function getEmailCanonical()
    {

        return $this->email_canonical;
    }

    /**
     * Get the [enabled] column value.
     * 
     * @return boolean
     */
    public function getEnabled()
    {

        return $this->enabled;
    }

    /**
     * Get the [salt] column value.
     * 
     * @return string
     */
    public function getSalt()
    {

        return $this->salt;
    }

    /**
     * Get the [password] column value.
     * 
     * @return string
     */
    public function getPassword()
    {

        return $this->password;
    }

    /**
     * Get the [optionally formatted] temporal [last_login] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLastLogin($format = 'Y-m-d H:i:s')
    {
        if ($this->last_login === null) {
            return null;
        }

        if ($this->last_login === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->last_login);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->last_login, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);
        
    }

    /**
     * Get the [confirmation_token] column value.
     * 
     * @return string
     */
    public function getConfirmationToken()
    {

        return $this->confirmation_token;
    }

    /**
     * Get the [optionally formatted] temporal [password_requested_at] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPasswordRequestedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->password_requested_at === null) {
            return null;
        }

        if ($this->password_requested_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->password_requested_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->password_requested_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);
        
    }

    /**
     * Get the [roles] column value.
     * 
     * @return string
     */
    public function getRoles()
    {

        return $this->roles;
    }

    /**
     * Get the [id_banque] column value.
     * 
     * @return int
     */
    public function getIdBanque()
    {

        return $this->id_banque;
    }

    /**
     * Get the [id_profil] column value.
     * 
     * @return int
     */
    public function getIdProfil()
    {

        return $this->id_profil;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->created_at === null) {
            return null;
        }

        if ($this->created_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->created_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);
        
    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->updated_at === null) {
            return null;
        }

        if ($this->updated_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->updated_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);
        
    }

    /**
     * Get the [code_ville] column value.
     * 
     * @return string
     */
    public function getCodeVille()
    {

        return $this->code_ville;
    }

    /**
     * Get the [code_agence] column value.
     * 
     * @return string
     */
    public function getCodeAgence()
    {

        return $this->code_agence;
    }

    /**
     * Get the [id_ref_ville] column value.
     * 
     * @return int
     */
    public function getIdRefVille()
    {

        return $this->id_ref_ville;
    }

    /**
     * Get the [nom] column value.
     * 
     * @return string
     */
    public function getNom()
    {

        return $this->nom;
    }

    /**
     * Get the [prenom] column value.
     * 
     * @return string
     */
    public function getPrenom()
    {

        return $this->prenom;
    }

    /**
     * Get the [telephone] column value.
     * 
     * @return string
     */
    public function getTelephone()
    {

        return $this->telephone;
    }

    /**
     * Get the [deleted] column value.
     * 
     * @return boolean
     */
    public function getDeleted()
    {

        return $this->deleted;
    }

    /**
     * Get the [notification] column value.
     * 
     * @return string
     */
    public function getNotification()
    {

        return $this->notification;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [username] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setUsername($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->username !== $v) {
            $this->username = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::USERNAME;
        }


        return $this;
    } // setUsername()

    /**
     * Set the value of [username_canonical] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setUsernameCanonical($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->username_canonical !== $v) {
            $this->username_canonical = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::USERNAME_CANONICAL;
        }


        return $this;
    } // setUsernameCanonical()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [email_canonical] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setEmailCanonical($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email_canonical !== $v) {
            $this->email_canonical = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::EMAIL_CANONICAL;
        }


        return $this;
    } // setEmailCanonical()

    /**
     * Sets the value of the [enabled] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setEnabled($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->enabled !== $v) {
            $this->enabled = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::ENABLED;
        }


        return $this;
    } // setEnabled()

    /**
     * Set the value of [salt] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setSalt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->salt !== $v) {
            $this->salt = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::SALT;
        }


        return $this;
    } // setSalt()

    /**
     * Set the value of [password] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setPassword($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->password !== $v) {
            $this->password = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::PASSWORD;
        }


        return $this;
    } // setPassword()

    /**
     * Sets the value of [last_login] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setLastLogin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->last_login !== null || $dt !== null) {
            $currentDateAsString = ($this->last_login !== null && $tmpDt = new DateTime($this->last_login)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->last_login = $newDateAsString;
                $this->modifiedColumns[] = CommonAgentBanquierPeer::LAST_LOGIN;
            }
        } // if either are not null


        return $this;
    } // setLastLogin()

    /**
     * Set the value of [confirmation_token] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setConfirmationToken($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->confirmation_token !== $v) {
            $this->confirmation_token = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::CONFIRMATION_TOKEN;
        }


        return $this;
    } // setConfirmationToken()

    /**
     * Sets the value of [password_requested_at] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setPasswordRequestedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->password_requested_at !== null || $dt !== null) {
            $currentDateAsString = ($this->password_requested_at !== null && $tmpDt = new DateTime($this->password_requested_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->password_requested_at = $newDateAsString;
                $this->modifiedColumns[] = CommonAgentBanquierPeer::PASSWORD_REQUESTED_AT;
            }
        } // if either are not null


        return $this;
    } // setPasswordRequestedAt()

    /**
     * Set the value of [roles] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setRoles($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->roles !== $v) {
            $this->roles = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::ROLES;
        }


        return $this;
    } // setRoles()

    /**
     * Set the value of [id_banque] column.
     * 
     * @param int $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setIdBanque($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_banque !== $v) {
            $this->id_banque = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::ID_BANQUE;
        }


        return $this;
    } // setIdBanque()

    /**
     * Set the value of [id_profil] column.
     * 
     * @param int $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setIdProfil($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_profil !== $v) {
            $this->id_profil = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::ID_PROFIL;
        }

        if ($this->aCommonCautionProfil !== null && $this->aCommonCautionProfil->getId() !== $v) {
            $this->aCommonCautionProfil = null;
        }


        return $this;
    } // setIdProfil()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = CommonAgentBanquierPeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = CommonAgentBanquierPeer::UPDATED_AT;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

    /**
     * Set the value of [code_ville] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setCodeVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_ville !== $v) {
            $this->code_ville = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::CODE_VILLE;
        }


        return $this;
    } // setCodeVille()

    /**
     * Set the value of [code_agence] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setCodeAgence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_agence !== $v) {
            $this->code_agence = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::CODE_AGENCE;
        }


        return $this;
    } // setCodeAgence()

    /**
     * Set the value of [id_ref_ville] column.
     * 
     * @param int $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setIdRefVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ref_ville !== $v) {
            $this->id_ref_ville = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::ID_REF_VILLE;
        }


        return $this;
    } // setIdRefVille()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [prenom] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom !== $v) {
            $this->prenom = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::PRENOM;
        }


        return $this;
    } // setPrenom()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Sets the value of the [deleted] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setDeleted($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->deleted !== $v) {
            $this->deleted = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::DELETED;
        }


        return $this;
    } // setDeleted()

    /**
     * Set the value of [notification] column.
     * 
     * @param string $v new value
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setNotification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->notification !== $v) {
            $this->notification = $v;
            $this->modifiedColumns[] = CommonAgentBanquierPeer::NOTIFICATION;
        }


        return $this;
    } // setNotification()

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
            if ($this->id_ref_ville !== 0) {
                return false;
            }

            if ($this->deleted !== false) {
                return false;
            }

            if ($this->notification !== '1') {
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
            $this->username = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->username_canonical = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->email = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->email_canonical = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->enabled = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->salt = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->password = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->last_login = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->confirmation_token = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->password_requested_at = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->roles = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->id_banque = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->id_profil = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->created_at = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->updated_at = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->code_ville = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->code_agence = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->id_ref_ville = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->nom = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->prenom = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->telephone = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->deleted = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
            $this->notification = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 24; // 24 = CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonAgentBanquier object", $e);
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

        if ($this->aCommonCautionProfil !== null && $this->id_profil !== $this->aCommonCautionProfil->getId()) {
            $this->aCommonCautionProfil = null;
        }
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
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonAgentBanquierPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonCautionProfil = null;
            $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet = null;

            $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation = null;

            $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge = null;

            $this->collCommonCautionDemandesRelatedByIdSignataire1 = null;

            $this->collCommonCautionDemandesRelatedByIdSignataire2 = null;

            $this->collCommonCautionSignataireDemandes = null;

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
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonAgentBanquierQuery::create()
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
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonAgentBanquierPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCommonCautionProfil !== null) {
                if ($this->aCommonCautionProfil->isModified() || $this->aCommonCautionProfil->isNew()) {
                    $affectedRows += $this->aCommonCautionProfil->save($con);
                }
                $this->setCommonCautionProfil($this->aCommonCautionProfil);
            }

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

            if ($this->commonCautionDemandesRelatedByIdAgentBanquierRejetScheduledForDeletion !== null) {
                if (!$this->commonCautionDemandesRelatedByIdAgentBanquierRejetScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonCautionDemandesRelatedByIdAgentBanquierRejetScheduledForDeletion as $commonCautionDemandeRelatedByIdAgentBanquierRejet) {
                        // need to save related object because we set the relation to null
                        $commonCautionDemandeRelatedByIdAgentBanquierRejet->save($con);
                    }
                    $this->commonCautionDemandesRelatedByIdAgentBanquierRejetScheduledForDeletion = null;
                }
            }

            if ($this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet !== null) {
                foreach ($this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonCautionDemandesRelatedByIdAgentBanquierValidationScheduledForDeletion !== null) {
                if (!$this->commonCautionDemandesRelatedByIdAgentBanquierValidationScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonCautionDemandesRelatedByIdAgentBanquierValidationScheduledForDeletion as $commonCautionDemandeRelatedByIdAgentBanquierValidation) {
                        // need to save related object because we set the relation to null
                        $commonCautionDemandeRelatedByIdAgentBanquierValidation->save($con);
                    }
                    $this->commonCautionDemandesRelatedByIdAgentBanquierValidationScheduledForDeletion = null;
                }
            }

            if ($this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation !== null) {
                foreach ($this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonCautionDemandesRelatedByIdAgentPriseEnChargeScheduledForDeletion !== null) {
                if (!$this->commonCautionDemandesRelatedByIdAgentPriseEnChargeScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonCautionDemandesRelatedByIdAgentPriseEnChargeScheduledForDeletion as $commonCautionDemandeRelatedByIdAgentPriseEnCharge) {
                        // need to save related object because we set the relation to null
                        $commonCautionDemandeRelatedByIdAgentPriseEnCharge->save($con);
                    }
                    $this->commonCautionDemandesRelatedByIdAgentPriseEnChargeScheduledForDeletion = null;
                }
            }

            if ($this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge !== null) {
                foreach ($this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonCautionDemandesRelatedByIdSignataire1ScheduledForDeletion !== null) {
                if (!$this->commonCautionDemandesRelatedByIdSignataire1ScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonCautionDemandesRelatedByIdSignataire1ScheduledForDeletion as $commonCautionDemandeRelatedByIdSignataire1) {
                        // need to save related object because we set the relation to null
                        $commonCautionDemandeRelatedByIdSignataire1->save($con);
                    }
                    $this->commonCautionDemandesRelatedByIdSignataire1ScheduledForDeletion = null;
                }
            }

            if ($this->collCommonCautionDemandesRelatedByIdSignataire1 !== null) {
                foreach ($this->collCommonCautionDemandesRelatedByIdSignataire1 as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonCautionDemandesRelatedByIdSignataire2ScheduledForDeletion !== null) {
                if (!$this->commonCautionDemandesRelatedByIdSignataire2ScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonCautionDemandesRelatedByIdSignataire2ScheduledForDeletion as $commonCautionDemandeRelatedByIdSignataire2) {
                        // need to save related object because we set the relation to null
                        $commonCautionDemandeRelatedByIdSignataire2->save($con);
                    }
                    $this->commonCautionDemandesRelatedByIdSignataire2ScheduledForDeletion = null;
                }
            }

            if ($this->collCommonCautionDemandesRelatedByIdSignataire2 !== null) {
                foreach ($this->collCommonCautionDemandesRelatedByIdSignataire2 as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonCautionSignataireDemandesScheduledForDeletion !== null) {
                if (!$this->commonCautionSignataireDemandesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonCautionSignataireDemandesScheduledForDeletion as $commonCautionSignataireDemande) {
                        // need to save related object because we set the relation to null
                        $commonCautionSignataireDemande->save($con);
                    }
                    $this->commonCautionSignataireDemandesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonCautionSignataireDemandes !== null) {
                foreach ($this->collCommonCautionSignataireDemandes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = CommonAgentBanquierPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonAgentBanquierPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonAgentBanquierPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::USERNAME)) {
            $modifiedColumns[':p' . $index++]  = '`username`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::USERNAME_CANONICAL)) {
            $modifiedColumns[':p' . $index++]  = '`username_canonical`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::EMAIL_CANONICAL)) {
            $modifiedColumns[':p' . $index++]  = '`email_canonical`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::ENABLED)) {
            $modifiedColumns[':p' . $index++]  = '`enabled`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::SALT)) {
            $modifiedColumns[':p' . $index++]  = '`salt`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`password`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::LAST_LOGIN)) {
            $modifiedColumns[':p' . $index++]  = '`last_login`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::CONFIRMATION_TOKEN)) {
            $modifiedColumns[':p' . $index++]  = '`confirmation_token`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::PASSWORD_REQUESTED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`password_requested_at`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::ROLES)) {
            $modifiedColumns[':p' . $index++]  = '`roles`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::ID_BANQUE)) {
            $modifiedColumns[':p' . $index++]  = '`id_banque`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::ID_PROFIL)) {
            $modifiedColumns[':p' . $index++]  = '`id_profil`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::CODE_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`code_ville`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::CODE_AGENCE)) {
            $modifiedColumns[':p' . $index++]  = '`code_agence`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::ID_REF_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`id_ref_ville`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`prenom`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`telephone`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::DELETED)) {
            $modifiedColumns[':p' . $index++]  = '`deleted`';
        }
        if ($this->isColumnModified(CommonAgentBanquierPeer::NOTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`notification`';
        }

        $sql = sprintf(
            'INSERT INTO `agent_banquier` (%s) VALUES (%s)',
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
                    case '`username`':						
                        $stmt->bindValue($identifier, $this->username, PDO::PARAM_STR);
                        break;
                    case '`username_canonical`':						
                        $stmt->bindValue($identifier, $this->username_canonical, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`email_canonical`':						
                        $stmt->bindValue($identifier, $this->email_canonical, PDO::PARAM_STR);
                        break;
                    case '`enabled`':
                        $stmt->bindValue($identifier, (int) $this->enabled, PDO::PARAM_INT);
                        break;
                    case '`salt`':						
                        $stmt->bindValue($identifier, $this->salt, PDO::PARAM_STR);
                        break;
                    case '`password`':						
                        $stmt->bindValue($identifier, $this->password, PDO::PARAM_STR);
                        break;
                    case '`last_login`':						
                        $stmt->bindValue($identifier, $this->last_login, PDO::PARAM_STR);
                        break;
                    case '`confirmation_token`':						
                        $stmt->bindValue($identifier, $this->confirmation_token, PDO::PARAM_STR);
                        break;
                    case '`password_requested_at`':						
                        $stmt->bindValue($identifier, $this->password_requested_at, PDO::PARAM_STR);
                        break;
                    case '`roles`':						
                        $stmt->bindValue($identifier, $this->roles, PDO::PARAM_STR);
                        break;
                    case '`id_banque`':						
                        $stmt->bindValue($identifier, $this->id_banque, PDO::PARAM_INT);
                        break;
                    case '`id_profil`':						
                        $stmt->bindValue($identifier, $this->id_profil, PDO::PARAM_INT);
                        break;
                    case '`created_at`':						
                        $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
                        break;
                    case '`updated_at`':						
                        $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
                        break;
                    case '`code_ville`':						
                        $stmt->bindValue($identifier, $this->code_ville, PDO::PARAM_STR);
                        break;
                    case '`code_agence`':						
                        $stmt->bindValue($identifier, $this->code_agence, PDO::PARAM_STR);
                        break;
                    case '`id_ref_ville`':						
                        $stmt->bindValue($identifier, $this->id_ref_ville, PDO::PARAM_INT);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`prenom`':						
                        $stmt->bindValue($identifier, $this->prenom, PDO::PARAM_STR);
                        break;
                    case '`telephone`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`deleted`':
                        $stmt->bindValue($identifier, (int) $this->deleted, PDO::PARAM_INT);
                        break;
                    case '`notification`':						
                        $stmt->bindValue($identifier, $this->notification, PDO::PARAM_STR);
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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCommonCautionProfil !== null) {
                if (!$this->aCommonCautionProfil->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonCautionProfil->getValidationFailures());
                }
            }


            if (($retval = CommonAgentBanquierPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet !== null) {
                    foreach ($this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation !== null) {
                    foreach ($this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge !== null) {
                    foreach ($this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonCautionDemandesRelatedByIdSignataire1 !== null) {
                    foreach ($this->collCommonCautionDemandesRelatedByIdSignataire1 as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonCautionDemandesRelatedByIdSignataire2 !== null) {
                    foreach ($this->collCommonCautionDemandesRelatedByIdSignataire2 as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonCautionSignataireDemandes !== null) {
                    foreach ($this->collCommonCautionSignataireDemandes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = CommonAgentBanquierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUsername();
                break;
            case 2:
                return $this->getUsernameCanonical();
                break;
            case 3:
                return $this->getEmail();
                break;
            case 4:
                return $this->getEmailCanonical();
                break;
            case 5:
                return $this->getEnabled();
                break;
            case 6:
                return $this->getSalt();
                break;
            case 7:
                return $this->getPassword();
                break;
            case 8:
                return $this->getLastLogin();
                break;
            case 9:
                return $this->getConfirmationToken();
                break;
            case 10:
                return $this->getPasswordRequestedAt();
                break;
            case 11:
                return $this->getRoles();
                break;
            case 12:
                return $this->getIdBanque();
                break;
            case 13:
                return $this->getIdProfil();
                break;
            case 14:
                return $this->getCreatedAt();
                break;
            case 15:
                return $this->getUpdatedAt();
                break;
            case 16:
                return $this->getCodeVille();
                break;
            case 17:
                return $this->getCodeAgence();
                break;
            case 18:
                return $this->getIdRefVille();
                break;
            case 19:
                return $this->getNom();
                break;
            case 20:
                return $this->getPrenom();
                break;
            case 21:
                return $this->getTelephone();
                break;
            case 22:
                return $this->getDeleted();
                break;
            case 23:
                return $this->getNotification();
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['CommonAgentBanquier'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonAgentBanquier'][$this->getPrimaryKey()] = true;
        $keys = CommonAgentBanquierPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getUsername(),
            $keys[2] => $this->getUsernameCanonical(),
            $keys[3] => $this->getEmail(),
            $keys[4] => $this->getEmailCanonical(),
            $keys[5] => $this->getEnabled(),
            $keys[6] => $this->getSalt(),
            $keys[7] => $this->getPassword(),
            $keys[8] => $this->getLastLogin(),
            $keys[9] => $this->getConfirmationToken(),
            $keys[10] => $this->getPasswordRequestedAt(),
            $keys[11] => $this->getRoles(),
            $keys[12] => $this->getIdBanque(),
            $keys[13] => $this->getIdProfil(),
            $keys[14] => $this->getCreatedAt(),
            $keys[15] => $this->getUpdatedAt(),
            $keys[16] => $this->getCodeVille(),
            $keys[17] => $this->getCodeAgence(),
            $keys[18] => $this->getIdRefVille(),
            $keys[19] => $this->getNom(),
            $keys[20] => $this->getPrenom(),
            $keys[21] => $this->getTelephone(),
            $keys[22] => $this->getDeleted(),
            $keys[23] => $this->getNotification(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonCautionProfil) {
                $result['CommonCautionProfil'] = $this->aCommonCautionProfil->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet) {
                $result['CommonCautionDemandesRelatedByIdAgentBanquierRejet'] = $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation) {
                $result['CommonCautionDemandesRelatedByIdAgentBanquierValidation'] = $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge) {
                $result['CommonCautionDemandesRelatedByIdAgentPriseEnCharge'] = $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonCautionDemandesRelatedByIdSignataire1) {
                $result['CommonCautionDemandesRelatedByIdSignataire1'] = $this->collCommonCautionDemandesRelatedByIdSignataire1->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonCautionDemandesRelatedByIdSignataire2) {
                $result['CommonCautionDemandesRelatedByIdSignataire2'] = $this->collCommonCautionDemandesRelatedByIdSignataire2->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonCautionSignataireDemandes) {
                $result['CommonCautionSignataireDemandes'] = $this->collCommonCautionSignataireDemandes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

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
        $pos = CommonAgentBanquierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUsername($value);
                break;
            case 2:
                $this->setUsernameCanonical($value);
                break;
            case 3:
                $this->setEmail($value);
                break;
            case 4:
                $this->setEmailCanonical($value);
                break;
            case 5:
                $this->setEnabled($value);
                break;
            case 6:
                $this->setSalt($value);
                break;
            case 7:
                $this->setPassword($value);
                break;
            case 8:
                $this->setLastLogin($value);
                break;
            case 9:
                $this->setConfirmationToken($value);
                break;
            case 10:
                $this->setPasswordRequestedAt($value);
                break;
            case 11:
                $this->setRoles($value);
                break;
            case 12:
                $this->setIdBanque($value);
                break;
            case 13:
                $this->setIdProfil($value);
                break;
            case 14:
                $this->setCreatedAt($value);
                break;
            case 15:
                $this->setUpdatedAt($value);
                break;
            case 16:
                $this->setCodeVille($value);
                break;
            case 17:
                $this->setCodeAgence($value);
                break;
            case 18:
                $this->setIdRefVille($value);
                break;
            case 19:
                $this->setNom($value);
                break;
            case 20:
                $this->setPrenom($value);
                break;
            case 21:
                $this->setTelephone($value);
                break;
            case 22:
                $this->setDeleted($value);
                break;
            case 23:
                $this->setNotification($value);
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
        $keys = CommonAgentBanquierPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setUsername($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUsernameCanonical($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmail($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmailCanonical($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEnabled($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSalt($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPassword($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLastLogin($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setConfirmationToken($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPasswordRequestedAt($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setRoles($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIdBanque($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdProfil($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCreatedAt($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setUpdatedAt($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setCodeVille($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setCodeAgence($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIdRefVille($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setNom($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPrenom($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTelephone($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDeleted($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setNotification($arr[$keys[23]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonAgentBanquierPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonAgentBanquierPeer::ID)) $criteria->add(CommonAgentBanquierPeer::ID, $this->id);
        if ($this->isColumnModified(CommonAgentBanquierPeer::USERNAME)) $criteria->add(CommonAgentBanquierPeer::USERNAME, $this->username);
        if ($this->isColumnModified(CommonAgentBanquierPeer::USERNAME_CANONICAL)) $criteria->add(CommonAgentBanquierPeer::USERNAME_CANONICAL, $this->username_canonical);
        if ($this->isColumnModified(CommonAgentBanquierPeer::EMAIL)) $criteria->add(CommonAgentBanquierPeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonAgentBanquierPeer::EMAIL_CANONICAL)) $criteria->add(CommonAgentBanquierPeer::EMAIL_CANONICAL, $this->email_canonical);
        if ($this->isColumnModified(CommonAgentBanquierPeer::ENABLED)) $criteria->add(CommonAgentBanquierPeer::ENABLED, $this->enabled);
        if ($this->isColumnModified(CommonAgentBanquierPeer::SALT)) $criteria->add(CommonAgentBanquierPeer::SALT, $this->salt);
        if ($this->isColumnModified(CommonAgentBanquierPeer::PASSWORD)) $criteria->add(CommonAgentBanquierPeer::PASSWORD, $this->password);
        if ($this->isColumnModified(CommonAgentBanquierPeer::LAST_LOGIN)) $criteria->add(CommonAgentBanquierPeer::LAST_LOGIN, $this->last_login);
        if ($this->isColumnModified(CommonAgentBanquierPeer::CONFIRMATION_TOKEN)) $criteria->add(CommonAgentBanquierPeer::CONFIRMATION_TOKEN, $this->confirmation_token);
        if ($this->isColumnModified(CommonAgentBanquierPeer::PASSWORD_REQUESTED_AT)) $criteria->add(CommonAgentBanquierPeer::PASSWORD_REQUESTED_AT, $this->password_requested_at);
        if ($this->isColumnModified(CommonAgentBanquierPeer::ROLES)) $criteria->add(CommonAgentBanquierPeer::ROLES, $this->roles);
        if ($this->isColumnModified(CommonAgentBanquierPeer::ID_BANQUE)) $criteria->add(CommonAgentBanquierPeer::ID_BANQUE, $this->id_banque);
        if ($this->isColumnModified(CommonAgentBanquierPeer::ID_PROFIL)) $criteria->add(CommonAgentBanquierPeer::ID_PROFIL, $this->id_profil);
        if ($this->isColumnModified(CommonAgentBanquierPeer::CREATED_AT)) $criteria->add(CommonAgentBanquierPeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(CommonAgentBanquierPeer::UPDATED_AT)) $criteria->add(CommonAgentBanquierPeer::UPDATED_AT, $this->updated_at);
        if ($this->isColumnModified(CommonAgentBanquierPeer::CODE_VILLE)) $criteria->add(CommonAgentBanquierPeer::CODE_VILLE, $this->code_ville);
        if ($this->isColumnModified(CommonAgentBanquierPeer::CODE_AGENCE)) $criteria->add(CommonAgentBanquierPeer::CODE_AGENCE, $this->code_agence);
        if ($this->isColumnModified(CommonAgentBanquierPeer::ID_REF_VILLE)) $criteria->add(CommonAgentBanquierPeer::ID_REF_VILLE, $this->id_ref_ville);
        if ($this->isColumnModified(CommonAgentBanquierPeer::NOM)) $criteria->add(CommonAgentBanquierPeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonAgentBanquierPeer::PRENOM)) $criteria->add(CommonAgentBanquierPeer::PRENOM, $this->prenom);
        if ($this->isColumnModified(CommonAgentBanquierPeer::TELEPHONE)) $criteria->add(CommonAgentBanquierPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(CommonAgentBanquierPeer::DELETED)) $criteria->add(CommonAgentBanquierPeer::DELETED, $this->deleted);
        if ($this->isColumnModified(CommonAgentBanquierPeer::NOTIFICATION)) $criteria->add(CommonAgentBanquierPeer::NOTIFICATION, $this->notification);

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
        $criteria = new Criteria(CommonAgentBanquierPeer::DATABASE_NAME);
        $criteria->add(CommonAgentBanquierPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonAgentBanquier (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUsername($this->getUsername());
        $copyObj->setUsernameCanonical($this->getUsernameCanonical());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setEmailCanonical($this->getEmailCanonical());
        $copyObj->setEnabled($this->getEnabled());
        $copyObj->setSalt($this->getSalt());
        $copyObj->setPassword($this->getPassword());
        $copyObj->setLastLogin($this->getLastLogin());
        $copyObj->setConfirmationToken($this->getConfirmationToken());
        $copyObj->setPasswordRequestedAt($this->getPasswordRequestedAt());
        $copyObj->setRoles($this->getRoles());
        $copyObj->setIdBanque($this->getIdBanque());
        $copyObj->setIdProfil($this->getIdProfil());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());
        $copyObj->setCodeVille($this->getCodeVille());
        $copyObj->setCodeAgence($this->getCodeAgence());
        $copyObj->setIdRefVille($this->getIdRefVille());
        $copyObj->setNom($this->getNom());
        $copyObj->setPrenom($this->getPrenom());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setDeleted($this->getDeleted());
        $copyObj->setNotification($this->getNotification());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonCautionDemandesRelatedByIdAgentBanquierRejet() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonCautionDemandeRelatedByIdAgentBanquierRejet($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonCautionDemandesRelatedByIdAgentBanquierValidation() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonCautionDemandeRelatedByIdAgentBanquierValidation($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonCautionDemandesRelatedByIdAgentPriseEnCharge() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonCautionDemandeRelatedByIdAgentPriseEnCharge($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonCautionDemandesRelatedByIdSignataire1() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonCautionDemandeRelatedByIdSignataire1($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonCautionDemandesRelatedByIdSignataire2() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonCautionDemandeRelatedByIdSignataire2($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonCautionSignataireDemandes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonCautionSignataireDemande($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

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
     * @return CommonAgentBanquier Clone of current object.
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
     * @return CommonAgentBanquierPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonAgentBanquierPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonCautionProfil object.
     *
     * @param   CommonCautionProfil $v
     * @return CommonAgentBanquier The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonCautionProfil(CommonCautionProfil $v = null)
    {
        if ($v === null) {
            $this->setIdProfil(NULL);
        } else {
            $this->setIdProfil($v->getId());
        }

        $this->aCommonCautionProfil = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonCautionProfil object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonAgentBanquier($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonCautionProfil object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonCautionProfil The associated CommonCautionProfil object.
     * @throws PropelException
     */
    public function getCommonCautionProfil(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonCautionProfil === null && ($this->id_profil !== null) && $doQuery) {
            $this->aCommonCautionProfil = CommonCautionProfilQuery::create()->findPk($this->id_profil, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonCautionProfil->addCommonAgentBanquiers($this);
             */
        }

        return $this->aCommonCautionProfil;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('CommonCautionDemandeRelatedByIdAgentBanquierRejet' == $relationName) {
            $this->initCommonCautionDemandesRelatedByIdAgentBanquierRejet();
        }
        if ('CommonCautionDemandeRelatedByIdAgentBanquierValidation' == $relationName) {
            $this->initCommonCautionDemandesRelatedByIdAgentBanquierValidation();
        }
        if ('CommonCautionDemandeRelatedByIdAgentPriseEnCharge' == $relationName) {
            $this->initCommonCautionDemandesRelatedByIdAgentPriseEnCharge();
        }
        if ('CommonCautionDemandeRelatedByIdSignataire1' == $relationName) {
            $this->initCommonCautionDemandesRelatedByIdSignataire1();
        }
        if ('CommonCautionDemandeRelatedByIdSignataire2' == $relationName) {
            $this->initCommonCautionDemandesRelatedByIdSignataire2();
        }
        if ('CommonCautionSignataireDemande' == $relationName) {
            $this->initCommonCautionSignataireDemandes();
        }
    }

    /**
     * Clears out the collCommonCautionDemandesRelatedByIdAgentBanquierRejet collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgentBanquier The current object (for fluent API support)
     * @see        addCommonCautionDemandesRelatedByIdAgentBanquierRejet()
     */
    public function clearCommonCautionDemandesRelatedByIdAgentBanquierRejet()
    {
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet = null; // important to set this to null since that means it is uninitialized
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejetPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonCautionDemandesRelatedByIdAgentBanquierRejet collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonCautionDemandesRelatedByIdAgentBanquierRejet($v = true)
    {
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejetPartial = $v;
    }

    /**
     * Initializes the collCommonCautionDemandesRelatedByIdAgentBanquierRejet collection.
     *
     * By default this just sets the collCommonCautionDemandesRelatedByIdAgentBanquierRejet collection to an empty array (like clearcollCommonCautionDemandesRelatedByIdAgentBanquierRejet());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonCautionDemandesRelatedByIdAgentBanquierRejet($overrideExisting = true)
    {
        if (null !== $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet && !$overrideExisting) {
            return;
        }
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet = new PropelObjectCollection();
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet->setModel('CommonCautionDemande');
    }

    /**
     * Gets an array of CommonCautionDemande objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgentBanquier is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     * @throws PropelException
     */
    public function getCommonCautionDemandesRelatedByIdAgentBanquierRejet($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejetPartial && !$this->isNew();
        if (null === $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet) {
                // return empty collection
                $this->initCommonCautionDemandesRelatedByIdAgentBanquierRejet();
            } else {
                $collCommonCautionDemandesRelatedByIdAgentBanquierRejet = CommonCautionDemandeQuery::create(null, $criteria)
                    ->filterByCommonAgentBanquierRelatedByIdAgentBanquierRejet($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejetPartial && count($collCommonCautionDemandesRelatedByIdAgentBanquierRejet)) {
                      $this->initCommonCautionDemandesRelatedByIdAgentBanquierRejet(false);

                      foreach ($collCommonCautionDemandesRelatedByIdAgentBanquierRejet as $obj) {
                        if (false == $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet->contains($obj)) {
                          $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet->append($obj);
                        }
                      }

                      $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejetPartial = true;
                    }

                    $collCommonCautionDemandesRelatedByIdAgentBanquierRejet->getInternalIterator()->rewind();

                    return $collCommonCautionDemandesRelatedByIdAgentBanquierRejet;
                }

                if ($partial && $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet) {
                    foreach ($this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet as $obj) {
                        if ($obj->isNew()) {
                            $collCommonCautionDemandesRelatedByIdAgentBanquierRejet[] = $obj;
                        }
                    }
                }

                $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet = $collCommonCautionDemandesRelatedByIdAgentBanquierRejet;
                $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejetPartial = false;
            }
        }

        return $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet;
    }

    /**
     * Sets a collection of CommonCautionDemandeRelatedByIdAgentBanquierRejet objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonCautionDemandesRelatedByIdAgentBanquierRejet A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setCommonCautionDemandesRelatedByIdAgentBanquierRejet(PropelCollection $commonCautionDemandesRelatedByIdAgentBanquierRejet, PropelPDO $con = null)
    {
        $commonCautionDemandesRelatedByIdAgentBanquierRejetToDelete = $this->getCommonCautionDemandesRelatedByIdAgentBanquierRejet(new Criteria(), $con)->diff($commonCautionDemandesRelatedByIdAgentBanquierRejet);


        $this->commonCautionDemandesRelatedByIdAgentBanquierRejetScheduledForDeletion = $commonCautionDemandesRelatedByIdAgentBanquierRejetToDelete;

        foreach ($commonCautionDemandesRelatedByIdAgentBanquierRejetToDelete as $commonCautionDemandeRelatedByIdAgentBanquierRejetRemoved) {
            $commonCautionDemandeRelatedByIdAgentBanquierRejetRemoved->setCommonAgentBanquierRelatedByIdAgentBanquierRejet(null);
        }

        $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet = null;
        foreach ($commonCautionDemandesRelatedByIdAgentBanquierRejet as $commonCautionDemandeRelatedByIdAgentBanquierRejet) {
            $this->addCommonCautionDemandeRelatedByIdAgentBanquierRejet($commonCautionDemandeRelatedByIdAgentBanquierRejet);
        }

        $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet = $commonCautionDemandesRelatedByIdAgentBanquierRejet;
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejetPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonCautionDemande objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonCautionDemande objects.
     * @throws PropelException
     */
    public function countCommonCautionDemandesRelatedByIdAgentBanquierRejet(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejetPartial && !$this->isNew();
        if (null === $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonCautionDemandesRelatedByIdAgentBanquierRejet());
            }
            $query = CommonCautionDemandeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentBanquierRelatedByIdAgentBanquierRejet($this)
                ->count($con);
        }

        return count($this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet);
    }

    /**
     * Method called to associate a CommonCautionDemande object to this object
     * through the CommonCautionDemande foreign key attribute.
     *
     * @param   CommonCautionDemande $l CommonCautionDemande
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function addCommonCautionDemandeRelatedByIdAgentBanquierRejet(CommonCautionDemande $l)
    {
        if ($this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet === null) {
            $this->initCommonCautionDemandesRelatedByIdAgentBanquierRejet();
            $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejetPartial = true;
        }
        if (!in_array($l, $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonCautionDemandeRelatedByIdAgentBanquierRejet($l);
        }

        return $this;
    }

    /**
     * @param	CommonCautionDemandeRelatedByIdAgentBanquierRejet $commonCautionDemandeRelatedByIdAgentBanquierRejet The commonCautionDemandeRelatedByIdAgentBanquierRejet object to add.
     */
    protected function doAddCommonCautionDemandeRelatedByIdAgentBanquierRejet($commonCautionDemandeRelatedByIdAgentBanquierRejet)
    {
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet[]= $commonCautionDemandeRelatedByIdAgentBanquierRejet;
        $commonCautionDemandeRelatedByIdAgentBanquierRejet->setCommonAgentBanquierRelatedByIdAgentBanquierRejet($this);
    }

    /**
     * @param	CommonCautionDemandeRelatedByIdAgentBanquierRejet $commonCautionDemandeRelatedByIdAgentBanquierRejet The commonCautionDemandeRelatedByIdAgentBanquierRejet object to remove.
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function removeCommonCautionDemandeRelatedByIdAgentBanquierRejet($commonCautionDemandeRelatedByIdAgentBanquierRejet)
    {
        if ($this->getCommonCautionDemandesRelatedByIdAgentBanquierRejet()->contains($commonCautionDemandeRelatedByIdAgentBanquierRejet)) {
            $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet->remove($this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet->search($commonCautionDemandeRelatedByIdAgentBanquierRejet));
            if (null === $this->commonCautionDemandesRelatedByIdAgentBanquierRejetScheduledForDeletion) {
                $this->commonCautionDemandesRelatedByIdAgentBanquierRejetScheduledForDeletion = clone $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet;
                $this->commonCautionDemandesRelatedByIdAgentBanquierRejetScheduledForDeletion->clear();
            }
            $this->commonCautionDemandesRelatedByIdAgentBanquierRejetScheduledForDeletion[]= $commonCautionDemandeRelatedByIdAgentBanquierRejet;
            $commonCautionDemandeRelatedByIdAgentBanquierRejet->setCommonAgentBanquierRelatedByIdAgentBanquierRejet(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgentBanquier is new, it will return
     * an empty collection; or if this CommonAgentBanquier has previously
     * been saved, it will retrieve related CommonCautionDemandesRelatedByIdAgentBanquierRejet from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgentBanquier.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     */
    public function getCommonCautionDemandesRelatedByIdAgentBanquierRejetJoinCommonTCompteBancaire($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonCautionDemandeQuery::create(null, $criteria);
        $query->joinWith('CommonTCompteBancaire', $join_behavior);

        return $this->getCommonCautionDemandesRelatedByIdAgentBanquierRejet($query, $con);
    }

    /**
     * Clears out the collCommonCautionDemandesRelatedByIdAgentBanquierValidation collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgentBanquier The current object (for fluent API support)
     * @see        addCommonCautionDemandesRelatedByIdAgentBanquierValidation()
     */
    public function clearCommonCautionDemandesRelatedByIdAgentBanquierValidation()
    {
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation = null; // important to set this to null since that means it is uninitialized
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidationPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonCautionDemandesRelatedByIdAgentBanquierValidation collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonCautionDemandesRelatedByIdAgentBanquierValidation($v = true)
    {
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidationPartial = $v;
    }

    /**
     * Initializes the collCommonCautionDemandesRelatedByIdAgentBanquierValidation collection.
     *
     * By default this just sets the collCommonCautionDemandesRelatedByIdAgentBanquierValidation collection to an empty array (like clearcollCommonCautionDemandesRelatedByIdAgentBanquierValidation());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonCautionDemandesRelatedByIdAgentBanquierValidation($overrideExisting = true)
    {
        if (null !== $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation && !$overrideExisting) {
            return;
        }
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation = new PropelObjectCollection();
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation->setModel('CommonCautionDemande');
    }

    /**
     * Gets an array of CommonCautionDemande objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgentBanquier is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     * @throws PropelException
     */
    public function getCommonCautionDemandesRelatedByIdAgentBanquierValidation($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidationPartial && !$this->isNew();
        if (null === $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation) {
                // return empty collection
                $this->initCommonCautionDemandesRelatedByIdAgentBanquierValidation();
            } else {
                $collCommonCautionDemandesRelatedByIdAgentBanquierValidation = CommonCautionDemandeQuery::create(null, $criteria)
                    ->filterByCommonAgentBanquierRelatedByIdAgentBanquierValidation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidationPartial && count($collCommonCautionDemandesRelatedByIdAgentBanquierValidation)) {
                      $this->initCommonCautionDemandesRelatedByIdAgentBanquierValidation(false);

                      foreach ($collCommonCautionDemandesRelatedByIdAgentBanquierValidation as $obj) {
                        if (false == $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation->contains($obj)) {
                          $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation->append($obj);
                        }
                      }

                      $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidationPartial = true;
                    }

                    $collCommonCautionDemandesRelatedByIdAgentBanquierValidation->getInternalIterator()->rewind();

                    return $collCommonCautionDemandesRelatedByIdAgentBanquierValidation;
                }

                if ($partial && $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation) {
                    foreach ($this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation as $obj) {
                        if ($obj->isNew()) {
                            $collCommonCautionDemandesRelatedByIdAgentBanquierValidation[] = $obj;
                        }
                    }
                }

                $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation = $collCommonCautionDemandesRelatedByIdAgentBanquierValidation;
                $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidationPartial = false;
            }
        }

        return $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation;
    }

    /**
     * Sets a collection of CommonCautionDemandeRelatedByIdAgentBanquierValidation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonCautionDemandesRelatedByIdAgentBanquierValidation A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setCommonCautionDemandesRelatedByIdAgentBanquierValidation(PropelCollection $commonCautionDemandesRelatedByIdAgentBanquierValidation, PropelPDO $con = null)
    {
        $commonCautionDemandesRelatedByIdAgentBanquierValidationToDelete = $this->getCommonCautionDemandesRelatedByIdAgentBanquierValidation(new Criteria(), $con)->diff($commonCautionDemandesRelatedByIdAgentBanquierValidation);


        $this->commonCautionDemandesRelatedByIdAgentBanquierValidationScheduledForDeletion = $commonCautionDemandesRelatedByIdAgentBanquierValidationToDelete;

        foreach ($commonCautionDemandesRelatedByIdAgentBanquierValidationToDelete as $commonCautionDemandeRelatedByIdAgentBanquierValidationRemoved) {
            $commonCautionDemandeRelatedByIdAgentBanquierValidationRemoved->setCommonAgentBanquierRelatedByIdAgentBanquierValidation(null);
        }

        $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation = null;
        foreach ($commonCautionDemandesRelatedByIdAgentBanquierValidation as $commonCautionDemandeRelatedByIdAgentBanquierValidation) {
            $this->addCommonCautionDemandeRelatedByIdAgentBanquierValidation($commonCautionDemandeRelatedByIdAgentBanquierValidation);
        }

        $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation = $commonCautionDemandesRelatedByIdAgentBanquierValidation;
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidationPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonCautionDemande objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonCautionDemande objects.
     * @throws PropelException
     */
    public function countCommonCautionDemandesRelatedByIdAgentBanquierValidation(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidationPartial && !$this->isNew();
        if (null === $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonCautionDemandesRelatedByIdAgentBanquierValidation());
            }
            $query = CommonCautionDemandeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentBanquierRelatedByIdAgentBanquierValidation($this)
                ->count($con);
        }

        return count($this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation);
    }

    /**
     * Method called to associate a CommonCautionDemande object to this object
     * through the CommonCautionDemande foreign key attribute.
     *
     * @param   CommonCautionDemande $l CommonCautionDemande
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function addCommonCautionDemandeRelatedByIdAgentBanquierValidation(CommonCautionDemande $l)
    {
        if ($this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation === null) {
            $this->initCommonCautionDemandesRelatedByIdAgentBanquierValidation();
            $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidationPartial = true;
        }
        if (!in_array($l, $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonCautionDemandeRelatedByIdAgentBanquierValidation($l);
        }

        return $this;
    }

    /**
     * @param	CommonCautionDemandeRelatedByIdAgentBanquierValidation $commonCautionDemandeRelatedByIdAgentBanquierValidation The commonCautionDemandeRelatedByIdAgentBanquierValidation object to add.
     */
    protected function doAddCommonCautionDemandeRelatedByIdAgentBanquierValidation($commonCautionDemandeRelatedByIdAgentBanquierValidation)
    {
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation[]= $commonCautionDemandeRelatedByIdAgentBanquierValidation;
        $commonCautionDemandeRelatedByIdAgentBanquierValidation->setCommonAgentBanquierRelatedByIdAgentBanquierValidation($this);
    }

    /**
     * @param	CommonCautionDemandeRelatedByIdAgentBanquierValidation $commonCautionDemandeRelatedByIdAgentBanquierValidation The commonCautionDemandeRelatedByIdAgentBanquierValidation object to remove.
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function removeCommonCautionDemandeRelatedByIdAgentBanquierValidation($commonCautionDemandeRelatedByIdAgentBanquierValidation)
    {
        if ($this->getCommonCautionDemandesRelatedByIdAgentBanquierValidation()->contains($commonCautionDemandeRelatedByIdAgentBanquierValidation)) {
            $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation->remove($this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation->search($commonCautionDemandeRelatedByIdAgentBanquierValidation));
            if (null === $this->commonCautionDemandesRelatedByIdAgentBanquierValidationScheduledForDeletion) {
                $this->commonCautionDemandesRelatedByIdAgentBanquierValidationScheduledForDeletion = clone $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation;
                $this->commonCautionDemandesRelatedByIdAgentBanquierValidationScheduledForDeletion->clear();
            }
            $this->commonCautionDemandesRelatedByIdAgentBanquierValidationScheduledForDeletion[]= $commonCautionDemandeRelatedByIdAgentBanquierValidation;
            $commonCautionDemandeRelatedByIdAgentBanquierValidation->setCommonAgentBanquierRelatedByIdAgentBanquierValidation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgentBanquier is new, it will return
     * an empty collection; or if this CommonAgentBanquier has previously
     * been saved, it will retrieve related CommonCautionDemandesRelatedByIdAgentBanquierValidation from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgentBanquier.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     */
    public function getCommonCautionDemandesRelatedByIdAgentBanquierValidationJoinCommonTCompteBancaire($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonCautionDemandeQuery::create(null, $criteria);
        $query->joinWith('CommonTCompteBancaire', $join_behavior);

        return $this->getCommonCautionDemandesRelatedByIdAgentBanquierValidation($query, $con);
    }

    /**
     * Clears out the collCommonCautionDemandesRelatedByIdAgentPriseEnCharge collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgentBanquier The current object (for fluent API support)
     * @see        addCommonCautionDemandesRelatedByIdAgentPriseEnCharge()
     */
    public function clearCommonCautionDemandesRelatedByIdAgentPriseEnCharge()
    {
        $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge = null; // important to set this to null since that means it is uninitialized
        $this->collCommonCautionDemandesRelatedByIdAgentPriseEnChargePartial = null;

        return $this;
    }

    /**
     * reset is the collCommonCautionDemandesRelatedByIdAgentPriseEnCharge collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonCautionDemandesRelatedByIdAgentPriseEnCharge($v = true)
    {
        $this->collCommonCautionDemandesRelatedByIdAgentPriseEnChargePartial = $v;
    }

    /**
     * Initializes the collCommonCautionDemandesRelatedByIdAgentPriseEnCharge collection.
     *
     * By default this just sets the collCommonCautionDemandesRelatedByIdAgentPriseEnCharge collection to an empty array (like clearcollCommonCautionDemandesRelatedByIdAgentPriseEnCharge());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonCautionDemandesRelatedByIdAgentPriseEnCharge($overrideExisting = true)
    {
        if (null !== $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge && !$overrideExisting) {
            return;
        }
        $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge = new PropelObjectCollection();
        $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge->setModel('CommonCautionDemande');
    }

    /**
     * Gets an array of CommonCautionDemande objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgentBanquier is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     * @throws PropelException
     */
    public function getCommonCautionDemandesRelatedByIdAgentPriseEnCharge($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionDemandesRelatedByIdAgentPriseEnChargePartial && !$this->isNew();
        if (null === $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge) {
                // return empty collection
                $this->initCommonCautionDemandesRelatedByIdAgentPriseEnCharge();
            } else {
                $collCommonCautionDemandesRelatedByIdAgentPriseEnCharge = CommonCautionDemandeQuery::create(null, $criteria)
                    ->filterByCommonAgentBanquierRelatedByIdAgentPriseEnCharge($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonCautionDemandesRelatedByIdAgentPriseEnChargePartial && count($collCommonCautionDemandesRelatedByIdAgentPriseEnCharge)) {
                      $this->initCommonCautionDemandesRelatedByIdAgentPriseEnCharge(false);

                      foreach ($collCommonCautionDemandesRelatedByIdAgentPriseEnCharge as $obj) {
                        if (false == $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge->contains($obj)) {
                          $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge->append($obj);
                        }
                      }

                      $this->collCommonCautionDemandesRelatedByIdAgentPriseEnChargePartial = true;
                    }

                    $collCommonCautionDemandesRelatedByIdAgentPriseEnCharge->getInternalIterator()->rewind();

                    return $collCommonCautionDemandesRelatedByIdAgentPriseEnCharge;
                }

                if ($partial && $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge) {
                    foreach ($this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge as $obj) {
                        if ($obj->isNew()) {
                            $collCommonCautionDemandesRelatedByIdAgentPriseEnCharge[] = $obj;
                        }
                    }
                }

                $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge = $collCommonCautionDemandesRelatedByIdAgentPriseEnCharge;
                $this->collCommonCautionDemandesRelatedByIdAgentPriseEnChargePartial = false;
            }
        }

        return $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge;
    }

    /**
     * Sets a collection of CommonCautionDemandeRelatedByIdAgentPriseEnCharge objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonCautionDemandesRelatedByIdAgentPriseEnCharge A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setCommonCautionDemandesRelatedByIdAgentPriseEnCharge(PropelCollection $commonCautionDemandesRelatedByIdAgentPriseEnCharge, PropelPDO $con = null)
    {
        $commonCautionDemandesRelatedByIdAgentPriseEnChargeToDelete = $this->getCommonCautionDemandesRelatedByIdAgentPriseEnCharge(new Criteria(), $con)->diff($commonCautionDemandesRelatedByIdAgentPriseEnCharge);


        $this->commonCautionDemandesRelatedByIdAgentPriseEnChargeScheduledForDeletion = $commonCautionDemandesRelatedByIdAgentPriseEnChargeToDelete;

        foreach ($commonCautionDemandesRelatedByIdAgentPriseEnChargeToDelete as $commonCautionDemandeRelatedByIdAgentPriseEnChargeRemoved) {
            $commonCautionDemandeRelatedByIdAgentPriseEnChargeRemoved->setCommonAgentBanquierRelatedByIdAgentPriseEnCharge(null);
        }

        $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge = null;
        foreach ($commonCautionDemandesRelatedByIdAgentPriseEnCharge as $commonCautionDemandeRelatedByIdAgentPriseEnCharge) {
            $this->addCommonCautionDemandeRelatedByIdAgentPriseEnCharge($commonCautionDemandeRelatedByIdAgentPriseEnCharge);
        }

        $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge = $commonCautionDemandesRelatedByIdAgentPriseEnCharge;
        $this->collCommonCautionDemandesRelatedByIdAgentPriseEnChargePartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonCautionDemande objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonCautionDemande objects.
     * @throws PropelException
     */
    public function countCommonCautionDemandesRelatedByIdAgentPriseEnCharge(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionDemandesRelatedByIdAgentPriseEnChargePartial && !$this->isNew();
        if (null === $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonCautionDemandesRelatedByIdAgentPriseEnCharge());
            }
            $query = CommonCautionDemandeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentBanquierRelatedByIdAgentPriseEnCharge($this)
                ->count($con);
        }

        return count($this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge);
    }

    /**
     * Method called to associate a CommonCautionDemande object to this object
     * through the CommonCautionDemande foreign key attribute.
     *
     * @param   CommonCautionDemande $l CommonCautionDemande
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function addCommonCautionDemandeRelatedByIdAgentPriseEnCharge(CommonCautionDemande $l)
    {
        if ($this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge === null) {
            $this->initCommonCautionDemandesRelatedByIdAgentPriseEnCharge();
            $this->collCommonCautionDemandesRelatedByIdAgentPriseEnChargePartial = true;
        }
        if (!in_array($l, $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonCautionDemandeRelatedByIdAgentPriseEnCharge($l);
        }

        return $this;
    }

    /**
     * @param	CommonCautionDemandeRelatedByIdAgentPriseEnCharge $commonCautionDemandeRelatedByIdAgentPriseEnCharge The commonCautionDemandeRelatedByIdAgentPriseEnCharge object to add.
     */
    protected function doAddCommonCautionDemandeRelatedByIdAgentPriseEnCharge($commonCautionDemandeRelatedByIdAgentPriseEnCharge)
    {
        $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge[]= $commonCautionDemandeRelatedByIdAgentPriseEnCharge;
        $commonCautionDemandeRelatedByIdAgentPriseEnCharge->setCommonAgentBanquierRelatedByIdAgentPriseEnCharge($this);
    }

    /**
     * @param	CommonCautionDemandeRelatedByIdAgentPriseEnCharge $commonCautionDemandeRelatedByIdAgentPriseEnCharge The commonCautionDemandeRelatedByIdAgentPriseEnCharge object to remove.
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function removeCommonCautionDemandeRelatedByIdAgentPriseEnCharge($commonCautionDemandeRelatedByIdAgentPriseEnCharge)
    {
        if ($this->getCommonCautionDemandesRelatedByIdAgentPriseEnCharge()->contains($commonCautionDemandeRelatedByIdAgentPriseEnCharge)) {
            $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge->remove($this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge->search($commonCautionDemandeRelatedByIdAgentPriseEnCharge));
            if (null === $this->commonCautionDemandesRelatedByIdAgentPriseEnChargeScheduledForDeletion) {
                $this->commonCautionDemandesRelatedByIdAgentPriseEnChargeScheduledForDeletion = clone $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge;
                $this->commonCautionDemandesRelatedByIdAgentPriseEnChargeScheduledForDeletion->clear();
            }
            $this->commonCautionDemandesRelatedByIdAgentPriseEnChargeScheduledForDeletion[]= $commonCautionDemandeRelatedByIdAgentPriseEnCharge;
            $commonCautionDemandeRelatedByIdAgentPriseEnCharge->setCommonAgentBanquierRelatedByIdAgentPriseEnCharge(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgentBanquier is new, it will return
     * an empty collection; or if this CommonAgentBanquier has previously
     * been saved, it will retrieve related CommonCautionDemandesRelatedByIdAgentPriseEnCharge from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgentBanquier.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     */
    public function getCommonCautionDemandesRelatedByIdAgentPriseEnChargeJoinCommonTCompteBancaire($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonCautionDemandeQuery::create(null, $criteria);
        $query->joinWith('CommonTCompteBancaire', $join_behavior);

        return $this->getCommonCautionDemandesRelatedByIdAgentPriseEnCharge($query, $con);
    }

    /**
     * Clears out the collCommonCautionDemandesRelatedByIdSignataire1 collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgentBanquier The current object (for fluent API support)
     * @see        addCommonCautionDemandesRelatedByIdSignataire1()
     */
    public function clearCommonCautionDemandesRelatedByIdSignataire1()
    {
        $this->collCommonCautionDemandesRelatedByIdSignataire1 = null; // important to set this to null since that means it is uninitialized
        $this->collCommonCautionDemandesRelatedByIdSignataire1Partial = null;

        return $this;
    }

    /**
     * reset is the collCommonCautionDemandesRelatedByIdSignataire1 collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonCautionDemandesRelatedByIdSignataire1($v = true)
    {
        $this->collCommonCautionDemandesRelatedByIdSignataire1Partial = $v;
    }

    /**
     * Initializes the collCommonCautionDemandesRelatedByIdSignataire1 collection.
     *
     * By default this just sets the collCommonCautionDemandesRelatedByIdSignataire1 collection to an empty array (like clearcollCommonCautionDemandesRelatedByIdSignataire1());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonCautionDemandesRelatedByIdSignataire1($overrideExisting = true)
    {
        if (null !== $this->collCommonCautionDemandesRelatedByIdSignataire1 && !$overrideExisting) {
            return;
        }
        $this->collCommonCautionDemandesRelatedByIdSignataire1 = new PropelObjectCollection();
        $this->collCommonCautionDemandesRelatedByIdSignataire1->setModel('CommonCautionDemande');
    }

    /**
     * Gets an array of CommonCautionDemande objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgentBanquier is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     * @throws PropelException
     */
    public function getCommonCautionDemandesRelatedByIdSignataire1($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionDemandesRelatedByIdSignataire1Partial && !$this->isNew();
        if (null === $this->collCommonCautionDemandesRelatedByIdSignataire1 || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionDemandesRelatedByIdSignataire1) {
                // return empty collection
                $this->initCommonCautionDemandesRelatedByIdSignataire1();
            } else {
                $collCommonCautionDemandesRelatedByIdSignataire1 = CommonCautionDemandeQuery::create(null, $criteria)
                    ->filterByCommonAgentBanquierRelatedByIdSignataire1($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonCautionDemandesRelatedByIdSignataire1Partial && count($collCommonCautionDemandesRelatedByIdSignataire1)) {
                      $this->initCommonCautionDemandesRelatedByIdSignataire1(false);

                      foreach ($collCommonCautionDemandesRelatedByIdSignataire1 as $obj) {
                        if (false == $this->collCommonCautionDemandesRelatedByIdSignataire1->contains($obj)) {
                          $this->collCommonCautionDemandesRelatedByIdSignataire1->append($obj);
                        }
                      }

                      $this->collCommonCautionDemandesRelatedByIdSignataire1Partial = true;
                    }

                    $collCommonCautionDemandesRelatedByIdSignataire1->getInternalIterator()->rewind();

                    return $collCommonCautionDemandesRelatedByIdSignataire1;
                }

                if ($partial && $this->collCommonCautionDemandesRelatedByIdSignataire1) {
                    foreach ($this->collCommonCautionDemandesRelatedByIdSignataire1 as $obj) {
                        if ($obj->isNew()) {
                            $collCommonCautionDemandesRelatedByIdSignataire1[] = $obj;
                        }
                    }
                }

                $this->collCommonCautionDemandesRelatedByIdSignataire1 = $collCommonCautionDemandesRelatedByIdSignataire1;
                $this->collCommonCautionDemandesRelatedByIdSignataire1Partial = false;
            }
        }

        return $this->collCommonCautionDemandesRelatedByIdSignataire1;
    }

    /**
     * Sets a collection of CommonCautionDemandeRelatedByIdSignataire1 objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonCautionDemandesRelatedByIdSignataire1 A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setCommonCautionDemandesRelatedByIdSignataire1(PropelCollection $commonCautionDemandesRelatedByIdSignataire1, PropelPDO $con = null)
    {
        $commonCautionDemandesRelatedByIdSignataire1ToDelete = $this->getCommonCautionDemandesRelatedByIdSignataire1(new Criteria(), $con)->diff($commonCautionDemandesRelatedByIdSignataire1);


        $this->commonCautionDemandesRelatedByIdSignataire1ScheduledForDeletion = $commonCautionDemandesRelatedByIdSignataire1ToDelete;

        foreach ($commonCautionDemandesRelatedByIdSignataire1ToDelete as $commonCautionDemandeRelatedByIdSignataire1Removed) {
            $commonCautionDemandeRelatedByIdSignataire1Removed->setCommonAgentBanquierRelatedByIdSignataire1(null);
        }

        $this->collCommonCautionDemandesRelatedByIdSignataire1 = null;
        foreach ($commonCautionDemandesRelatedByIdSignataire1 as $commonCautionDemandeRelatedByIdSignataire1) {
            $this->addCommonCautionDemandeRelatedByIdSignataire1($commonCautionDemandeRelatedByIdSignataire1);
        }

        $this->collCommonCautionDemandesRelatedByIdSignataire1 = $commonCautionDemandesRelatedByIdSignataire1;
        $this->collCommonCautionDemandesRelatedByIdSignataire1Partial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonCautionDemande objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonCautionDemande objects.
     * @throws PropelException
     */
    public function countCommonCautionDemandesRelatedByIdSignataire1(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionDemandesRelatedByIdSignataire1Partial && !$this->isNew();
        if (null === $this->collCommonCautionDemandesRelatedByIdSignataire1 || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionDemandesRelatedByIdSignataire1) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonCautionDemandesRelatedByIdSignataire1());
            }
            $query = CommonCautionDemandeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentBanquierRelatedByIdSignataire1($this)
                ->count($con);
        }

        return count($this->collCommonCautionDemandesRelatedByIdSignataire1);
    }

    /**
     * Method called to associate a CommonCautionDemande object to this object
     * through the CommonCautionDemande foreign key attribute.
     *
     * @param   CommonCautionDemande $l CommonCautionDemande
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function addCommonCautionDemandeRelatedByIdSignataire1(CommonCautionDemande $l)
    {
        if ($this->collCommonCautionDemandesRelatedByIdSignataire1 === null) {
            $this->initCommonCautionDemandesRelatedByIdSignataire1();
            $this->collCommonCautionDemandesRelatedByIdSignataire1Partial = true;
        }
        if (!in_array($l, $this->collCommonCautionDemandesRelatedByIdSignataire1->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonCautionDemandeRelatedByIdSignataire1($l);
        }

        return $this;
    }

    /**
     * @param	CommonCautionDemandeRelatedByIdSignataire1 $commonCautionDemandeRelatedByIdSignataire1 The commonCautionDemandeRelatedByIdSignataire1 object to add.
     */
    protected function doAddCommonCautionDemandeRelatedByIdSignataire1($commonCautionDemandeRelatedByIdSignataire1)
    {
        $this->collCommonCautionDemandesRelatedByIdSignataire1[]= $commonCautionDemandeRelatedByIdSignataire1;
        $commonCautionDemandeRelatedByIdSignataire1->setCommonAgentBanquierRelatedByIdSignataire1($this);
    }

    /**
     * @param	CommonCautionDemandeRelatedByIdSignataire1 $commonCautionDemandeRelatedByIdSignataire1 The commonCautionDemandeRelatedByIdSignataire1 object to remove.
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function removeCommonCautionDemandeRelatedByIdSignataire1($commonCautionDemandeRelatedByIdSignataire1)
    {
        if ($this->getCommonCautionDemandesRelatedByIdSignataire1()->contains($commonCautionDemandeRelatedByIdSignataire1)) {
            $this->collCommonCautionDemandesRelatedByIdSignataire1->remove($this->collCommonCautionDemandesRelatedByIdSignataire1->search($commonCautionDemandeRelatedByIdSignataire1));
            if (null === $this->commonCautionDemandesRelatedByIdSignataire1ScheduledForDeletion) {
                $this->commonCautionDemandesRelatedByIdSignataire1ScheduledForDeletion = clone $this->collCommonCautionDemandesRelatedByIdSignataire1;
                $this->commonCautionDemandesRelatedByIdSignataire1ScheduledForDeletion->clear();
            }
            $this->commonCautionDemandesRelatedByIdSignataire1ScheduledForDeletion[]= $commonCautionDemandeRelatedByIdSignataire1;
            $commonCautionDemandeRelatedByIdSignataire1->setCommonAgentBanquierRelatedByIdSignataire1(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgentBanquier is new, it will return
     * an empty collection; or if this CommonAgentBanquier has previously
     * been saved, it will retrieve related CommonCautionDemandesRelatedByIdSignataire1 from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgentBanquier.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     */
    public function getCommonCautionDemandesRelatedByIdSignataire1JoinCommonTCompteBancaire($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonCautionDemandeQuery::create(null, $criteria);
        $query->joinWith('CommonTCompteBancaire', $join_behavior);

        return $this->getCommonCautionDemandesRelatedByIdSignataire1($query, $con);
    }

    /**
     * Clears out the collCommonCautionDemandesRelatedByIdSignataire2 collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgentBanquier The current object (for fluent API support)
     * @see        addCommonCautionDemandesRelatedByIdSignataire2()
     */
    public function clearCommonCautionDemandesRelatedByIdSignataire2()
    {
        $this->collCommonCautionDemandesRelatedByIdSignataire2 = null; // important to set this to null since that means it is uninitialized
        $this->collCommonCautionDemandesRelatedByIdSignataire2Partial = null;

        return $this;
    }

    /**
     * reset is the collCommonCautionDemandesRelatedByIdSignataire2 collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonCautionDemandesRelatedByIdSignataire2($v = true)
    {
        $this->collCommonCautionDemandesRelatedByIdSignataire2Partial = $v;
    }

    /**
     * Initializes the collCommonCautionDemandesRelatedByIdSignataire2 collection.
     *
     * By default this just sets the collCommonCautionDemandesRelatedByIdSignataire2 collection to an empty array (like clearcollCommonCautionDemandesRelatedByIdSignataire2());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonCautionDemandesRelatedByIdSignataire2($overrideExisting = true)
    {
        if (null !== $this->collCommonCautionDemandesRelatedByIdSignataire2 && !$overrideExisting) {
            return;
        }
        $this->collCommonCautionDemandesRelatedByIdSignataire2 = new PropelObjectCollection();
        $this->collCommonCautionDemandesRelatedByIdSignataire2->setModel('CommonCautionDemande');
    }

    /**
     * Gets an array of CommonCautionDemande objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgentBanquier is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     * @throws PropelException
     */
    public function getCommonCautionDemandesRelatedByIdSignataire2($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionDemandesRelatedByIdSignataire2Partial && !$this->isNew();
        if (null === $this->collCommonCautionDemandesRelatedByIdSignataire2 || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionDemandesRelatedByIdSignataire2) {
                // return empty collection
                $this->initCommonCautionDemandesRelatedByIdSignataire2();
            } else {
                $collCommonCautionDemandesRelatedByIdSignataire2 = CommonCautionDemandeQuery::create(null, $criteria)
                    ->filterByCommonAgentBanquierRelatedByIdSignataire2($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonCautionDemandesRelatedByIdSignataire2Partial && count($collCommonCautionDemandesRelatedByIdSignataire2)) {
                      $this->initCommonCautionDemandesRelatedByIdSignataire2(false);

                      foreach ($collCommonCautionDemandesRelatedByIdSignataire2 as $obj) {
                        if (false == $this->collCommonCautionDemandesRelatedByIdSignataire2->contains($obj)) {
                          $this->collCommonCautionDemandesRelatedByIdSignataire2->append($obj);
                        }
                      }

                      $this->collCommonCautionDemandesRelatedByIdSignataire2Partial = true;
                    }

                    $collCommonCautionDemandesRelatedByIdSignataire2->getInternalIterator()->rewind();

                    return $collCommonCautionDemandesRelatedByIdSignataire2;
                }

                if ($partial && $this->collCommonCautionDemandesRelatedByIdSignataire2) {
                    foreach ($this->collCommonCautionDemandesRelatedByIdSignataire2 as $obj) {
                        if ($obj->isNew()) {
                            $collCommonCautionDemandesRelatedByIdSignataire2[] = $obj;
                        }
                    }
                }

                $this->collCommonCautionDemandesRelatedByIdSignataire2 = $collCommonCautionDemandesRelatedByIdSignataire2;
                $this->collCommonCautionDemandesRelatedByIdSignataire2Partial = false;
            }
        }

        return $this->collCommonCautionDemandesRelatedByIdSignataire2;
    }

    /**
     * Sets a collection of CommonCautionDemandeRelatedByIdSignataire2 objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonCautionDemandesRelatedByIdSignataire2 A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setCommonCautionDemandesRelatedByIdSignataire2(PropelCollection $commonCautionDemandesRelatedByIdSignataire2, PropelPDO $con = null)
    {
        $commonCautionDemandesRelatedByIdSignataire2ToDelete = $this->getCommonCautionDemandesRelatedByIdSignataire2(new Criteria(), $con)->diff($commonCautionDemandesRelatedByIdSignataire2);


        $this->commonCautionDemandesRelatedByIdSignataire2ScheduledForDeletion = $commonCautionDemandesRelatedByIdSignataire2ToDelete;

        foreach ($commonCautionDemandesRelatedByIdSignataire2ToDelete as $commonCautionDemandeRelatedByIdSignataire2Removed) {
            $commonCautionDemandeRelatedByIdSignataire2Removed->setCommonAgentBanquierRelatedByIdSignataire2(null);
        }

        $this->collCommonCautionDemandesRelatedByIdSignataire2 = null;
        foreach ($commonCautionDemandesRelatedByIdSignataire2 as $commonCautionDemandeRelatedByIdSignataire2) {
            $this->addCommonCautionDemandeRelatedByIdSignataire2($commonCautionDemandeRelatedByIdSignataire2);
        }

        $this->collCommonCautionDemandesRelatedByIdSignataire2 = $commonCautionDemandesRelatedByIdSignataire2;
        $this->collCommonCautionDemandesRelatedByIdSignataire2Partial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonCautionDemande objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonCautionDemande objects.
     * @throws PropelException
     */
    public function countCommonCautionDemandesRelatedByIdSignataire2(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionDemandesRelatedByIdSignataire2Partial && !$this->isNew();
        if (null === $this->collCommonCautionDemandesRelatedByIdSignataire2 || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionDemandesRelatedByIdSignataire2) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonCautionDemandesRelatedByIdSignataire2());
            }
            $query = CommonCautionDemandeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentBanquierRelatedByIdSignataire2($this)
                ->count($con);
        }

        return count($this->collCommonCautionDemandesRelatedByIdSignataire2);
    }

    /**
     * Method called to associate a CommonCautionDemande object to this object
     * through the CommonCautionDemande foreign key attribute.
     *
     * @param   CommonCautionDemande $l CommonCautionDemande
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function addCommonCautionDemandeRelatedByIdSignataire2(CommonCautionDemande $l)
    {
        if ($this->collCommonCautionDemandesRelatedByIdSignataire2 === null) {
            $this->initCommonCautionDemandesRelatedByIdSignataire2();
            $this->collCommonCautionDemandesRelatedByIdSignataire2Partial = true;
        }
        if (!in_array($l, $this->collCommonCautionDemandesRelatedByIdSignataire2->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonCautionDemandeRelatedByIdSignataire2($l);
        }

        return $this;
    }

    /**
     * @param	CommonCautionDemandeRelatedByIdSignataire2 $commonCautionDemandeRelatedByIdSignataire2 The commonCautionDemandeRelatedByIdSignataire2 object to add.
     */
    protected function doAddCommonCautionDemandeRelatedByIdSignataire2($commonCautionDemandeRelatedByIdSignataire2)
    {
        $this->collCommonCautionDemandesRelatedByIdSignataire2[]= $commonCautionDemandeRelatedByIdSignataire2;
        $commonCautionDemandeRelatedByIdSignataire2->setCommonAgentBanquierRelatedByIdSignataire2($this);
    }

    /**
     * @param	CommonCautionDemandeRelatedByIdSignataire2 $commonCautionDemandeRelatedByIdSignataire2 The commonCautionDemandeRelatedByIdSignataire2 object to remove.
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function removeCommonCautionDemandeRelatedByIdSignataire2($commonCautionDemandeRelatedByIdSignataire2)
    {
        if ($this->getCommonCautionDemandesRelatedByIdSignataire2()->contains($commonCautionDemandeRelatedByIdSignataire2)) {
            $this->collCommonCautionDemandesRelatedByIdSignataire2->remove($this->collCommonCautionDemandesRelatedByIdSignataire2->search($commonCautionDemandeRelatedByIdSignataire2));
            if (null === $this->commonCautionDemandesRelatedByIdSignataire2ScheduledForDeletion) {
                $this->commonCautionDemandesRelatedByIdSignataire2ScheduledForDeletion = clone $this->collCommonCautionDemandesRelatedByIdSignataire2;
                $this->commonCautionDemandesRelatedByIdSignataire2ScheduledForDeletion->clear();
            }
            $this->commonCautionDemandesRelatedByIdSignataire2ScheduledForDeletion[]= $commonCautionDemandeRelatedByIdSignataire2;
            $commonCautionDemandeRelatedByIdSignataire2->setCommonAgentBanquierRelatedByIdSignataire2(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgentBanquier is new, it will return
     * an empty collection; or if this CommonAgentBanquier has previously
     * been saved, it will retrieve related CommonCautionDemandesRelatedByIdSignataire2 from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgentBanquier.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     */
    public function getCommonCautionDemandesRelatedByIdSignataire2JoinCommonTCompteBancaire($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonCautionDemandeQuery::create(null, $criteria);
        $query->joinWith('CommonTCompteBancaire', $join_behavior);

        return $this->getCommonCautionDemandesRelatedByIdSignataire2($query, $con);
    }

    /**
     * Clears out the collCommonCautionSignataireDemandes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgentBanquier The current object (for fluent API support)
     * @see        addCommonCautionSignataireDemandes()
     */
    public function clearCommonCautionSignataireDemandes()
    {
        $this->collCommonCautionSignataireDemandes = null; // important to set this to null since that means it is uninitialized
        $this->collCommonCautionSignataireDemandesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonCautionSignataireDemandes collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonCautionSignataireDemandes($v = true)
    {
        $this->collCommonCautionSignataireDemandesPartial = $v;
    }

    /**
     * Initializes the collCommonCautionSignataireDemandes collection.
     *
     * By default this just sets the collCommonCautionSignataireDemandes collection to an empty array (like clearcollCommonCautionSignataireDemandes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonCautionSignataireDemandes($overrideExisting = true)
    {
        if (null !== $this->collCommonCautionSignataireDemandes && !$overrideExisting) {
            return;
        }
        $this->collCommonCautionSignataireDemandes = new PropelObjectCollection();
        $this->collCommonCautionSignataireDemandes->setModel('CommonCautionSignataireDemande');
    }

    /**
     * Gets an array of CommonCautionSignataireDemande objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgentBanquier is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonCautionSignataireDemande[] List of CommonCautionSignataireDemande objects
     * @throws PropelException
     */
    public function getCommonCautionSignataireDemandes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionSignataireDemandesPartial && !$this->isNew();
        if (null === $this->collCommonCautionSignataireDemandes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionSignataireDemandes) {
                // return empty collection
                $this->initCommonCautionSignataireDemandes();
            } else {
                $collCommonCautionSignataireDemandes = CommonCautionSignataireDemandeQuery::create(null, $criteria)
                    ->filterByCommonAgentBanquier($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonCautionSignataireDemandesPartial && count($collCommonCautionSignataireDemandes)) {
                      $this->initCommonCautionSignataireDemandes(false);

                      foreach ($collCommonCautionSignataireDemandes as $obj) {
                        if (false == $this->collCommonCautionSignataireDemandes->contains($obj)) {
                          $this->collCommonCautionSignataireDemandes->append($obj);
                        }
                      }

                      $this->collCommonCautionSignataireDemandesPartial = true;
                    }

                    $collCommonCautionSignataireDemandes->getInternalIterator()->rewind();

                    return $collCommonCautionSignataireDemandes;
                }

                if ($partial && $this->collCommonCautionSignataireDemandes) {
                    foreach ($this->collCommonCautionSignataireDemandes as $obj) {
                        if ($obj->isNew()) {
                            $collCommonCautionSignataireDemandes[] = $obj;
                        }
                    }
                }

                $this->collCommonCautionSignataireDemandes = $collCommonCautionSignataireDemandes;
                $this->collCommonCautionSignataireDemandesPartial = false;
            }
        }

        return $this->collCommonCautionSignataireDemandes;
    }

    /**
     * Sets a collection of CommonCautionSignataireDemande objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonCautionSignataireDemandes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function setCommonCautionSignataireDemandes(PropelCollection $commonCautionSignataireDemandes, PropelPDO $con = null)
    {
        $commonCautionSignataireDemandesToDelete = $this->getCommonCautionSignataireDemandes(new Criteria(), $con)->diff($commonCautionSignataireDemandes);


        $this->commonCautionSignataireDemandesScheduledForDeletion = $commonCautionSignataireDemandesToDelete;

        foreach ($commonCautionSignataireDemandesToDelete as $commonCautionSignataireDemandeRemoved) {
            $commonCautionSignataireDemandeRemoved->setCommonAgentBanquier(null);
        }

        $this->collCommonCautionSignataireDemandes = null;
        foreach ($commonCautionSignataireDemandes as $commonCautionSignataireDemande) {
            $this->addCommonCautionSignataireDemande($commonCautionSignataireDemande);
        }

        $this->collCommonCautionSignataireDemandes = $commonCautionSignataireDemandes;
        $this->collCommonCautionSignataireDemandesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonCautionSignataireDemande objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonCautionSignataireDemande objects.
     * @throws PropelException
     */
    public function countCommonCautionSignataireDemandes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionSignataireDemandesPartial && !$this->isNew();
        if (null === $this->collCommonCautionSignataireDemandes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionSignataireDemandes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonCautionSignataireDemandes());
            }
            $query = CommonCautionSignataireDemandeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentBanquier($this)
                ->count($con);
        }

        return count($this->collCommonCautionSignataireDemandes);
    }

    /**
     * Method called to associate a CommonCautionSignataireDemande object to this object
     * through the CommonCautionSignataireDemande foreign key attribute.
     *
     * @param   CommonCautionSignataireDemande $l CommonCautionSignataireDemande
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function addCommonCautionSignataireDemande(CommonCautionSignataireDemande $l)
    {
        if ($this->collCommonCautionSignataireDemandes === null) {
            $this->initCommonCautionSignataireDemandes();
            $this->collCommonCautionSignataireDemandesPartial = true;
        }
        if (!in_array($l, $this->collCommonCautionSignataireDemandes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonCautionSignataireDemande($l);
        }

        return $this;
    }

    /**
     * @param	CommonCautionSignataireDemande $commonCautionSignataireDemande The commonCautionSignataireDemande object to add.
     */
    protected function doAddCommonCautionSignataireDemande($commonCautionSignataireDemande)
    {
        $this->collCommonCautionSignataireDemandes[]= $commonCautionSignataireDemande;
        $commonCautionSignataireDemande->setCommonAgentBanquier($this);
    }

    /**
     * @param	CommonCautionSignataireDemande $commonCautionSignataireDemande The commonCautionSignataireDemande object to remove.
     * @return CommonAgentBanquier The current object (for fluent API support)
     */
    public function removeCommonCautionSignataireDemande($commonCautionSignataireDemande)
    {
        if ($this->getCommonCautionSignataireDemandes()->contains($commonCautionSignataireDemande)) {
            $this->collCommonCautionSignataireDemandes->remove($this->collCommonCautionSignataireDemandes->search($commonCautionSignataireDemande));
            if (null === $this->commonCautionSignataireDemandesScheduledForDeletion) {
                $this->commonCautionSignataireDemandesScheduledForDeletion = clone $this->collCommonCautionSignataireDemandes;
                $this->commonCautionSignataireDemandesScheduledForDeletion->clear();
            }
            $this->commonCautionSignataireDemandesScheduledForDeletion[]= clone $commonCautionSignataireDemande;
            $commonCautionSignataireDemande->setCommonAgentBanquier(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgentBanquier is new, it will return
     * an empty collection; or if this CommonAgentBanquier has previously
     * been saved, it will retrieve related CommonCautionSignataireDemandes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgentBanquier.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonCautionSignataireDemande[] List of CommonCautionSignataireDemande objects
     */
    public function getCommonCautionSignataireDemandesJoinCommonCautionDemande($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonCautionSignataireDemandeQuery::create(null, $criteria);
        $query->joinWith('CommonCautionDemande', $join_behavior);

        return $this->getCommonCautionSignataireDemandes($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->username = null;
        $this->username_canonical = null;
        $this->email = null;
        $this->email_canonical = null;
        $this->enabled = null;
        $this->salt = null;
        $this->password = null;
        $this->last_login = null;
        $this->confirmation_token = null;
        $this->password_requested_at = null;
        $this->roles = null;
        $this->id_banque = null;
        $this->id_profil = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->code_ville = null;
        $this->code_agence = null;
        $this->id_ref_ville = null;
        $this->nom = null;
        $this->prenom = null;
        $this->telephone = null;
        $this->deleted = null;
        $this->notification = null;
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
            if ($this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet) {
                foreach ($this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation) {
                foreach ($this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge) {
                foreach ($this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonCautionDemandesRelatedByIdSignataire1) {
                foreach ($this->collCommonCautionDemandesRelatedByIdSignataire1 as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonCautionDemandesRelatedByIdSignataire2) {
                foreach ($this->collCommonCautionDemandesRelatedByIdSignataire2 as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonCautionSignataireDemandes) {
                foreach ($this->collCommonCautionSignataireDemandes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonCautionProfil instanceof Persistent) {
              $this->aCommonCautionProfil->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet instanceof PropelCollection) {
            $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet->clearIterator();
        }
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierRejet = null;
        if ($this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation instanceof PropelCollection) {
            $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation->clearIterator();
        }
        $this->collCommonCautionDemandesRelatedByIdAgentBanquierValidation = null;
        if ($this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge instanceof PropelCollection) {
            $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge->clearIterator();
        }
        $this->collCommonCautionDemandesRelatedByIdAgentPriseEnCharge = null;
        if ($this->collCommonCautionDemandesRelatedByIdSignataire1 instanceof PropelCollection) {
            $this->collCommonCautionDemandesRelatedByIdSignataire1->clearIterator();
        }
        $this->collCommonCautionDemandesRelatedByIdSignataire1 = null;
        if ($this->collCommonCautionDemandesRelatedByIdSignataire2 instanceof PropelCollection) {
            $this->collCommonCautionDemandesRelatedByIdSignataire2->clearIterator();
        }
        $this->collCommonCautionDemandesRelatedByIdSignataire2 = null;
        if ($this->collCommonCautionSignataireDemandes instanceof PropelCollection) {
            $this->collCommonCautionSignataireDemandes->clearIterator();
        }
        $this->collCommonCautionSignataireDemandes = null;
        $this->aCommonCautionProfil = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonAgentBanquierPeer::DEFAULT_STRING_FORMAT);
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
