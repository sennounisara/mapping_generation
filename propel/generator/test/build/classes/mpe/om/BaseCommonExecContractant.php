<?php


/**
 * Base class that represents a row from the 'exec_contractant' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecContractant extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecContractantPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecContractantPeer
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
     * The value for the id_contrat field.
     * @var        int
     */
    protected $id_contrat;

    /**
     * The value for the id_type_contractant field.
     * @var        int
     */
    protected $id_type_contractant;

    /**
     * The value for the id_type_structure field.
     * @var        int
     */
    protected $id_type_structure;

    /**
     * The value for the id_parent field.
     * @var        int
     */
    protected $id_parent;

    /**
     * The value for the raison_sociale field.
     * @var        string
     */
    protected $raison_sociale;

    /**
     * The value for the adresse field.
     * @var        string
     */
    protected $adresse;

    /**
     * The value for the complement_adresse field.
     * @var        string
     */
    protected $complement_adresse;

    /**
     * The value for the code_postal field.
     * @var        int
     */
    protected $code_postal;

    /**
     * The value for the ville field.
     * @var        int
     */
    protected $ville;

    /**
     * The value for the telephone field.
     * @var        string
     */
    protected $telephone;

    /**
     * The value for the fax field.
     * @var        string
     */
    protected $fax;

    /**
     * The value for the rc_num field.
     * @var        string
     */
    protected $rc_num;

    /**
     * The value for the rc_ville field.
     * @var        int
     */
    protected $rc_ville;

    /**
     * The value for the ice field.
     * @var        string
     */
    protected $ice;

    /**
     * The value for the ifu field.
     * @var        string
     */
    protected $ifu;

    /**
     * The value for the montant_attribue_ht field.
     * @var        double
     */
    protected $montant_attribue_ht;

    /**
     * The value for the montant_attribue_ttc field.
     * @var        double
     */
    protected $montant_attribue_ttc;

    /**
     * The value for the accessible_fournisseur field.
     * @var        int
     */
    protected $accessible_fournisseur;

    /**
     * The value for the date_crea field.
     * @var        string
     */
    protected $date_crea;

    /**
     * The value for the id_agent_crea field.
     * @var        int
     */
    protected $id_agent_crea;

    /**
     * The value for the date_modif field.
     * @var        string
     */
    protected $date_modif;

    /**
     * The value for the id_agent_modif field.
     * @var        int
     */
    protected $id_agent_modif;

    /**
     * @var        CommonExecContrat
     */
    protected $aCommonExecContrat;

    /**
     * @var        CommonExecContractant
     */
    protected $aCommonExecContractantRelatedByIdParent;

    /**
     * @var        CommonExecTypeContractant
     */
    protected $aCommonExecTypeContractant;

    /**
     * @var        CommonExecTypeStructure
     */
    protected $aCommonExecTypeStructure;

    /**
     * @var        PropelObjectCollection|CommonExecContact[] Collection to store aggregation of CommonExecContact objects.
     */
    protected $collCommonExecContacts;
    protected $collCommonExecContactsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecContractant[] Collection to store aggregation of CommonExecContractant objects.
     */
    protected $collCommonExecContractantsRelatedById;
    protected $collCommonExecContractantsRelatedByIdPartial;

    /**
     * @var        PropelObjectCollection|CommonExecEvenement[] Collection to store aggregation of CommonExecEvenement objects.
     */
    protected $collCommonExecEvenements;
    protected $collCommonExecEvenementsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecFacture[] Collection to store aggregation of CommonExecFacture objects.
     */
    protected $collCommonExecFactures;
    protected $collCommonExecFacturesPartial;

    /**
     * @var        PropelObjectCollection|CommonExecInscritContrat[] Collection to store aggregation of CommonExecInscritContrat objects.
     */
    protected $collCommonExecInscritContrats;
    protected $collCommonExecInscritContratsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecRepartition[] Collection to store aggregation of CommonExecRepartition objects.
     */
    protected $collCommonExecRepartitions;
    protected $collCommonExecRepartitionsPartial;

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
    protected $commonExecContactsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecContractantsRelatedByIdScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecEvenementsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecFacturesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecInscritContratsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecRepartitionsScheduledForDeletion = null;

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
     * Get the [id_contrat] column value.
     * 
     * @return int
     */
    public function getIdContrat()
    {

        return $this->id_contrat;
    }

    /**
     * Get the [id_type_contractant] column value.
     * 
     * @return int
     */
    public function getIdTypeContractant()
    {

        return $this->id_type_contractant;
    }

    /**
     * Get the [id_type_structure] column value.
     * 
     * @return int
     */
    public function getIdTypeStructure()
    {

        return $this->id_type_structure;
    }

    /**
     * Get the [id_parent] column value.
     * 
     * @return int
     */
    public function getIdParent()
    {

        return $this->id_parent;
    }

    /**
     * Get the [raison_sociale] column value.
     * 
     * @return string
     */
    public function getRaisonSociale()
    {

        return $this->raison_sociale;
    }

    /**
     * Get the [adresse] column value.
     * 
     * @return string
     */
    public function getAdresse()
    {

        return $this->adresse;
    }

    /**
     * Get the [complement_adresse] column value.
     * 
     * @return string
     */
    public function getComplementAdresse()
    {

        return $this->complement_adresse;
    }

    /**
     * Get the [code_postal] column value.
     * 
     * @return int
     */
    public function getCodePostal()
    {

        return $this->code_postal;
    }

    /**
     * Get the [ville] column value.
     * 
     * @return int
     */
    public function getVille()
    {

        return $this->ville;
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
     * Get the [fax] column value.
     * 
     * @return string
     */
    public function getFax()
    {

        return $this->fax;
    }

    /**
     * Get the [rc_num] column value.
     * 
     * @return string
     */
    public function getRcNum()
    {

        return $this->rc_num;
    }

    /**
     * Get the [rc_ville] column value.
     * 
     * @return int
     */
    public function getRcVille()
    {

        return $this->rc_ville;
    }

    /**
     * Get the [ice] column value.
     * 
     * @return string
     */
    public function getIce()
    {

        return $this->ice;
    }

    /**
     * Get the [ifu] column value.
     * 
     * @return string
     */
    public function getIfu()
    {

        return $this->ifu;
    }

    /**
     * Get the [montant_attribue_ht] column value.
     * 
     * @return double
     */
    public function getMontantAttribueHt()
    {

        return $this->montant_attribue_ht;
    }

    /**
     * Get the [montant_attribue_ttc] column value.
     * 
     * @return double
     */
    public function getMontantAttribueTtc()
    {

        return $this->montant_attribue_ttc;
    }

    /**
     * Get the [accessible_fournisseur] column value.
     * 
     * @return int
     */
    public function getAccessibleFournisseur()
    {

        return $this->accessible_fournisseur;
    }

    /**
     * Get the [optionally formatted] temporal [date_crea] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCrea($format = 'Y-m-d H:i:s')
    {
        if ($this->date_crea === null) {
            return null;
        }

        if ($this->date_crea === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_crea);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_crea, true), $x);
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
     * Get the [id_agent_crea] column value.
     * 
     * @return int
     */
    public function getIdAgentCrea()
    {

        return $this->id_agent_crea;
    }

    /**
     * Get the [optionally formatted] temporal [date_modif] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateModif($format = 'Y-m-d H:i:s')
    {
        if ($this->date_modif === null) {
            return null;
        }

        if ($this->date_modif === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_modif);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_modif, true), $x);
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
     * Get the [id_agent_modif] column value.
     * 
     * @return int
     */
    public function getIdAgentModif()
    {

        return $this->id_agent_modif;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::ID_CONTRAT;
        }

        if ($this->aCommonExecContrat !== null && $this->aCommonExecContrat->getIdContrat() !== $v) {
            $this->aCommonExecContrat = null;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [id_type_contractant] column.
     * 
     * @param int $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setIdTypeContractant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_contractant !== $v) {
            $this->id_type_contractant = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::ID_TYPE_CONTRACTANT;
        }

        if ($this->aCommonExecTypeContractant !== null && $this->aCommonExecTypeContractant->getId() !== $v) {
            $this->aCommonExecTypeContractant = null;
        }


        return $this;
    } // setIdTypeContractant()

    /**
     * Set the value of [id_type_structure] column.
     * 
     * @param int $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setIdTypeStructure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_structure !== $v) {
            $this->id_type_structure = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::ID_TYPE_STRUCTURE;
        }

        if ($this->aCommonExecTypeStructure !== null && $this->aCommonExecTypeStructure->getId() !== $v) {
            $this->aCommonExecTypeStructure = null;
        }


        return $this;
    } // setIdTypeStructure()

    /**
     * Set the value of [id_parent] column.
     * 
     * @param int $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setIdParent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_parent !== $v) {
            $this->id_parent = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::ID_PARENT;
        }

        if ($this->aCommonExecContractantRelatedByIdParent !== null && $this->aCommonExecContractantRelatedByIdParent->getId() !== $v) {
            $this->aCommonExecContractantRelatedByIdParent = null;
        }


        return $this;
    } // setIdParent()

    /**
     * Set the value of [raison_sociale] column.
     * 
     * @param string $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setRaisonSociale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->raison_sociale !== $v) {
            $this->raison_sociale = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::RAISON_SOCIALE;
        }


        return $this;
    } // setRaisonSociale()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [complement_adresse] column.
     * 
     * @param string $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setComplementAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->complement_adresse !== $v) {
            $this->complement_adresse = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::COMPLEMENT_ADRESSE;
        }


        return $this;
    } // setComplementAdresse()

    /**
     * Set the value of [code_postal] column.
     * 
     * @param int $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setCodePostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->code_postal !== $v) {
            $this->code_postal = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::CODE_POSTAL;
        }


        return $this;
    } // setCodePostal()

    /**
     * Set the value of [ville] column.
     * 
     * @param int $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [rc_num] column.
     * 
     * @param string $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setRcNum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rc_num !== $v) {
            $this->rc_num = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::RC_NUM;
        }


        return $this;
    } // setRcNum()

    /**
     * Set the value of [rc_ville] column.
     * 
     * @param int $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setRcVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rc_ville !== $v) {
            $this->rc_ville = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::RC_VILLE;
        }


        return $this;
    } // setRcVille()

    /**
     * Set the value of [ice] column.
     * 
     * @param string $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setIce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ice !== $v) {
            $this->ice = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::ICE;
        }


        return $this;
    } // setIce()

    /**
     * Set the value of [ifu] column.
     * 
     * @param string $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setIfu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ifu !== $v) {
            $this->ifu = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::IFU;
        }


        return $this;
    } // setIfu()

    /**
     * Set the value of [montant_attribue_ht] column.
     * 
     * @param double $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setMontantAttribueHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_attribue_ht !== $v) {
            $this->montant_attribue_ht = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::MONTANT_ATTRIBUE_HT;
        }


        return $this;
    } // setMontantAttribueHt()

    /**
     * Set the value of [montant_attribue_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setMontantAttribueTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_attribue_ttc !== $v) {
            $this->montant_attribue_ttc = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::MONTANT_ATTRIBUE_TTC;
        }


        return $this;
    } // setMontantAttribueTtc()

    /**
     * Set the value of [accessible_fournisseur] column.
     * 
     * @param int $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setAccessibleFournisseur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->accessible_fournisseur !== $v) {
            $this->accessible_fournisseur = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::ACCESSIBLE_FOURNISSEUR;
        }


        return $this;
    } // setAccessibleFournisseur()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonExecContractantPeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [id_agent_crea] column.
     * 
     * @param int $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setIdAgentCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_crea !== $v) {
            $this->id_agent_crea = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::ID_AGENT_CREA;
        }


        return $this;
    } // setIdAgentCrea()

    /**
     * Sets the value of [date_modif] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setDateModif($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modif !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modif !== null && $tmpDt = new DateTime($this->date_modif)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modif = $newDateAsString;
                $this->modifiedColumns[] = CommonExecContractantPeer::DATE_MODIF;
            }
        } // if either are not null


        return $this;
    } // setDateModif()

    /**
     * Set the value of [id_agent_modif] column.
     * 
     * @param int $v new value
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setIdAgentModif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_modif !== $v) {
            $this->id_agent_modif = $v;
            $this->modifiedColumns[] = CommonExecContractantPeer::ID_AGENT_MODIF;
        }


        return $this;
    } // setIdAgentModif()

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
            $this->id_contrat = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_type_contractant = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_type_structure = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_parent = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->raison_sociale = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->adresse = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->complement_adresse = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->code_postal = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->ville = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->telephone = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->fax = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->rc_num = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->rc_ville = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->ice = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->ifu = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->montant_attribue_ht = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->montant_attribue_ttc = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->accessible_fournisseur = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->date_crea = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->id_agent_crea = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->date_modif = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->id_agent_modif = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 23; // 23 = CommonExecContractantPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecContractant object", $e);
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

        if ($this->aCommonExecContrat !== null && $this->id_contrat !== $this->aCommonExecContrat->getIdContrat()) {
            $this->aCommonExecContrat = null;
        }
        if ($this->aCommonExecTypeContractant !== null && $this->id_type_contractant !== $this->aCommonExecTypeContractant->getId()) {
            $this->aCommonExecTypeContractant = null;
        }
        if ($this->aCommonExecTypeStructure !== null && $this->id_type_structure !== $this->aCommonExecTypeStructure->getId()) {
            $this->aCommonExecTypeStructure = null;
        }
        if ($this->aCommonExecContractantRelatedByIdParent !== null && $this->id_parent !== $this->aCommonExecContractantRelatedByIdParent->getId()) {
            $this->aCommonExecContractantRelatedByIdParent = null;
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
            $con = Propel::getConnection(CommonExecContractantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecContractantPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonExecContrat = null;
            $this->aCommonExecContractantRelatedByIdParent = null;
            $this->aCommonExecTypeContractant = null;
            $this->aCommonExecTypeStructure = null;
            $this->collCommonExecContacts = null;

            $this->collCommonExecContractantsRelatedById = null;

            $this->collCommonExecEvenements = null;

            $this->collCommonExecFactures = null;

            $this->collCommonExecInscritContrats = null;

            $this->collCommonExecRepartitions = null;

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
            $con = Propel::getConnection(CommonExecContractantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecContractantQuery::create()
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
            $con = Propel::getConnection(CommonExecContractantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecContractantPeer::addInstanceToPool($this);
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

            if ($this->aCommonExecContrat !== null) {
                if ($this->aCommonExecContrat->isModified() || $this->aCommonExecContrat->isNew()) {
                    $affectedRows += $this->aCommonExecContrat->save($con);
                }
                $this->setCommonExecContrat($this->aCommonExecContrat);
            }

            if ($this->aCommonExecContractantRelatedByIdParent !== null) {
                if ($this->aCommonExecContractantRelatedByIdParent->isModified() || $this->aCommonExecContractantRelatedByIdParent->isNew()) {
                    $affectedRows += $this->aCommonExecContractantRelatedByIdParent->save($con);
                }
                $this->setCommonExecContractantRelatedByIdParent($this->aCommonExecContractantRelatedByIdParent);
            }

            if ($this->aCommonExecTypeContractant !== null) {
                if ($this->aCommonExecTypeContractant->isModified() || $this->aCommonExecTypeContractant->isNew()) {
                    $affectedRows += $this->aCommonExecTypeContractant->save($con);
                }
                $this->setCommonExecTypeContractant($this->aCommonExecTypeContractant);
            }

            if ($this->aCommonExecTypeStructure !== null) {
                if ($this->aCommonExecTypeStructure->isModified() || $this->aCommonExecTypeStructure->isNew()) {
                    $affectedRows += $this->aCommonExecTypeStructure->save($con);
                }
                $this->setCommonExecTypeStructure($this->aCommonExecTypeStructure);
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

            if ($this->commonExecContactsScheduledForDeletion !== null) {
                if (!$this->commonExecContactsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecContactsScheduledForDeletion as $commonExecContact) {
                        // need to save related object because we set the relation to null
                        $commonExecContact->save($con);
                    }
                    $this->commonExecContactsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecContacts !== null) {
                foreach ($this->collCommonExecContacts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecContractantsRelatedByIdScheduledForDeletion !== null) {
                if (!$this->commonExecContractantsRelatedByIdScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecContractantsRelatedByIdScheduledForDeletion as $commonExecContractantRelatedById) {
                        // need to save related object because we set the relation to null
                        $commonExecContractantRelatedById->save($con);
                    }
                    $this->commonExecContractantsRelatedByIdScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecContractantsRelatedById !== null) {
                foreach ($this->collCommonExecContractantsRelatedById as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecEvenementsScheduledForDeletion !== null) {
                if (!$this->commonExecEvenementsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecEvenementsScheduledForDeletion as $commonExecEvenement) {
                        // need to save related object because we set the relation to null
                        $commonExecEvenement->save($con);
                    }
                    $this->commonExecEvenementsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecEvenements !== null) {
                foreach ($this->collCommonExecEvenements as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecFacturesScheduledForDeletion !== null) {
                if (!$this->commonExecFacturesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecFacturesScheduledForDeletion as $commonExecFacture) {
                        // need to save related object because we set the relation to null
                        $commonExecFacture->save($con);
                    }
                    $this->commonExecFacturesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecFactures !== null) {
                foreach ($this->collCommonExecFactures as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecInscritContratsScheduledForDeletion !== null) {
                if (!$this->commonExecInscritContratsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecInscritContratsScheduledForDeletion as $commonExecInscritContrat) {
                        // need to save related object because we set the relation to null
                        $commonExecInscritContrat->save($con);
                    }
                    $this->commonExecInscritContratsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecInscritContrats !== null) {
                foreach ($this->collCommonExecInscritContrats as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecRepartitionsScheduledForDeletion !== null) {
                if (!$this->commonExecRepartitionsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecRepartitionsScheduledForDeletion as $commonExecRepartition) {
                        // need to save related object because we set the relation to null
                        $commonExecRepartition->save($con);
                    }
                    $this->commonExecRepartitionsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecRepartitions !== null) {
                foreach ($this->collCommonExecRepartitions as $referrerFK) {
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

        $this->modifiedColumns[] = CommonExecContractantPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecContractantPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecContractantPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::ID_TYPE_CONTRACTANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_contractant`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::ID_TYPE_STRUCTURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_structure`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::ID_PARENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_parent`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::RAISON_SOCIALE)) {
            $modifiedColumns[':p' . $index++]  = '`raison_sociale`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::COMPLEMENT_ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`complement_adresse`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::CODE_POSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`code_postal`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`telephone`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::RC_NUM)) {
            $modifiedColumns[':p' . $index++]  = '`rc_num`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::RC_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`rc_ville`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::ICE)) {
            $modifiedColumns[':p' . $index++]  = '`ice`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::IFU)) {
            $modifiedColumns[':p' . $index++]  = '`ifu`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::MONTANT_ATTRIBUE_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_attribue_ht`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::MONTANT_ATTRIBUE_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_attribue_ttc`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::ACCESSIBLE_FOURNISSEUR)) {
            $modifiedColumns[':p' . $index++]  = '`accessible_fournisseur`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`date_crea`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::ID_AGENT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_crea`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::DATE_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`date_modif`';
        }
        if ($this->isColumnModified(CommonExecContractantPeer::ID_AGENT_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_modif`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_contractant` (%s) VALUES (%s)',
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
                    case '`id_contrat`':						
                        $stmt->bindValue($identifier, $this->id_contrat, PDO::PARAM_INT);
                        break;
                    case '`id_type_contractant`':						
                        $stmt->bindValue($identifier, $this->id_type_contractant, PDO::PARAM_INT);
                        break;
                    case '`id_type_structure`':						
                        $stmt->bindValue($identifier, $this->id_type_structure, PDO::PARAM_INT);
                        break;
                    case '`id_parent`':						
                        $stmt->bindValue($identifier, $this->id_parent, PDO::PARAM_INT);
                        break;
                    case '`raison_sociale`':						
                        $stmt->bindValue($identifier, $this->raison_sociale, PDO::PARAM_STR);
                        break;
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`complement_adresse`':						
                        $stmt->bindValue($identifier, $this->complement_adresse, PDO::PARAM_STR);
                        break;
                    case '`code_postal`':						
                        $stmt->bindValue($identifier, $this->code_postal, PDO::PARAM_INT);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_INT);
                        break;
                    case '`telephone`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`fax`':						
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`rc_num`':						
                        $stmt->bindValue($identifier, $this->rc_num, PDO::PARAM_STR);
                        break;
                    case '`rc_ville`':						
                        $stmt->bindValue($identifier, $this->rc_ville, PDO::PARAM_INT);
                        break;
                    case '`ice`':						
                        $stmt->bindValue($identifier, $this->ice, PDO::PARAM_STR);
                        break;
                    case '`ifu`':						
                        $stmt->bindValue($identifier, $this->ifu, PDO::PARAM_STR);
                        break;
                    case '`montant_attribue_ht`':						
                        $stmt->bindValue($identifier, $this->montant_attribue_ht, PDO::PARAM_STR);
                        break;
                    case '`montant_attribue_ttc`':						
                        $stmt->bindValue($identifier, $this->montant_attribue_ttc, PDO::PARAM_STR);
                        break;
                    case '`accessible_fournisseur`':						
                        $stmt->bindValue($identifier, $this->accessible_fournisseur, PDO::PARAM_INT);
                        break;
                    case '`date_crea`':						
                        $stmt->bindValue($identifier, $this->date_crea, PDO::PARAM_STR);
                        break;
                    case '`id_agent_crea`':						
                        $stmt->bindValue($identifier, $this->id_agent_crea, PDO::PARAM_INT);
                        break;
                    case '`date_modif`':						
                        $stmt->bindValue($identifier, $this->date_modif, PDO::PARAM_STR);
                        break;
                    case '`id_agent_modif`':						
                        $stmt->bindValue($identifier, $this->id_agent_modif, PDO::PARAM_INT);
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

            if ($this->aCommonExecContrat !== null) {
                if (!$this->aCommonExecContrat->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecContrat->getValidationFailures());
                }
            }

            if ($this->aCommonExecContractantRelatedByIdParent !== null) {
                if (!$this->aCommonExecContractantRelatedByIdParent->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecContractantRelatedByIdParent->getValidationFailures());
                }
            }

            if ($this->aCommonExecTypeContractant !== null) {
                if (!$this->aCommonExecTypeContractant->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecTypeContractant->getValidationFailures());
                }
            }

            if ($this->aCommonExecTypeStructure !== null) {
                if (!$this->aCommonExecTypeStructure->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecTypeStructure->getValidationFailures());
                }
            }


            if (($retval = CommonExecContractantPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonExecContacts !== null) {
                    foreach ($this->collCommonExecContacts as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecContractantsRelatedById !== null) {
                    foreach ($this->collCommonExecContractantsRelatedById as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecEvenements !== null) {
                    foreach ($this->collCommonExecEvenements as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecFactures !== null) {
                    foreach ($this->collCommonExecFactures as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecInscritContrats !== null) {
                    foreach ($this->collCommonExecInscritContrats as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecRepartitions !== null) {
                    foreach ($this->collCommonExecRepartitions as $referrerFK) {
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
        $pos = CommonExecContractantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdContrat();
                break;
            case 2:
                return $this->getIdTypeContractant();
                break;
            case 3:
                return $this->getIdTypeStructure();
                break;
            case 4:
                return $this->getIdParent();
                break;
            case 5:
                return $this->getRaisonSociale();
                break;
            case 6:
                return $this->getAdresse();
                break;
            case 7:
                return $this->getComplementAdresse();
                break;
            case 8:
                return $this->getCodePostal();
                break;
            case 9:
                return $this->getVille();
                break;
            case 10:
                return $this->getTelephone();
                break;
            case 11:
                return $this->getFax();
                break;
            case 12:
                return $this->getRcNum();
                break;
            case 13:
                return $this->getRcVille();
                break;
            case 14:
                return $this->getIce();
                break;
            case 15:
                return $this->getIfu();
                break;
            case 16:
                return $this->getMontantAttribueHt();
                break;
            case 17:
                return $this->getMontantAttribueTtc();
                break;
            case 18:
                return $this->getAccessibleFournisseur();
                break;
            case 19:
                return $this->getDateCrea();
                break;
            case 20:
                return $this->getIdAgentCrea();
                break;
            case 21:
                return $this->getDateModif();
                break;
            case 22:
                return $this->getIdAgentModif();
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
        if (isset($alreadyDumpedObjects['CommonExecContractant'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecContractant'][$this->getPrimaryKey()] = true;
        $keys = CommonExecContractantPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdContrat(),
            $keys[2] => $this->getIdTypeContractant(),
            $keys[3] => $this->getIdTypeStructure(),
            $keys[4] => $this->getIdParent(),
            $keys[5] => $this->getRaisonSociale(),
            $keys[6] => $this->getAdresse(),
            $keys[7] => $this->getComplementAdresse(),
            $keys[8] => $this->getCodePostal(),
            $keys[9] => $this->getVille(),
            $keys[10] => $this->getTelephone(),
            $keys[11] => $this->getFax(),
            $keys[12] => $this->getRcNum(),
            $keys[13] => $this->getRcVille(),
            $keys[14] => $this->getIce(),
            $keys[15] => $this->getIfu(),
            $keys[16] => $this->getMontantAttribueHt(),
            $keys[17] => $this->getMontantAttribueTtc(),
            $keys[18] => $this->getAccessibleFournisseur(),
            $keys[19] => $this->getDateCrea(),
            $keys[20] => $this->getIdAgentCrea(),
            $keys[21] => $this->getDateModif(),
            $keys[22] => $this->getIdAgentModif(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonExecContrat) {
                $result['CommonExecContrat'] = $this->aCommonExecContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecContractantRelatedByIdParent) {
                $result['CommonExecContractantRelatedByIdParent'] = $this->aCommonExecContractantRelatedByIdParent->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecTypeContractant) {
                $result['CommonExecTypeContractant'] = $this->aCommonExecTypeContractant->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecTypeStructure) {
                $result['CommonExecTypeStructure'] = $this->aCommonExecTypeStructure->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonExecContacts) {
                $result['CommonExecContacts'] = $this->collCommonExecContacts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecContractantsRelatedById) {
                $result['CommonExecContractantsRelatedById'] = $this->collCommonExecContractantsRelatedById->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecEvenements) {
                $result['CommonExecEvenements'] = $this->collCommonExecEvenements->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecFactures) {
                $result['CommonExecFactures'] = $this->collCommonExecFactures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecInscritContrats) {
                $result['CommonExecInscritContrats'] = $this->collCommonExecInscritContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecRepartitions) {
                $result['CommonExecRepartitions'] = $this->collCommonExecRepartitions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonExecContractantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdContrat($value);
                break;
            case 2:
                $this->setIdTypeContractant($value);
                break;
            case 3:
                $this->setIdTypeStructure($value);
                break;
            case 4:
                $this->setIdParent($value);
                break;
            case 5:
                $this->setRaisonSociale($value);
                break;
            case 6:
                $this->setAdresse($value);
                break;
            case 7:
                $this->setComplementAdresse($value);
                break;
            case 8:
                $this->setCodePostal($value);
                break;
            case 9:
                $this->setVille($value);
                break;
            case 10:
                $this->setTelephone($value);
                break;
            case 11:
                $this->setFax($value);
                break;
            case 12:
                $this->setRcNum($value);
                break;
            case 13:
                $this->setRcVille($value);
                break;
            case 14:
                $this->setIce($value);
                break;
            case 15:
                $this->setIfu($value);
                break;
            case 16:
                $this->setMontantAttribueHt($value);
                break;
            case 17:
                $this->setMontantAttribueTtc($value);
                break;
            case 18:
                $this->setAccessibleFournisseur($value);
                break;
            case 19:
                $this->setDateCrea($value);
                break;
            case 20:
                $this->setIdAgentCrea($value);
                break;
            case 21:
                $this->setDateModif($value);
                break;
            case 22:
                $this->setIdAgentModif($value);
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
        $keys = CommonExecContractantPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdContrat($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdTypeContractant($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdTypeStructure($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdParent($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRaisonSociale($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAdresse($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setComplementAdresse($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCodePostal($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setVille($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTelephone($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setFax($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setRcNum($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setRcVille($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIce($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setIfu($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMontantAttribueHt($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setMontantAttribueTtc($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAccessibleFournisseur($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateCrea($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setIdAgentCrea($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDateModif($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setIdAgentModif($arr[$keys[22]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecContractantPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecContractantPeer::ID)) $criteria->add(CommonExecContractantPeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecContractantPeer::ID_CONTRAT)) $criteria->add(CommonExecContractantPeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonExecContractantPeer::ID_TYPE_CONTRACTANT)) $criteria->add(CommonExecContractantPeer::ID_TYPE_CONTRACTANT, $this->id_type_contractant);
        if ($this->isColumnModified(CommonExecContractantPeer::ID_TYPE_STRUCTURE)) $criteria->add(CommonExecContractantPeer::ID_TYPE_STRUCTURE, $this->id_type_structure);
        if ($this->isColumnModified(CommonExecContractantPeer::ID_PARENT)) $criteria->add(CommonExecContractantPeer::ID_PARENT, $this->id_parent);
        if ($this->isColumnModified(CommonExecContractantPeer::RAISON_SOCIALE)) $criteria->add(CommonExecContractantPeer::RAISON_SOCIALE, $this->raison_sociale);
        if ($this->isColumnModified(CommonExecContractantPeer::ADRESSE)) $criteria->add(CommonExecContractantPeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonExecContractantPeer::COMPLEMENT_ADRESSE)) $criteria->add(CommonExecContractantPeer::COMPLEMENT_ADRESSE, $this->complement_adresse);
        if ($this->isColumnModified(CommonExecContractantPeer::CODE_POSTAL)) $criteria->add(CommonExecContractantPeer::CODE_POSTAL, $this->code_postal);
        if ($this->isColumnModified(CommonExecContractantPeer::VILLE)) $criteria->add(CommonExecContractantPeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonExecContractantPeer::TELEPHONE)) $criteria->add(CommonExecContractantPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(CommonExecContractantPeer::FAX)) $criteria->add(CommonExecContractantPeer::FAX, $this->fax);
        if ($this->isColumnModified(CommonExecContractantPeer::RC_NUM)) $criteria->add(CommonExecContractantPeer::RC_NUM, $this->rc_num);
        if ($this->isColumnModified(CommonExecContractantPeer::RC_VILLE)) $criteria->add(CommonExecContractantPeer::RC_VILLE, $this->rc_ville);
        if ($this->isColumnModified(CommonExecContractantPeer::ICE)) $criteria->add(CommonExecContractantPeer::ICE, $this->ice);
        if ($this->isColumnModified(CommonExecContractantPeer::IFU)) $criteria->add(CommonExecContractantPeer::IFU, $this->ifu);
        if ($this->isColumnModified(CommonExecContractantPeer::MONTANT_ATTRIBUE_HT)) $criteria->add(CommonExecContractantPeer::MONTANT_ATTRIBUE_HT, $this->montant_attribue_ht);
        if ($this->isColumnModified(CommonExecContractantPeer::MONTANT_ATTRIBUE_TTC)) $criteria->add(CommonExecContractantPeer::MONTANT_ATTRIBUE_TTC, $this->montant_attribue_ttc);
        if ($this->isColumnModified(CommonExecContractantPeer::ACCESSIBLE_FOURNISSEUR)) $criteria->add(CommonExecContractantPeer::ACCESSIBLE_FOURNISSEUR, $this->accessible_fournisseur);
        if ($this->isColumnModified(CommonExecContractantPeer::DATE_CREA)) $criteria->add(CommonExecContractantPeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonExecContractantPeer::ID_AGENT_CREA)) $criteria->add(CommonExecContractantPeer::ID_AGENT_CREA, $this->id_agent_crea);
        if ($this->isColumnModified(CommonExecContractantPeer::DATE_MODIF)) $criteria->add(CommonExecContractantPeer::DATE_MODIF, $this->date_modif);
        if ($this->isColumnModified(CommonExecContractantPeer::ID_AGENT_MODIF)) $criteria->add(CommonExecContractantPeer::ID_AGENT_MODIF, $this->id_agent_modif);

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
        $criteria = new Criteria(CommonExecContractantPeer::DATABASE_NAME);
        $criteria->add(CommonExecContractantPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecContractant (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdContrat($this->getIdContrat());
        $copyObj->setIdTypeContractant($this->getIdTypeContractant());
        $copyObj->setIdTypeStructure($this->getIdTypeStructure());
        $copyObj->setIdParent($this->getIdParent());
        $copyObj->setRaisonSociale($this->getRaisonSociale());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setComplementAdresse($this->getComplementAdresse());
        $copyObj->setCodePostal($this->getCodePostal());
        $copyObj->setVille($this->getVille());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setFax($this->getFax());
        $copyObj->setRcNum($this->getRcNum());
        $copyObj->setRcVille($this->getRcVille());
        $copyObj->setIce($this->getIce());
        $copyObj->setIfu($this->getIfu());
        $copyObj->setMontantAttribueHt($this->getMontantAttribueHt());
        $copyObj->setMontantAttribueTtc($this->getMontantAttribueTtc());
        $copyObj->setAccessibleFournisseur($this->getAccessibleFournisseur());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setIdAgentCrea($this->getIdAgentCrea());
        $copyObj->setDateModif($this->getDateModif());
        $copyObj->setIdAgentModif($this->getIdAgentModif());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonExecContacts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecContact($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecContractantsRelatedById() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecContractantRelatedById($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecEvenements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecEvenement($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecFactures() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecFacture($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecInscritContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecInscritContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecRepartitions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecRepartition($relObj->copy($deepCopy));
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
     * @return CommonExecContractant Clone of current object.
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
     * @return CommonExecContractantPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecContractantPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonExecContrat object.
     *
     * @param   CommonExecContrat $v
     * @return CommonExecContractant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecContrat(CommonExecContrat $v = null)
    {
        if ($v === null) {
            $this->setIdContrat(NULL);
        } else {
            $this->setIdContrat($v->getIdContrat());
        }

        $this->aCommonExecContrat = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecContrat object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecContractant($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecContrat object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecContrat The associated CommonExecContrat object.
     * @throws PropelException
     */
    public function getCommonExecContrat(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecContrat === null && ($this->id_contrat !== null) && $doQuery) {
            $this->aCommonExecContrat = CommonExecContratQuery::create()->findPk($this->id_contrat, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecContrat->addCommonExecContractants($this);
             */
        }

        return $this->aCommonExecContrat;
    }

    /**
     * Declares an association between this object and a CommonExecContractant object.
     *
     * @param   CommonExecContractant $v
     * @return CommonExecContractant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecContractantRelatedByIdParent(CommonExecContractant $v = null)
    {
        if ($v === null) {
            $this->setIdParent(NULL);
        } else {
            $this->setIdParent($v->getId());
        }

        $this->aCommonExecContractantRelatedByIdParent = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecContractant object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecContractantRelatedById($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecContractant object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecContractant The associated CommonExecContractant object.
     * @throws PropelException
     */
    public function getCommonExecContractantRelatedByIdParent(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecContractantRelatedByIdParent === null && ($this->id_parent !== null) && $doQuery) {
            $this->aCommonExecContractantRelatedByIdParent = CommonExecContractantQuery::create()->findPk($this->id_parent, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecContractantRelatedByIdParent->addCommonExecContractantsRelatedById($this);
             */
        }

        return $this->aCommonExecContractantRelatedByIdParent;
    }

    /**
     * Declares an association between this object and a CommonExecTypeContractant object.
     *
     * @param   CommonExecTypeContractant $v
     * @return CommonExecContractant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecTypeContractant(CommonExecTypeContractant $v = null)
    {
        if ($v === null) {
            $this->setIdTypeContractant(NULL);
        } else {
            $this->setIdTypeContractant($v->getId());
        }

        $this->aCommonExecTypeContractant = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecTypeContractant object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecContractant($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecTypeContractant object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecTypeContractant The associated CommonExecTypeContractant object.
     * @throws PropelException
     */
    public function getCommonExecTypeContractant(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecTypeContractant === null && ($this->id_type_contractant !== null) && $doQuery) {
            $this->aCommonExecTypeContractant = CommonExecTypeContractantQuery::create()->findPk($this->id_type_contractant, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecTypeContractant->addCommonExecContractants($this);
             */
        }

        return $this->aCommonExecTypeContractant;
    }

    /**
     * Declares an association between this object and a CommonExecTypeStructure object.
     *
     * @param   CommonExecTypeStructure $v
     * @return CommonExecContractant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecTypeStructure(CommonExecTypeStructure $v = null)
    {
        if ($v === null) {
            $this->setIdTypeStructure(NULL);
        } else {
            $this->setIdTypeStructure($v->getId());
        }

        $this->aCommonExecTypeStructure = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecTypeStructure object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecContractant($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecTypeStructure object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecTypeStructure The associated CommonExecTypeStructure object.
     * @throws PropelException
     */
    public function getCommonExecTypeStructure(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecTypeStructure === null && ($this->id_type_structure !== null) && $doQuery) {
            $this->aCommonExecTypeStructure = CommonExecTypeStructureQuery::create()->findPk($this->id_type_structure, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecTypeStructure->addCommonExecContractants($this);
             */
        }

        return $this->aCommonExecTypeStructure;
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
        if ('CommonExecContact' == $relationName) {
            $this->initCommonExecContacts();
        }
        if ('CommonExecContractantRelatedById' == $relationName) {
            $this->initCommonExecContractantsRelatedById();
        }
        if ('CommonExecEvenement' == $relationName) {
            $this->initCommonExecEvenements();
        }
        if ('CommonExecFacture' == $relationName) {
            $this->initCommonExecFactures();
        }
        if ('CommonExecInscritContrat' == $relationName) {
            $this->initCommonExecInscritContrats();
        }
        if ('CommonExecRepartition' == $relationName) {
            $this->initCommonExecRepartitions();
        }
    }

    /**
     * Clears out the collCommonExecContacts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContractant The current object (for fluent API support)
     * @see        addCommonExecContacts()
     */
    public function clearCommonExecContacts()
    {
        $this->collCommonExecContacts = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecContactsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecContacts collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecContacts($v = true)
    {
        $this->collCommonExecContactsPartial = $v;
    }

    /**
     * Initializes the collCommonExecContacts collection.
     *
     * By default this just sets the collCommonExecContacts collection to an empty array (like clearcollCommonExecContacts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecContacts($overrideExisting = true)
    {
        if (null !== $this->collCommonExecContacts && !$overrideExisting) {
            return;
        }
        $this->collCommonExecContacts = new PropelObjectCollection();
        $this->collCommonExecContacts->setModel('CommonExecContact');
    }

    /**
     * Gets an array of CommonExecContact objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContractant is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecContact[] List of CommonExecContact objects
     * @throws PropelException
     */
    public function getCommonExecContacts($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContactsPartial && !$this->isNew();
        if (null === $this->collCommonExecContacts || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContacts) {
                // return empty collection
                $this->initCommonExecContacts();
            } else {
                $collCommonExecContacts = CommonExecContactQuery::create(null, $criteria)
                    ->filterByCommonExecContractant($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecContactsPartial && count($collCommonExecContacts)) {
                      $this->initCommonExecContacts(false);

                      foreach ($collCommonExecContacts as $obj) {
                        if (false == $this->collCommonExecContacts->contains($obj)) {
                          $this->collCommonExecContacts->append($obj);
                        }
                      }

                      $this->collCommonExecContactsPartial = true;
                    }

                    $collCommonExecContacts->getInternalIterator()->rewind();

                    return $collCommonExecContacts;
                }

                if ($partial && $this->collCommonExecContacts) {
                    foreach ($this->collCommonExecContacts as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecContacts[] = $obj;
                        }
                    }
                }

                $this->collCommonExecContacts = $collCommonExecContacts;
                $this->collCommonExecContactsPartial = false;
            }
        }

        return $this->collCommonExecContacts;
    }

    /**
     * Sets a collection of CommonExecContact objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecContacts A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setCommonExecContacts(PropelCollection $commonExecContacts, PropelPDO $con = null)
    {
        $commonExecContactsToDelete = $this->getCommonExecContacts(new Criteria(), $con)->diff($commonExecContacts);


        $this->commonExecContactsScheduledForDeletion = $commonExecContactsToDelete;

        foreach ($commonExecContactsToDelete as $commonExecContactRemoved) {
            $commonExecContactRemoved->setCommonExecContractant(null);
        }

        $this->collCommonExecContacts = null;
        foreach ($commonExecContacts as $commonExecContact) {
            $this->addCommonExecContact($commonExecContact);
        }

        $this->collCommonExecContacts = $commonExecContacts;
        $this->collCommonExecContactsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecContact objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecContact objects.
     * @throws PropelException
     */
    public function countCommonExecContacts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContactsPartial && !$this->isNew();
        if (null === $this->collCommonExecContacts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContacts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecContacts());
            }
            $query = CommonExecContactQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContractant($this)
                ->count($con);
        }

        return count($this->collCommonExecContacts);
    }

    /**
     * Method called to associate a CommonExecContact object to this object
     * through the CommonExecContact foreign key attribute.
     *
     * @param   CommonExecContact $l CommonExecContact
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function addCommonExecContact(CommonExecContact $l)
    {
        if ($this->collCommonExecContacts === null) {
            $this->initCommonExecContacts();
            $this->collCommonExecContactsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecContacts->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecContact($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecContact $commonExecContact The commonExecContact object to add.
     */
    protected function doAddCommonExecContact($commonExecContact)
    {
        $this->collCommonExecContacts[]= $commonExecContact;
        $commonExecContact->setCommonExecContractant($this);
    }

    /**
     * @param	CommonExecContact $commonExecContact The commonExecContact object to remove.
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function removeCommonExecContact($commonExecContact)
    {
        if ($this->getCommonExecContacts()->contains($commonExecContact)) {
            $this->collCommonExecContacts->remove($this->collCommonExecContacts->search($commonExecContact));
            if (null === $this->commonExecContactsScheduledForDeletion) {
                $this->commonExecContactsScheduledForDeletion = clone $this->collCommonExecContacts;
                $this->commonExecContactsScheduledForDeletion->clear();
            }
            $this->commonExecContactsScheduledForDeletion[]= clone $commonExecContact;
            $commonExecContact->setCommonExecContractant(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContractant is new, it will return
     * an empty collection; or if this CommonExecContractant has previously
     * been saved, it will retrieve related CommonExecContacts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContact[] List of CommonExecContact objects
     */
    public function getCommonExecContactsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContactQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecContacts($query, $con);
    }

    /**
     * Clears out the collCommonExecContractantsRelatedById collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContractant The current object (for fluent API support)
     * @see        addCommonExecContractantsRelatedById()
     */
    public function clearCommonExecContractantsRelatedById()
    {
        $this->collCommonExecContractantsRelatedById = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecContractantsRelatedByIdPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecContractantsRelatedById collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecContractantsRelatedById($v = true)
    {
        $this->collCommonExecContractantsRelatedByIdPartial = $v;
    }

    /**
     * Initializes the collCommonExecContractantsRelatedById collection.
     *
     * By default this just sets the collCommonExecContractantsRelatedById collection to an empty array (like clearcollCommonExecContractantsRelatedById());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecContractantsRelatedById($overrideExisting = true)
    {
        if (null !== $this->collCommonExecContractantsRelatedById && !$overrideExisting) {
            return;
        }
        $this->collCommonExecContractantsRelatedById = new PropelObjectCollection();
        $this->collCommonExecContractantsRelatedById->setModel('CommonExecContractant');
    }

    /**
     * Gets an array of CommonExecContractant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContractant is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     * @throws PropelException
     */
    public function getCommonExecContractantsRelatedById($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContractantsRelatedByIdPartial && !$this->isNew();
        if (null === $this->collCommonExecContractantsRelatedById || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContractantsRelatedById) {
                // return empty collection
                $this->initCommonExecContractantsRelatedById();
            } else {
                $collCommonExecContractantsRelatedById = CommonExecContractantQuery::create(null, $criteria)
                    ->filterByCommonExecContractantRelatedByIdParent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecContractantsRelatedByIdPartial && count($collCommonExecContractantsRelatedById)) {
                      $this->initCommonExecContractantsRelatedById(false);

                      foreach ($collCommonExecContractantsRelatedById as $obj) {
                        if (false == $this->collCommonExecContractantsRelatedById->contains($obj)) {
                          $this->collCommonExecContractantsRelatedById->append($obj);
                        }
                      }

                      $this->collCommonExecContractantsRelatedByIdPartial = true;
                    }

                    $collCommonExecContractantsRelatedById->getInternalIterator()->rewind();

                    return $collCommonExecContractantsRelatedById;
                }

                if ($partial && $this->collCommonExecContractantsRelatedById) {
                    foreach ($this->collCommonExecContractantsRelatedById as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecContractantsRelatedById[] = $obj;
                        }
                    }
                }

                $this->collCommonExecContractantsRelatedById = $collCommonExecContractantsRelatedById;
                $this->collCommonExecContractantsRelatedByIdPartial = false;
            }
        }

        return $this->collCommonExecContractantsRelatedById;
    }

    /**
     * Sets a collection of CommonExecContractantRelatedById objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecContractantsRelatedById A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setCommonExecContractantsRelatedById(PropelCollection $commonExecContractantsRelatedById, PropelPDO $con = null)
    {
        $commonExecContractantsRelatedByIdToDelete = $this->getCommonExecContractantsRelatedById(new Criteria(), $con)->diff($commonExecContractantsRelatedById);


        $this->commonExecContractantsRelatedByIdScheduledForDeletion = $commonExecContractantsRelatedByIdToDelete;

        foreach ($commonExecContractantsRelatedByIdToDelete as $commonExecContractantRelatedByIdRemoved) {
            $commonExecContractantRelatedByIdRemoved->setCommonExecContractantRelatedByIdParent(null);
        }

        $this->collCommonExecContractantsRelatedById = null;
        foreach ($commonExecContractantsRelatedById as $commonExecContractantRelatedById) {
            $this->addCommonExecContractantRelatedById($commonExecContractantRelatedById);
        }

        $this->collCommonExecContractantsRelatedById = $commonExecContractantsRelatedById;
        $this->collCommonExecContractantsRelatedByIdPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecContractant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecContractant objects.
     * @throws PropelException
     */
    public function countCommonExecContractantsRelatedById(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContractantsRelatedByIdPartial && !$this->isNew();
        if (null === $this->collCommonExecContractantsRelatedById || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContractantsRelatedById) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecContractantsRelatedById());
            }
            $query = CommonExecContractantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContractantRelatedByIdParent($this)
                ->count($con);
        }

        return count($this->collCommonExecContractantsRelatedById);
    }

    /**
     * Method called to associate a CommonExecContractant object to this object
     * through the CommonExecContractant foreign key attribute.
     *
     * @param   CommonExecContractant $l CommonExecContractant
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function addCommonExecContractantRelatedById(CommonExecContractant $l)
    {
        if ($this->collCommonExecContractantsRelatedById === null) {
            $this->initCommonExecContractantsRelatedById();
            $this->collCommonExecContractantsRelatedByIdPartial = true;
        }
        if (!in_array($l, $this->collCommonExecContractantsRelatedById->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecContractantRelatedById($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecContractantRelatedById $commonExecContractantRelatedById The commonExecContractantRelatedById object to add.
     */
    protected function doAddCommonExecContractantRelatedById($commonExecContractantRelatedById)
    {
        $this->collCommonExecContractantsRelatedById[]= $commonExecContractantRelatedById;
        $commonExecContractantRelatedById->setCommonExecContractantRelatedByIdParent($this);
    }

    /**
     * @param	CommonExecContractantRelatedById $commonExecContractantRelatedById The commonExecContractantRelatedById object to remove.
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function removeCommonExecContractantRelatedById($commonExecContractantRelatedById)
    {
        if ($this->getCommonExecContractantsRelatedById()->contains($commonExecContractantRelatedById)) {
            $this->collCommonExecContractantsRelatedById->remove($this->collCommonExecContractantsRelatedById->search($commonExecContractantRelatedById));
            if (null === $this->commonExecContractantsRelatedByIdScheduledForDeletion) {
                $this->commonExecContractantsRelatedByIdScheduledForDeletion = clone $this->collCommonExecContractantsRelatedById;
                $this->commonExecContractantsRelatedByIdScheduledForDeletion->clear();
            }
            $this->commonExecContractantsRelatedByIdScheduledForDeletion[]= $commonExecContractantRelatedById;
            $commonExecContractantRelatedById->setCommonExecContractantRelatedByIdParent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContractant is new, it will return
     * an empty collection; or if this CommonExecContractant has previously
     * been saved, it will retrieve related CommonExecContractantsRelatedById from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsRelatedByIdJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecContractantsRelatedById($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContractant is new, it will return
     * an empty collection; or if this CommonExecContractant has previously
     * been saved, it will retrieve related CommonExecContractantsRelatedById from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsRelatedByIdJoinCommonExecTypeContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeContractant', $join_behavior);

        return $this->getCommonExecContractantsRelatedById($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContractant is new, it will return
     * an empty collection; or if this CommonExecContractant has previously
     * been saved, it will retrieve related CommonExecContractantsRelatedById from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsRelatedByIdJoinCommonExecTypeStructure($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeStructure', $join_behavior);

        return $this->getCommonExecContractantsRelatedById($query, $con);
    }

    /**
     * Clears out the collCommonExecEvenements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContractant The current object (for fluent API support)
     * @see        addCommonExecEvenements()
     */
    public function clearCommonExecEvenements()
    {
        $this->collCommonExecEvenements = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecEvenementsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecEvenements collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecEvenements($v = true)
    {
        $this->collCommonExecEvenementsPartial = $v;
    }

    /**
     * Initializes the collCommonExecEvenements collection.
     *
     * By default this just sets the collCommonExecEvenements collection to an empty array (like clearcollCommonExecEvenements());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecEvenements($overrideExisting = true)
    {
        if (null !== $this->collCommonExecEvenements && !$overrideExisting) {
            return;
        }
        $this->collCommonExecEvenements = new PropelObjectCollection();
        $this->collCommonExecEvenements->setModel('CommonExecEvenement');
    }

    /**
     * Gets an array of CommonExecEvenement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContractant is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     * @throws PropelException
     */
    public function getCommonExecEvenements($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenements || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenements) {
                // return empty collection
                $this->initCommonExecEvenements();
            } else {
                $collCommonExecEvenements = CommonExecEvenementQuery::create(null, $criteria)
                    ->filterByCommonExecContractant($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecEvenementsPartial && count($collCommonExecEvenements)) {
                      $this->initCommonExecEvenements(false);

                      foreach ($collCommonExecEvenements as $obj) {
                        if (false == $this->collCommonExecEvenements->contains($obj)) {
                          $this->collCommonExecEvenements->append($obj);
                        }
                      }

                      $this->collCommonExecEvenementsPartial = true;
                    }

                    $collCommonExecEvenements->getInternalIterator()->rewind();

                    return $collCommonExecEvenements;
                }

                if ($partial && $this->collCommonExecEvenements) {
                    foreach ($this->collCommonExecEvenements as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecEvenements[] = $obj;
                        }
                    }
                }

                $this->collCommonExecEvenements = $collCommonExecEvenements;
                $this->collCommonExecEvenementsPartial = false;
            }
        }

        return $this->collCommonExecEvenements;
    }

    /**
     * Sets a collection of CommonExecEvenement objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecEvenements A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setCommonExecEvenements(PropelCollection $commonExecEvenements, PropelPDO $con = null)
    {
        $commonExecEvenementsToDelete = $this->getCommonExecEvenements(new Criteria(), $con)->diff($commonExecEvenements);


        $this->commonExecEvenementsScheduledForDeletion = $commonExecEvenementsToDelete;

        foreach ($commonExecEvenementsToDelete as $commonExecEvenementRemoved) {
            $commonExecEvenementRemoved->setCommonExecContractant(null);
        }

        $this->collCommonExecEvenements = null;
        foreach ($commonExecEvenements as $commonExecEvenement) {
            $this->addCommonExecEvenement($commonExecEvenement);
        }

        $this->collCommonExecEvenements = $commonExecEvenements;
        $this->collCommonExecEvenementsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecEvenement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecEvenement objects.
     * @throws PropelException
     */
    public function countCommonExecEvenements(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenements || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenements) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecEvenements());
            }
            $query = CommonExecEvenementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContractant($this)
                ->count($con);
        }

        return count($this->collCommonExecEvenements);
    }

    /**
     * Method called to associate a CommonExecEvenement object to this object
     * through the CommonExecEvenement foreign key attribute.
     *
     * @param   CommonExecEvenement $l CommonExecEvenement
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function addCommonExecEvenement(CommonExecEvenement $l)
    {
        if ($this->collCommonExecEvenements === null) {
            $this->initCommonExecEvenements();
            $this->collCommonExecEvenementsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecEvenements->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecEvenement($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecEvenement $commonExecEvenement The commonExecEvenement object to add.
     */
    protected function doAddCommonExecEvenement($commonExecEvenement)
    {
        $this->collCommonExecEvenements[]= $commonExecEvenement;
        $commonExecEvenement->setCommonExecContractant($this);
    }

    /**
     * @param	CommonExecEvenement $commonExecEvenement The commonExecEvenement object to remove.
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function removeCommonExecEvenement($commonExecEvenement)
    {
        if ($this->getCommonExecEvenements()->contains($commonExecEvenement)) {
            $this->collCommonExecEvenements->remove($this->collCommonExecEvenements->search($commonExecEvenement));
            if (null === $this->commonExecEvenementsScheduledForDeletion) {
                $this->commonExecEvenementsScheduledForDeletion = clone $this->collCommonExecEvenements;
                $this->commonExecEvenementsScheduledForDeletion->clear();
            }
            $this->commonExecEvenementsScheduledForDeletion[]= clone $commonExecEvenement;
            $commonExecEvenement->setCommonExecContractant(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContractant is new, it will return
     * an empty collection; or if this CommonExecContractant has previously
     * been saved, it will retrieve related CommonExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContractant is new, it will return
     * an empty collection; or if this CommonExecContractant has previously
     * been saved, it will retrieve related CommonExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsJoinCommonExecPhase($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecPhase', $join_behavior);

        return $this->getCommonExecEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContractant is new, it will return
     * an empty collection; or if this CommonExecContractant has previously
     * been saved, it will retrieve related CommonExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsJoinCommonExecTypeEvenement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeEvenement', $join_behavior);

        return $this->getCommonExecEvenements($query, $con);
    }

    /**
     * Clears out the collCommonExecFactures collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContractant The current object (for fluent API support)
     * @see        addCommonExecFactures()
     */
    public function clearCommonExecFactures()
    {
        $this->collCommonExecFactures = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecFacturesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecFactures collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecFactures($v = true)
    {
        $this->collCommonExecFacturesPartial = $v;
    }

    /**
     * Initializes the collCommonExecFactures collection.
     *
     * By default this just sets the collCommonExecFactures collection to an empty array (like clearcollCommonExecFactures());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecFactures($overrideExisting = true)
    {
        if (null !== $this->collCommonExecFactures && !$overrideExisting) {
            return;
        }
        $this->collCommonExecFactures = new PropelObjectCollection();
        $this->collCommonExecFactures->setModel('CommonExecFacture');
    }

    /**
     * Gets an array of CommonExecFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContractant is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     * @throws PropelException
     */
    public function getCommonExecFactures($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecFacturesPartial && !$this->isNew();
        if (null === $this->collCommonExecFactures || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecFactures) {
                // return empty collection
                $this->initCommonExecFactures();
            } else {
                $collCommonExecFactures = CommonExecFactureQuery::create(null, $criteria)
                    ->filterByCommonExecContractant($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecFacturesPartial && count($collCommonExecFactures)) {
                      $this->initCommonExecFactures(false);

                      foreach ($collCommonExecFactures as $obj) {
                        if (false == $this->collCommonExecFactures->contains($obj)) {
                          $this->collCommonExecFactures->append($obj);
                        }
                      }

                      $this->collCommonExecFacturesPartial = true;
                    }

                    $collCommonExecFactures->getInternalIterator()->rewind();

                    return $collCommonExecFactures;
                }

                if ($partial && $this->collCommonExecFactures) {
                    foreach ($this->collCommonExecFactures as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecFactures[] = $obj;
                        }
                    }
                }

                $this->collCommonExecFactures = $collCommonExecFactures;
                $this->collCommonExecFacturesPartial = false;
            }
        }

        return $this->collCommonExecFactures;
    }

    /**
     * Sets a collection of CommonExecFacture objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecFactures A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setCommonExecFactures(PropelCollection $commonExecFactures, PropelPDO $con = null)
    {
        $commonExecFacturesToDelete = $this->getCommonExecFactures(new Criteria(), $con)->diff($commonExecFactures);


        $this->commonExecFacturesScheduledForDeletion = $commonExecFacturesToDelete;

        foreach ($commonExecFacturesToDelete as $commonExecFactureRemoved) {
            $commonExecFactureRemoved->setCommonExecContractant(null);
        }

        $this->collCommonExecFactures = null;
        foreach ($commonExecFactures as $commonExecFacture) {
            $this->addCommonExecFacture($commonExecFacture);
        }

        $this->collCommonExecFactures = $commonExecFactures;
        $this->collCommonExecFacturesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecFacture objects.
     * @throws PropelException
     */
    public function countCommonExecFactures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecFacturesPartial && !$this->isNew();
        if (null === $this->collCommonExecFactures || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecFactures) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecFactures());
            }
            $query = CommonExecFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContractant($this)
                ->count($con);
        }

        return count($this->collCommonExecFactures);
    }

    /**
     * Method called to associate a CommonExecFacture object to this object
     * through the CommonExecFacture foreign key attribute.
     *
     * @param   CommonExecFacture $l CommonExecFacture
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function addCommonExecFacture(CommonExecFacture $l)
    {
        if ($this->collCommonExecFactures === null) {
            $this->initCommonExecFactures();
            $this->collCommonExecFacturesPartial = true;
        }
        if (!in_array($l, $this->collCommonExecFactures->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecFacture($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecFacture $commonExecFacture The commonExecFacture object to add.
     */
    protected function doAddCommonExecFacture($commonExecFacture)
    {
        $this->collCommonExecFactures[]= $commonExecFacture;
        $commonExecFacture->setCommonExecContractant($this);
    }

    /**
     * @param	CommonExecFacture $commonExecFacture The commonExecFacture object to remove.
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function removeCommonExecFacture($commonExecFacture)
    {
        if ($this->getCommonExecFactures()->contains($commonExecFacture)) {
            $this->collCommonExecFactures->remove($this->collCommonExecFactures->search($commonExecFacture));
            if (null === $this->commonExecFacturesScheduledForDeletion) {
                $this->commonExecFacturesScheduledForDeletion = clone $this->collCommonExecFactures;
                $this->commonExecFacturesScheduledForDeletion->clear();
            }
            $this->commonExecFacturesScheduledForDeletion[]= clone $commonExecFacture;
            $commonExecFacture->setCommonExecContractant(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContractant is new, it will return
     * an empty collection; or if this CommonExecContractant has previously
     * been saved, it will retrieve related CommonExecFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecFactures($query, $con);
    }

    /**
     * Clears out the collCommonExecInscritContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContractant The current object (for fluent API support)
     * @see        addCommonExecInscritContrats()
     */
    public function clearCommonExecInscritContrats()
    {
        $this->collCommonExecInscritContrats = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecInscritContratsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecInscritContrats collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecInscritContrats($v = true)
    {
        $this->collCommonExecInscritContratsPartial = $v;
    }

    /**
     * Initializes the collCommonExecInscritContrats collection.
     *
     * By default this just sets the collCommonExecInscritContrats collection to an empty array (like clearcollCommonExecInscritContrats());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecInscritContrats($overrideExisting = true)
    {
        if (null !== $this->collCommonExecInscritContrats && !$overrideExisting) {
            return;
        }
        $this->collCommonExecInscritContrats = new PropelObjectCollection();
        $this->collCommonExecInscritContrats->setModel('CommonExecInscritContrat');
    }

    /**
     * Gets an array of CommonExecInscritContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContractant is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecInscritContrat[] List of CommonExecInscritContrat objects
     * @throws PropelException
     */
    public function getCommonExecInscritContrats($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecInscritContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecInscritContrats || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecInscritContrats) {
                // return empty collection
                $this->initCommonExecInscritContrats();
            } else {
                $collCommonExecInscritContrats = CommonExecInscritContratQuery::create(null, $criteria)
                    ->filterByCommonExecContractant($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecInscritContratsPartial && count($collCommonExecInscritContrats)) {
                      $this->initCommonExecInscritContrats(false);

                      foreach ($collCommonExecInscritContrats as $obj) {
                        if (false == $this->collCommonExecInscritContrats->contains($obj)) {
                          $this->collCommonExecInscritContrats->append($obj);
                        }
                      }

                      $this->collCommonExecInscritContratsPartial = true;
                    }

                    $collCommonExecInscritContrats->getInternalIterator()->rewind();

                    return $collCommonExecInscritContrats;
                }

                if ($partial && $this->collCommonExecInscritContrats) {
                    foreach ($this->collCommonExecInscritContrats as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecInscritContrats[] = $obj;
                        }
                    }
                }

                $this->collCommonExecInscritContrats = $collCommonExecInscritContrats;
                $this->collCommonExecInscritContratsPartial = false;
            }
        }

        return $this->collCommonExecInscritContrats;
    }

    /**
     * Sets a collection of CommonExecInscritContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecInscritContrats A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setCommonExecInscritContrats(PropelCollection $commonExecInscritContrats, PropelPDO $con = null)
    {
        $commonExecInscritContratsToDelete = $this->getCommonExecInscritContrats(new Criteria(), $con)->diff($commonExecInscritContrats);


        $this->commonExecInscritContratsScheduledForDeletion = $commonExecInscritContratsToDelete;

        foreach ($commonExecInscritContratsToDelete as $commonExecInscritContratRemoved) {
            $commonExecInscritContratRemoved->setCommonExecContractant(null);
        }

        $this->collCommonExecInscritContrats = null;
        foreach ($commonExecInscritContrats as $commonExecInscritContrat) {
            $this->addCommonExecInscritContrat($commonExecInscritContrat);
        }

        $this->collCommonExecInscritContrats = $commonExecInscritContrats;
        $this->collCommonExecInscritContratsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecInscritContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecInscritContrat objects.
     * @throws PropelException
     */
    public function countCommonExecInscritContrats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecInscritContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecInscritContrats || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecInscritContrats) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecInscritContrats());
            }
            $query = CommonExecInscritContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContractant($this)
                ->count($con);
        }

        return count($this->collCommonExecInscritContrats);
    }

    /**
     * Method called to associate a CommonExecInscritContrat object to this object
     * through the CommonExecInscritContrat foreign key attribute.
     *
     * @param   CommonExecInscritContrat $l CommonExecInscritContrat
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function addCommonExecInscritContrat(CommonExecInscritContrat $l)
    {
        if ($this->collCommonExecInscritContrats === null) {
            $this->initCommonExecInscritContrats();
            $this->collCommonExecInscritContratsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecInscritContrats->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecInscritContrat($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecInscritContrat $commonExecInscritContrat The commonExecInscritContrat object to add.
     */
    protected function doAddCommonExecInscritContrat($commonExecInscritContrat)
    {
        $this->collCommonExecInscritContrats[]= $commonExecInscritContrat;
        $commonExecInscritContrat->setCommonExecContractant($this);
    }

    /**
     * @param	CommonExecInscritContrat $commonExecInscritContrat The commonExecInscritContrat object to remove.
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function removeCommonExecInscritContrat($commonExecInscritContrat)
    {
        if ($this->getCommonExecInscritContrats()->contains($commonExecInscritContrat)) {
            $this->collCommonExecInscritContrats->remove($this->collCommonExecInscritContrats->search($commonExecInscritContrat));
            if (null === $this->commonExecInscritContratsScheduledForDeletion) {
                $this->commonExecInscritContratsScheduledForDeletion = clone $this->collCommonExecInscritContrats;
                $this->commonExecInscritContratsScheduledForDeletion->clear();
            }
            $this->commonExecInscritContratsScheduledForDeletion[]= $commonExecInscritContrat;
            $commonExecInscritContrat->setCommonExecContractant(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContractant is new, it will return
     * an empty collection; or if this CommonExecContractant has previously
     * been saved, it will retrieve related CommonExecInscritContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecInscritContrat[] List of CommonExecInscritContrat objects
     */
    public function getCommonExecInscritContratsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecInscritContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecInscritContrats($query, $con);
    }

    /**
     * Clears out the collCommonExecRepartitions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContractant The current object (for fluent API support)
     * @see        addCommonExecRepartitions()
     */
    public function clearCommonExecRepartitions()
    {
        $this->collCommonExecRepartitions = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecRepartitionsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecRepartitions collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecRepartitions($v = true)
    {
        $this->collCommonExecRepartitionsPartial = $v;
    }

    /**
     * Initializes the collCommonExecRepartitions collection.
     *
     * By default this just sets the collCommonExecRepartitions collection to an empty array (like clearcollCommonExecRepartitions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecRepartitions($overrideExisting = true)
    {
        if (null !== $this->collCommonExecRepartitions && !$overrideExisting) {
            return;
        }
        $this->collCommonExecRepartitions = new PropelObjectCollection();
        $this->collCommonExecRepartitions->setModel('CommonExecRepartition');
    }

    /**
     * Gets an array of CommonExecRepartition objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContractant is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     * @throws PropelException
     */
    public function getCommonExecRepartitions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecRepartitionsPartial && !$this->isNew();
        if (null === $this->collCommonExecRepartitions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecRepartitions) {
                // return empty collection
                $this->initCommonExecRepartitions();
            } else {
                $collCommonExecRepartitions = CommonExecRepartitionQuery::create(null, $criteria)
                    ->filterByCommonExecContractant($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecRepartitionsPartial && count($collCommonExecRepartitions)) {
                      $this->initCommonExecRepartitions(false);

                      foreach ($collCommonExecRepartitions as $obj) {
                        if (false == $this->collCommonExecRepartitions->contains($obj)) {
                          $this->collCommonExecRepartitions->append($obj);
                        }
                      }

                      $this->collCommonExecRepartitionsPartial = true;
                    }

                    $collCommonExecRepartitions->getInternalIterator()->rewind();

                    return $collCommonExecRepartitions;
                }

                if ($partial && $this->collCommonExecRepartitions) {
                    foreach ($this->collCommonExecRepartitions as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecRepartitions[] = $obj;
                        }
                    }
                }

                $this->collCommonExecRepartitions = $collCommonExecRepartitions;
                $this->collCommonExecRepartitionsPartial = false;
            }
        }

        return $this->collCommonExecRepartitions;
    }

    /**
     * Sets a collection of CommonExecRepartition objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecRepartitions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function setCommonExecRepartitions(PropelCollection $commonExecRepartitions, PropelPDO $con = null)
    {
        $commonExecRepartitionsToDelete = $this->getCommonExecRepartitions(new Criteria(), $con)->diff($commonExecRepartitions);


        $this->commonExecRepartitionsScheduledForDeletion = $commonExecRepartitionsToDelete;

        foreach ($commonExecRepartitionsToDelete as $commonExecRepartitionRemoved) {
            $commonExecRepartitionRemoved->setCommonExecContractant(null);
        }

        $this->collCommonExecRepartitions = null;
        foreach ($commonExecRepartitions as $commonExecRepartition) {
            $this->addCommonExecRepartition($commonExecRepartition);
        }

        $this->collCommonExecRepartitions = $commonExecRepartitions;
        $this->collCommonExecRepartitionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecRepartition objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecRepartition objects.
     * @throws PropelException
     */
    public function countCommonExecRepartitions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecRepartitionsPartial && !$this->isNew();
        if (null === $this->collCommonExecRepartitions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecRepartitions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecRepartitions());
            }
            $query = CommonExecRepartitionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContractant($this)
                ->count($con);
        }

        return count($this->collCommonExecRepartitions);
    }

    /**
     * Method called to associate a CommonExecRepartition object to this object
     * through the CommonExecRepartition foreign key attribute.
     *
     * @param   CommonExecRepartition $l CommonExecRepartition
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function addCommonExecRepartition(CommonExecRepartition $l)
    {
        if ($this->collCommonExecRepartitions === null) {
            $this->initCommonExecRepartitions();
            $this->collCommonExecRepartitionsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecRepartitions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecRepartition($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecRepartition $commonExecRepartition The commonExecRepartition object to add.
     */
    protected function doAddCommonExecRepartition($commonExecRepartition)
    {
        $this->collCommonExecRepartitions[]= $commonExecRepartition;
        $commonExecRepartition->setCommonExecContractant($this);
    }

    /**
     * @param	CommonExecRepartition $commonExecRepartition The commonExecRepartition object to remove.
     * @return CommonExecContractant The current object (for fluent API support)
     */
    public function removeCommonExecRepartition($commonExecRepartition)
    {
        if ($this->getCommonExecRepartitions()->contains($commonExecRepartition)) {
            $this->collCommonExecRepartitions->remove($this->collCommonExecRepartitions->search($commonExecRepartition));
            if (null === $this->commonExecRepartitionsScheduledForDeletion) {
                $this->commonExecRepartitionsScheduledForDeletion = clone $this->collCommonExecRepartitions;
                $this->commonExecRepartitionsScheduledForDeletion->clear();
            }
            $this->commonExecRepartitionsScheduledForDeletion[]= clone $commonExecRepartition;
            $commonExecRepartition->setCommonExecContractant(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContractant is new, it will return
     * an empty collection; or if this CommonExecContractant has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecRepartitions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContractant is new, it will return
     * an empty collection; or if this CommonExecContractant has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsJoinCommonExecFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecFacture', $join_behavior);

        return $this->getCommonExecRepartitions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContractant is new, it will return
     * an empty collection; or if this CommonExecContractant has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsJoinCommonExecPrix($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecPrix', $join_behavior);

        return $this->getCommonExecRepartitions($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_contrat = null;
        $this->id_type_contractant = null;
        $this->id_type_structure = null;
        $this->id_parent = null;
        $this->raison_sociale = null;
        $this->adresse = null;
        $this->complement_adresse = null;
        $this->code_postal = null;
        $this->ville = null;
        $this->telephone = null;
        $this->fax = null;
        $this->rc_num = null;
        $this->rc_ville = null;
        $this->ice = null;
        $this->ifu = null;
        $this->montant_attribue_ht = null;
        $this->montant_attribue_ttc = null;
        $this->accessible_fournisseur = null;
        $this->date_crea = null;
        $this->id_agent_crea = null;
        $this->date_modif = null;
        $this->id_agent_modif = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
            if ($this->collCommonExecContacts) {
                foreach ($this->collCommonExecContacts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecContractantsRelatedById) {
                foreach ($this->collCommonExecContractantsRelatedById as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecEvenements) {
                foreach ($this->collCommonExecEvenements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecFactures) {
                foreach ($this->collCommonExecFactures as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecInscritContrats) {
                foreach ($this->collCommonExecInscritContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecRepartitions) {
                foreach ($this->collCommonExecRepartitions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonExecContrat instanceof Persistent) {
              $this->aCommonExecContrat->clearAllReferences($deep);
            }
            if ($this->aCommonExecContractantRelatedByIdParent instanceof Persistent) {
              $this->aCommonExecContractantRelatedByIdParent->clearAllReferences($deep);
            }
            if ($this->aCommonExecTypeContractant instanceof Persistent) {
              $this->aCommonExecTypeContractant->clearAllReferences($deep);
            }
            if ($this->aCommonExecTypeStructure instanceof Persistent) {
              $this->aCommonExecTypeStructure->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonExecContacts instanceof PropelCollection) {
            $this->collCommonExecContacts->clearIterator();
        }
        $this->collCommonExecContacts = null;
        if ($this->collCommonExecContractantsRelatedById instanceof PropelCollection) {
            $this->collCommonExecContractantsRelatedById->clearIterator();
        }
        $this->collCommonExecContractantsRelatedById = null;
        if ($this->collCommonExecEvenements instanceof PropelCollection) {
            $this->collCommonExecEvenements->clearIterator();
        }
        $this->collCommonExecEvenements = null;
        if ($this->collCommonExecFactures instanceof PropelCollection) {
            $this->collCommonExecFactures->clearIterator();
        }
        $this->collCommonExecFactures = null;
        if ($this->collCommonExecInscritContrats instanceof PropelCollection) {
            $this->collCommonExecInscritContrats->clearIterator();
        }
        $this->collCommonExecInscritContrats = null;
        if ($this->collCommonExecRepartitions instanceof PropelCollection) {
            $this->collCommonExecRepartitions->clearIterator();
        }
        $this->collCommonExecRepartitions = null;
        $this->aCommonExecContrat = null;
        $this->aCommonExecContractantRelatedByIdParent = null;
        $this->aCommonExecTypeContractant = null;
        $this->aCommonExecTypeStructure = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecContractantPeer::DEFAULT_STRING_FORMAT);
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
