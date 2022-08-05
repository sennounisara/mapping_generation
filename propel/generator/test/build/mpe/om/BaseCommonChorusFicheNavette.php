<?php


/**
 * Base class that represents a row from the 'Chorus_Fiche_Navette' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonChorusFicheNavette extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonChorusFicheNavettePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonChorusFicheNavettePeer
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
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_chorus_echange field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $id_chorus_echange;

    /**
     * The value for the rpa field.
     * @var        string
     */
    protected $rpa;

    /**
     * The value for the objet field.
     * @var        string
     */
    protected $objet;

    /**
     * The value for the fiche_immobilisation field.
     * @var        string
     */
    protected $fiche_immobilisation;

    /**
     * The value for the attente_pj field.
     * @var        string
     */
    protected $attente_pj;

    /**
     * The value for the marche_partage field.
     * @var        string
     */
    protected $marche_partage;

    /**
     * The value for the id_accord_cadre field.
     * @var        string
     */
    protected $id_accord_cadre;

    /**
     * The value for the lib_accord_cadre field.
     * @var        string
     */
    protected $lib_accord_cadre;

    /**
     * The value for the annee_creation_accord_cadre field.
     * @var        string
     */
    protected $annee_creation_accord_cadre;

    /**
     * The value for the montant_ht field.
     * @var        string
     */
    protected $montant_ht;

    /**
     * The value for the reconductible field.
     * @var        string
     */
    protected $reconductible;

    /**
     * The value for the visa_accf field.
     * @var        string
     */
    protected $visa_accf;

    /**
     * The value for the visa_prefet field.
     * @var        string
     */
    protected $visa_prefet;

    /**
     * The value for the retenue_garantie field.
     * @var        string
     */
    protected $retenue_garantie;

    /**
     * The value for the montant_mini field.
     * @var        string
     */
    protected $montant_mini;

    /**
     * The value for the montant_maxi field.
     * @var        string
     */
    protected $montant_maxi;

    /**
     * The value for the montant_forfaitaire field.
     * @var        string
     */
    protected $montant_forfaitaire;

    /**
     * The value for the montant_bc field.
     * @var        string
     */
    protected $montant_bc;

    /**
     * The value for the taux_tva field.
     * @var        string
     */
    protected $taux_tva;

    /**
     * The value for the centre_cout field.
     * @var        string
     */
    protected $centre_cout;

    /**
     * The value for the centre_financier field.
     * @var        string
     */
    protected $centre_financier;

    /**
     * The value for the activite field.
     * @var        string
     */
    protected $activite;

    /**
     * The value for the domaine_fonctionnel field.
     * @var        string
     */
    protected $domaine_fonctionnel;

    /**
     * The value for the fond field.
     * @var        string
     */
    protected $fond;

    /**
     * The value for the localisation_interministerielle field.
     * @var        string
     */
    protected $localisation_interministerielle;

    /**
     * The value for the nature field.
     * @var        string
     */
    protected $nature;

    /**
     * The value for the axe_ministeriel1 field.
     * @var        string
     */
    protected $axe_ministeriel1;

    /**
     * The value for the projet_analytique field.
     * @var        string
     */
    protected $projet_analytique;

    /**
     * The value for the localisation_ministerielle field.
     * @var        string
     */
    protected $localisation_ministerielle;

    /**
     * The value for the axe_ministeriel2 field.
     * @var        string
     */
    protected $axe_ministeriel2;

    /**
     * The value for the remarques field.
     * @var        string
     */
    protected $remarques;

    /**
     * The value for the id_document field.
     * @var        int
     */
    protected $id_document;

    /**
     * The value for the nom_document field.
     * @var        string
     */
    protected $nom_document;

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
        $this->id_chorus_echange = '0';
    }

    /**
     * Initializes internal state of BaseCommonChorusFicheNavette object.
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
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
    }

    /**
     * Get the [id_chorus_echange] column value.
     * 
     * @return string
     */
    public function getIdChorusEchange()
    {

        return $this->id_chorus_echange;
    }

    /**
     * Get the [rpa] column value.
     * 
     * @return string
     */
    public function getRpa()
    {

        return $this->rpa;
    }

    /**
     * Get the [objet] column value.
     * 
     * @return string
     */
    public function getObjet()
    {

        return $this->objet;
    }

    /**
     * Get the [fiche_immobilisation] column value.
     * 
     * @return string
     */
    public function getFicheImmobilisation()
    {

        return $this->fiche_immobilisation;
    }

    /**
     * Get the [attente_pj] column value.
     * 
     * @return string
     */
    public function getAttentePj()
    {

        return $this->attente_pj;
    }

    /**
     * Get the [marche_partage] column value.
     * 
     * @return string
     */
    public function getMarchePartage()
    {

        return $this->marche_partage;
    }

    /**
     * Get the [id_accord_cadre] column value.
     * 
     * @return string
     */
    public function getIdAccordCadre()
    {

        return $this->id_accord_cadre;
    }

    /**
     * Get the [lib_accord_cadre] column value.
     * 
     * @return string
     */
    public function getLibAccordCadre()
    {

        return $this->lib_accord_cadre;
    }

    /**
     * Get the [annee_creation_accord_cadre] column value.
     * 
     * @return string
     */
    public function getAnneeCreationAccordCadre()
    {

        return $this->annee_creation_accord_cadre;
    }

    /**
     * Get the [montant_ht] column value.
     * 
     * @return string
     */
    public function getMontantHt()
    {

        return $this->montant_ht;
    }

    /**
     * Get the [reconductible] column value.
     * 
     * @return string
     */
    public function getReconductible()
    {

        return $this->reconductible;
    }

    /**
     * Get the [visa_accf] column value.
     * 
     * @return string
     */
    public function getVisaAccf()
    {

        return $this->visa_accf;
    }

    /**
     * Get the [visa_prefet] column value.
     * 
     * @return string
     */
    public function getVisaPrefet()
    {

        return $this->visa_prefet;
    }

    /**
     * Get the [retenue_garantie] column value.
     * 
     * @return string
     */
    public function getRetenueGarantie()
    {

        return $this->retenue_garantie;
    }

    /**
     * Get the [montant_mini] column value.
     * 
     * @return string
     */
    public function getMontantMini()
    {

        return $this->montant_mini;
    }

    /**
     * Get the [montant_maxi] column value.
     * 
     * @return string
     */
    public function getMontantMaxi()
    {

        return $this->montant_maxi;
    }

    /**
     * Get the [montant_forfaitaire] column value.
     * 
     * @return string
     */
    public function getMontantForfaitaire()
    {

        return $this->montant_forfaitaire;
    }

    /**
     * Get the [montant_bc] column value.
     * 
     * @return string
     */
    public function getMontantBc()
    {

        return $this->montant_bc;
    }

    /**
     * Get the [taux_tva] column value.
     * 
     * @return string
     */
    public function getTauxTva()
    {

        return $this->taux_tva;
    }

    /**
     * Get the [centre_cout] column value.
     * 
     * @return string
     */
    public function getCentreCout()
    {

        return $this->centre_cout;
    }

    /**
     * Get the [centre_financier] column value.
     * 
     * @return string
     */
    public function getCentreFinancier()
    {

        return $this->centre_financier;
    }

    /**
     * Get the [activite] column value.
     * 
     * @return string
     */
    public function getActivite()
    {

        return $this->activite;
    }

    /**
     * Get the [domaine_fonctionnel] column value.
     * 
     * @return string
     */
    public function getDomaineFonctionnel()
    {

        return $this->domaine_fonctionnel;
    }

    /**
     * Get the [fond] column value.
     * 
     * @return string
     */
    public function getFond()
    {

        return $this->fond;
    }

    /**
     * Get the [localisation_interministerielle] column value.
     * 
     * @return string
     */
    public function getLocalisationInterministerielle()
    {

        return $this->localisation_interministerielle;
    }

    /**
     * Get the [nature] column value.
     * 
     * @return string
     */
    public function getNature()
    {

        return $this->nature;
    }

    /**
     * Get the [axe_ministeriel1] column value.
     * 
     * @return string
     */
    public function getAxeMinisteriel1()
    {

        return $this->axe_ministeriel1;
    }

    /**
     * Get the [projet_analytique] column value.
     * 
     * @return string
     */
    public function getProjetAnalytique()
    {

        return $this->projet_analytique;
    }

    /**
     * Get the [localisation_ministerielle] column value.
     * 
     * @return string
     */
    public function getLocalisationMinisterielle()
    {

        return $this->localisation_ministerielle;
    }

    /**
     * Get the [axe_ministeriel2] column value.
     * 
     * @return string
     */
    public function getAxeMinisteriel2()
    {

        return $this->axe_ministeriel2;
    }

    /**
     * Get the [remarques] column value.
     * 
     * @return string
     */
    public function getRemarques()
    {

        return $this->remarques;
    }

    /**
     * Get the [id_document] column value.
     * 
     * @return int
     */
    public function getIdDocument()
    {

        return $this->id_document;
    }

    /**
     * Get the [nom_document] column value.
     * 
     * @return string
     */
    public function getNomDocument()
    {

        return $this->nom_document;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_chorus_echange] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setIdChorusEchange($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_chorus_echange !== $v) {
            $this->id_chorus_echange = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::ID_CHORUS_ECHANGE;
        }


        return $this;
    } // setIdChorusEchange()

    /**
     * Set the value of [rpa] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setRpa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rpa !== $v) {
            $this->rpa = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::RPA;
        }


        return $this;
    } // setRpa()

    /**
     * Set the value of [objet] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setObjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet !== $v) {
            $this->objet = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::OBJET;
        }


        return $this;
    } // setObjet()

    /**
     * Set the value of [fiche_immobilisation] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setFicheImmobilisation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fiche_immobilisation !== $v) {
            $this->fiche_immobilisation = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::FICHE_IMMOBILISATION;
        }


        return $this;
    } // setFicheImmobilisation()

    /**
     * Set the value of [attente_pj] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setAttentePj($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->attente_pj !== $v) {
            $this->attente_pj = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::ATTENTE_PJ;
        }


        return $this;
    } // setAttentePj()

    /**
     * Set the value of [marche_partage] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setMarchePartage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->marche_partage !== $v) {
            $this->marche_partage = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::MARCHE_PARTAGE;
        }


        return $this;
    } // setMarchePartage()

    /**
     * Set the value of [id_accord_cadre] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setIdAccordCadre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_accord_cadre !== $v) {
            $this->id_accord_cadre = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::ID_ACCORD_CADRE;
        }


        return $this;
    } // setIdAccordCadre()

    /**
     * Set the value of [lib_accord_cadre] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setLibAccordCadre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lib_accord_cadre !== $v) {
            $this->lib_accord_cadre = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::LIB_ACCORD_CADRE;
        }


        return $this;
    } // setLibAccordCadre()

    /**
     * Set the value of [annee_creation_accord_cadre] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setAnneeCreationAccordCadre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annee_creation_accord_cadre !== $v) {
            $this->annee_creation_accord_cadre = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::ANNEE_CREATION_ACCORD_CADRE;
        }


        return $this;
    } // setAnneeCreationAccordCadre()

    /**
     * Set the value of [montant_ht] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setMontantHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_ht !== $v) {
            $this->montant_ht = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::MONTANT_HT;
        }


        return $this;
    } // setMontantHt()

    /**
     * Set the value of [reconductible] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setReconductible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reconductible !== $v) {
            $this->reconductible = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::RECONDUCTIBLE;
        }


        return $this;
    } // setReconductible()

    /**
     * Set the value of [visa_accf] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setVisaAccf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visa_accf !== $v) {
            $this->visa_accf = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::VISA_ACCF;
        }


        return $this;
    } // setVisaAccf()

    /**
     * Set the value of [visa_prefet] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setVisaPrefet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visa_prefet !== $v) {
            $this->visa_prefet = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::VISA_PREFET;
        }


        return $this;
    } // setVisaPrefet()

    /**
     * Set the value of [retenue_garantie] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setRetenueGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->retenue_garantie !== $v) {
            $this->retenue_garantie = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::RETENUE_GARANTIE;
        }


        return $this;
    } // setRetenueGarantie()

    /**
     * Set the value of [montant_mini] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setMontantMini($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_mini !== $v) {
            $this->montant_mini = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::MONTANT_MINI;
        }


        return $this;
    } // setMontantMini()

    /**
     * Set the value of [montant_maxi] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setMontantMaxi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_maxi !== $v) {
            $this->montant_maxi = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::MONTANT_MAXI;
        }


        return $this;
    } // setMontantMaxi()

    /**
     * Set the value of [montant_forfaitaire] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setMontantForfaitaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_forfaitaire !== $v) {
            $this->montant_forfaitaire = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::MONTANT_FORFAITAIRE;
        }


        return $this;
    } // setMontantForfaitaire()

    /**
     * Set the value of [montant_bc] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setMontantBc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_bc !== $v) {
            $this->montant_bc = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::MONTANT_BC;
        }


        return $this;
    } // setMontantBc()

    /**
     * Set the value of [taux_tva] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setTauxTva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taux_tva !== $v) {
            $this->taux_tva = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::TAUX_TVA;
        }


        return $this;
    } // setTauxTva()

    /**
     * Set the value of [centre_cout] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setCentreCout($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->centre_cout !== $v) {
            $this->centre_cout = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::CENTRE_COUT;
        }


        return $this;
    } // setCentreCout()

    /**
     * Set the value of [centre_financier] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setCentreFinancier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->centre_financier !== $v) {
            $this->centre_financier = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::CENTRE_FINANCIER;
        }


        return $this;
    } // setCentreFinancier()

    /**
     * Set the value of [activite] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setActivite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->activite !== $v) {
            $this->activite = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::ACTIVITE;
        }


        return $this;
    } // setActivite()

    /**
     * Set the value of [domaine_fonctionnel] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setDomaineFonctionnel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->domaine_fonctionnel !== $v) {
            $this->domaine_fonctionnel = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::DOMAINE_FONCTIONNEL;
        }


        return $this;
    } // setDomaineFonctionnel()

    /**
     * Set the value of [fond] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setFond($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fond !== $v) {
            $this->fond = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::FOND;
        }


        return $this;
    } // setFond()

    /**
     * Set the value of [localisation_interministerielle] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setLocalisationInterministerielle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->localisation_interministerielle !== $v) {
            $this->localisation_interministerielle = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::LOCALISATION_INTERMINISTERIELLE;
        }


        return $this;
    } // setLocalisationInterministerielle()

    /**
     * Set the value of [nature] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setNature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nature !== $v) {
            $this->nature = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::NATURE;
        }


        return $this;
    } // setNature()

    /**
     * Set the value of [axe_ministeriel1] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setAxeMinisteriel1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->axe_ministeriel1 !== $v) {
            $this->axe_ministeriel1 = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::AXE_MINISTERIEL1;
        }


        return $this;
    } // setAxeMinisteriel1()

    /**
     * Set the value of [projet_analytique] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setProjetAnalytique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->projet_analytique !== $v) {
            $this->projet_analytique = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::PROJET_ANALYTIQUE;
        }


        return $this;
    } // setProjetAnalytique()

    /**
     * Set the value of [localisation_ministerielle] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setLocalisationMinisterielle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->localisation_ministerielle !== $v) {
            $this->localisation_ministerielle = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::LOCALISATION_MINISTERIELLE;
        }


        return $this;
    } // setLocalisationMinisterielle()

    /**
     * Set the value of [axe_ministeriel2] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setAxeMinisteriel2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->axe_ministeriel2 !== $v) {
            $this->axe_ministeriel2 = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::AXE_MINISTERIEL2;
        }


        return $this;
    } // setAxeMinisteriel2()

    /**
     * Set the value of [remarques] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setRemarques($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarques !== $v) {
            $this->remarques = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::REMARQUES;
        }


        return $this;
    } // setRemarques()

    /**
     * Set the value of [id_document] column.
     * 
     * @param int $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setIdDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_document !== $v) {
            $this->id_document = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::ID_DOCUMENT;
        }


        return $this;
    } // setIdDocument()

    /**
     * Set the value of [nom_document] column.
     * 
     * @param string $v new value
     * @return CommonChorusFicheNavette The current object (for fluent API support)
     */
    public function setNomDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_document !== $v) {
            $this->nom_document = $v;
            $this->modifiedColumns[] = CommonChorusFicheNavettePeer::NOM_DOCUMENT;
        }


        return $this;
    } // setNomDocument()

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
            if ($this->id_chorus_echange !== '0') {
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
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_chorus_echange = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->rpa = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->objet = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->fiche_immobilisation = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->attente_pj = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->marche_partage = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->id_accord_cadre = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->lib_accord_cadre = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->annee_creation_accord_cadre = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->montant_ht = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->reconductible = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->visa_accf = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->visa_prefet = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->retenue_garantie = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->montant_mini = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->montant_maxi = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->montant_forfaitaire = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->montant_bc = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->taux_tva = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->centre_cout = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->centre_financier = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->activite = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->domaine_fonctionnel = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->fond = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->localisation_interministerielle = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->nature = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->axe_ministeriel1 = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->projet_analytique = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->localisation_ministerielle = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->axe_ministeriel2 = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->remarques = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->id_document = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->nom_document = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 35; // 35 = CommonChorusFicheNavettePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonChorusFicheNavette object", $e);
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
            $con = Propel::getConnection(CommonChorusFicheNavettePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonChorusFicheNavettePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonChorusFicheNavettePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonChorusFicheNavetteQuery::create()
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
            $con = Propel::getConnection(CommonChorusFicheNavettePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonChorusFicheNavettePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonChorusFicheNavettePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonChorusFicheNavettePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ID_CHORUS_ECHANGE)) {
            $modifiedColumns[':p' . $index++]  = '`id_chorus_echange`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::RPA)) {
            $modifiedColumns[':p' . $index++]  = '`rpa`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::OBJET)) {
            $modifiedColumns[':p' . $index++]  = '`objet`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::FICHE_IMMOBILISATION)) {
            $modifiedColumns[':p' . $index++]  = '`fiche_immobilisation`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ATTENTE_PJ)) {
            $modifiedColumns[':p' . $index++]  = '`attente_pj`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::MARCHE_PARTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`marche_partage`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ID_ACCORD_CADRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_accord_cadre`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::LIB_ACCORD_CADRE)) {
            $modifiedColumns[':p' . $index++]  = '`lib_accord_cadre`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ANNEE_CREATION_ACCORD_CADRE)) {
            $modifiedColumns[':p' . $index++]  = '`annee_creation_accord_cadre`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::MONTANT_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_ht`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::RECONDUCTIBLE)) {
            $modifiedColumns[':p' . $index++]  = '`reconductible`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::VISA_ACCF)) {
            $modifiedColumns[':p' . $index++]  = '`visa_accf`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::VISA_PREFET)) {
            $modifiedColumns[':p' . $index++]  = '`visa_prefet`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::RETENUE_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`retenue_garantie`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::MONTANT_MINI)) {
            $modifiedColumns[':p' . $index++]  = '`montant_mini`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::MONTANT_MAXI)) {
            $modifiedColumns[':p' . $index++]  = '`montant_maxi`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::MONTANT_FORFAITAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_forfaitaire`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::MONTANT_BC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_bc`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::TAUX_TVA)) {
            $modifiedColumns[':p' . $index++]  = '`taux_tva`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::CENTRE_COUT)) {
            $modifiedColumns[':p' . $index++]  = '`centre_cout`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::CENTRE_FINANCIER)) {
            $modifiedColumns[':p' . $index++]  = '`centre_financier`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ACTIVITE)) {
            $modifiedColumns[':p' . $index++]  = '`activite`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::DOMAINE_FONCTIONNEL)) {
            $modifiedColumns[':p' . $index++]  = '`domaine_fonctionnel`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::FOND)) {
            $modifiedColumns[':p' . $index++]  = '`fond`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::LOCALISATION_INTERMINISTERIELLE)) {
            $modifiedColumns[':p' . $index++]  = '`localisation_interministerielle`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::NATURE)) {
            $modifiedColumns[':p' . $index++]  = '`nature`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::AXE_MINISTERIEL1)) {
            $modifiedColumns[':p' . $index++]  = '`axe_ministeriel1`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::PROJET_ANALYTIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`projet_analytique`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::LOCALISATION_MINISTERIELLE)) {
            $modifiedColumns[':p' . $index++]  = '`localisation_ministerielle`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::AXE_MINISTERIEL2)) {
            $modifiedColumns[':p' . $index++]  = '`axe_ministeriel2`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::REMARQUES)) {
            $modifiedColumns[':p' . $index++]  = '`remarques`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ID_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_document`';
        }
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::NOM_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_document`';
        }

        $sql = sprintf(
            'INSERT INTO `Chorus_Fiche_Navette` (%s) VALUES (%s)',
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
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_chorus_echange`':						
                        $stmt->bindValue($identifier, $this->id_chorus_echange, PDO::PARAM_STR);
                        break;
                    case '`rpa`':						
                        $stmt->bindValue($identifier, $this->rpa, PDO::PARAM_STR);
                        break;
                    case '`objet`':						
                        $stmt->bindValue($identifier, $this->objet, PDO::PARAM_STR);
                        break;
                    case '`fiche_immobilisation`':						
                        $stmt->bindValue($identifier, $this->fiche_immobilisation, PDO::PARAM_STR);
                        break;
                    case '`attente_pj`':						
                        $stmt->bindValue($identifier, $this->attente_pj, PDO::PARAM_STR);
                        break;
                    case '`marche_partage`':						
                        $stmt->bindValue($identifier, $this->marche_partage, PDO::PARAM_STR);
                        break;
                    case '`id_accord_cadre`':						
                        $stmt->bindValue($identifier, $this->id_accord_cadre, PDO::PARAM_STR);
                        break;
                    case '`lib_accord_cadre`':						
                        $stmt->bindValue($identifier, $this->lib_accord_cadre, PDO::PARAM_STR);
                        break;
                    case '`annee_creation_accord_cadre`':						
                        $stmt->bindValue($identifier, $this->annee_creation_accord_cadre, PDO::PARAM_STR);
                        break;
                    case '`montant_ht`':						
                        $stmt->bindValue($identifier, $this->montant_ht, PDO::PARAM_STR);
                        break;
                    case '`reconductible`':						
                        $stmt->bindValue($identifier, $this->reconductible, PDO::PARAM_STR);
                        break;
                    case '`visa_accf`':						
                        $stmt->bindValue($identifier, $this->visa_accf, PDO::PARAM_STR);
                        break;
                    case '`visa_prefet`':						
                        $stmt->bindValue($identifier, $this->visa_prefet, PDO::PARAM_STR);
                        break;
                    case '`retenue_garantie`':						
                        $stmt->bindValue($identifier, $this->retenue_garantie, PDO::PARAM_STR);
                        break;
                    case '`montant_mini`':						
                        $stmt->bindValue($identifier, $this->montant_mini, PDO::PARAM_STR);
                        break;
                    case '`montant_maxi`':						
                        $stmt->bindValue($identifier, $this->montant_maxi, PDO::PARAM_STR);
                        break;
                    case '`montant_forfaitaire`':						
                        $stmt->bindValue($identifier, $this->montant_forfaitaire, PDO::PARAM_STR);
                        break;
                    case '`montant_bc`':						
                        $stmt->bindValue($identifier, $this->montant_bc, PDO::PARAM_STR);
                        break;
                    case '`taux_tva`':						
                        $stmt->bindValue($identifier, $this->taux_tva, PDO::PARAM_STR);
                        break;
                    case '`centre_cout`':						
                        $stmt->bindValue($identifier, $this->centre_cout, PDO::PARAM_STR);
                        break;
                    case '`centre_financier`':						
                        $stmt->bindValue($identifier, $this->centre_financier, PDO::PARAM_STR);
                        break;
                    case '`activite`':						
                        $stmt->bindValue($identifier, $this->activite, PDO::PARAM_STR);
                        break;
                    case '`domaine_fonctionnel`':						
                        $stmt->bindValue($identifier, $this->domaine_fonctionnel, PDO::PARAM_STR);
                        break;
                    case '`fond`':						
                        $stmt->bindValue($identifier, $this->fond, PDO::PARAM_STR);
                        break;
                    case '`localisation_interministerielle`':						
                        $stmt->bindValue($identifier, $this->localisation_interministerielle, PDO::PARAM_STR);
                        break;
                    case '`nature`':						
                        $stmt->bindValue($identifier, $this->nature, PDO::PARAM_STR);
                        break;
                    case '`axe_ministeriel1`':						
                        $stmt->bindValue($identifier, $this->axe_ministeriel1, PDO::PARAM_STR);
                        break;
                    case '`projet_analytique`':						
                        $stmt->bindValue($identifier, $this->projet_analytique, PDO::PARAM_STR);
                        break;
                    case '`localisation_ministerielle`':						
                        $stmt->bindValue($identifier, $this->localisation_ministerielle, PDO::PARAM_STR);
                        break;
                    case '`axe_ministeriel2`':						
                        $stmt->bindValue($identifier, $this->axe_ministeriel2, PDO::PARAM_STR);
                        break;
                    case '`remarques`':						
                        $stmt->bindValue($identifier, $this->remarques, PDO::PARAM_STR);
                        break;
                    case '`id_document`':						
                        $stmt->bindValue($identifier, $this->id_document, PDO::PARAM_INT);
                        break;
                    case '`nom_document`':						
                        $stmt->bindValue($identifier, $this->nom_document, PDO::PARAM_STR);
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


            if (($retval = CommonChorusFicheNavettePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonChorusFicheNavettePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getIdChorusEchange();
                break;
            case 3:
                return $this->getRpa();
                break;
            case 4:
                return $this->getObjet();
                break;
            case 5:
                return $this->getFicheImmobilisation();
                break;
            case 6:
                return $this->getAttentePj();
                break;
            case 7:
                return $this->getMarchePartage();
                break;
            case 8:
                return $this->getIdAccordCadre();
                break;
            case 9:
                return $this->getLibAccordCadre();
                break;
            case 10:
                return $this->getAnneeCreationAccordCadre();
                break;
            case 11:
                return $this->getMontantHt();
                break;
            case 12:
                return $this->getReconductible();
                break;
            case 13:
                return $this->getVisaAccf();
                break;
            case 14:
                return $this->getVisaPrefet();
                break;
            case 15:
                return $this->getRetenueGarantie();
                break;
            case 16:
                return $this->getMontantMini();
                break;
            case 17:
                return $this->getMontantMaxi();
                break;
            case 18:
                return $this->getMontantForfaitaire();
                break;
            case 19:
                return $this->getMontantBc();
                break;
            case 20:
                return $this->getTauxTva();
                break;
            case 21:
                return $this->getCentreCout();
                break;
            case 22:
                return $this->getCentreFinancier();
                break;
            case 23:
                return $this->getActivite();
                break;
            case 24:
                return $this->getDomaineFonctionnel();
                break;
            case 25:
                return $this->getFond();
                break;
            case 26:
                return $this->getLocalisationInterministerielle();
                break;
            case 27:
                return $this->getNature();
                break;
            case 28:
                return $this->getAxeMinisteriel1();
                break;
            case 29:
                return $this->getProjetAnalytique();
                break;
            case 30:
                return $this->getLocalisationMinisterielle();
                break;
            case 31:
                return $this->getAxeMinisteriel2();
                break;
            case 32:
                return $this->getRemarques();
                break;
            case 33:
                return $this->getIdDocument();
                break;
            case 34:
                return $this->getNomDocument();
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
        if (isset($alreadyDumpedObjects['CommonChorusFicheNavette'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonChorusFicheNavette'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonChorusFicheNavettePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdChorusEchange(),
            $keys[3] => $this->getRpa(),
            $keys[4] => $this->getObjet(),
            $keys[5] => $this->getFicheImmobilisation(),
            $keys[6] => $this->getAttentePj(),
            $keys[7] => $this->getMarchePartage(),
            $keys[8] => $this->getIdAccordCadre(),
            $keys[9] => $this->getLibAccordCadre(),
            $keys[10] => $this->getAnneeCreationAccordCadre(),
            $keys[11] => $this->getMontantHt(),
            $keys[12] => $this->getReconductible(),
            $keys[13] => $this->getVisaAccf(),
            $keys[14] => $this->getVisaPrefet(),
            $keys[15] => $this->getRetenueGarantie(),
            $keys[16] => $this->getMontantMini(),
            $keys[17] => $this->getMontantMaxi(),
            $keys[18] => $this->getMontantForfaitaire(),
            $keys[19] => $this->getMontantBc(),
            $keys[20] => $this->getTauxTva(),
            $keys[21] => $this->getCentreCout(),
            $keys[22] => $this->getCentreFinancier(),
            $keys[23] => $this->getActivite(),
            $keys[24] => $this->getDomaineFonctionnel(),
            $keys[25] => $this->getFond(),
            $keys[26] => $this->getLocalisationInterministerielle(),
            $keys[27] => $this->getNature(),
            $keys[28] => $this->getAxeMinisteriel1(),
            $keys[29] => $this->getProjetAnalytique(),
            $keys[30] => $this->getLocalisationMinisterielle(),
            $keys[31] => $this->getAxeMinisteriel2(),
            $keys[32] => $this->getRemarques(),
            $keys[33] => $this->getIdDocument(),
            $keys[34] => $this->getNomDocument(),
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
        $pos = CommonChorusFicheNavettePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setIdChorusEchange($value);
                break;
            case 3:
                $this->setRpa($value);
                break;
            case 4:
                $this->setObjet($value);
                break;
            case 5:
                $this->setFicheImmobilisation($value);
                break;
            case 6:
                $this->setAttentePj($value);
                break;
            case 7:
                $this->setMarchePartage($value);
                break;
            case 8:
                $this->setIdAccordCadre($value);
                break;
            case 9:
                $this->setLibAccordCadre($value);
                break;
            case 10:
                $this->setAnneeCreationAccordCadre($value);
                break;
            case 11:
                $this->setMontantHt($value);
                break;
            case 12:
                $this->setReconductible($value);
                break;
            case 13:
                $this->setVisaAccf($value);
                break;
            case 14:
                $this->setVisaPrefet($value);
                break;
            case 15:
                $this->setRetenueGarantie($value);
                break;
            case 16:
                $this->setMontantMini($value);
                break;
            case 17:
                $this->setMontantMaxi($value);
                break;
            case 18:
                $this->setMontantForfaitaire($value);
                break;
            case 19:
                $this->setMontantBc($value);
                break;
            case 20:
                $this->setTauxTva($value);
                break;
            case 21:
                $this->setCentreCout($value);
                break;
            case 22:
                $this->setCentreFinancier($value);
                break;
            case 23:
                $this->setActivite($value);
                break;
            case 24:
                $this->setDomaineFonctionnel($value);
                break;
            case 25:
                $this->setFond($value);
                break;
            case 26:
                $this->setLocalisationInterministerielle($value);
                break;
            case 27:
                $this->setNature($value);
                break;
            case 28:
                $this->setAxeMinisteriel1($value);
                break;
            case 29:
                $this->setProjetAnalytique($value);
                break;
            case 30:
                $this->setLocalisationMinisterielle($value);
                break;
            case 31:
                $this->setAxeMinisteriel2($value);
                break;
            case 32:
                $this->setRemarques($value);
                break;
            case 33:
                $this->setIdDocument($value);
                break;
            case 34:
                $this->setNomDocument($value);
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
        $keys = CommonChorusFicheNavettePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdChorusEchange($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRpa($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setObjet($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFicheImmobilisation($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAttentePj($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMarchePartage($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdAccordCadre($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLibAccordCadre($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAnneeCreationAccordCadre($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMontantHt($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setReconductible($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setVisaAccf($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setVisaPrefet($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setRetenueGarantie($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMontantMini($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setMontantMaxi($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMontantForfaitaire($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMontantBc($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTauxTva($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setCentreCout($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setCentreFinancier($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setActivite($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDomaineFonctionnel($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setFond($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setLocalisationInterministerielle($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setNature($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setAxeMinisteriel1($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setProjetAnalytique($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setLocalisationMinisterielle($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setAxeMinisteriel2($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setRemarques($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setIdDocument($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setNomDocument($arr[$keys[34]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonChorusFicheNavettePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ID)) $criteria->add(CommonChorusFicheNavettePeer::ID, $this->id);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ORGANISME)) $criteria->add(CommonChorusFicheNavettePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ID_CHORUS_ECHANGE)) $criteria->add(CommonChorusFicheNavettePeer::ID_CHORUS_ECHANGE, $this->id_chorus_echange);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::RPA)) $criteria->add(CommonChorusFicheNavettePeer::RPA, $this->rpa);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::OBJET)) $criteria->add(CommonChorusFicheNavettePeer::OBJET, $this->objet);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::FICHE_IMMOBILISATION)) $criteria->add(CommonChorusFicheNavettePeer::FICHE_IMMOBILISATION, $this->fiche_immobilisation);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ATTENTE_PJ)) $criteria->add(CommonChorusFicheNavettePeer::ATTENTE_PJ, $this->attente_pj);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::MARCHE_PARTAGE)) $criteria->add(CommonChorusFicheNavettePeer::MARCHE_PARTAGE, $this->marche_partage);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ID_ACCORD_CADRE)) $criteria->add(CommonChorusFicheNavettePeer::ID_ACCORD_CADRE, $this->id_accord_cadre);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::LIB_ACCORD_CADRE)) $criteria->add(CommonChorusFicheNavettePeer::LIB_ACCORD_CADRE, $this->lib_accord_cadre);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ANNEE_CREATION_ACCORD_CADRE)) $criteria->add(CommonChorusFicheNavettePeer::ANNEE_CREATION_ACCORD_CADRE, $this->annee_creation_accord_cadre);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::MONTANT_HT)) $criteria->add(CommonChorusFicheNavettePeer::MONTANT_HT, $this->montant_ht);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::RECONDUCTIBLE)) $criteria->add(CommonChorusFicheNavettePeer::RECONDUCTIBLE, $this->reconductible);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::VISA_ACCF)) $criteria->add(CommonChorusFicheNavettePeer::VISA_ACCF, $this->visa_accf);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::VISA_PREFET)) $criteria->add(CommonChorusFicheNavettePeer::VISA_PREFET, $this->visa_prefet);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::RETENUE_GARANTIE)) $criteria->add(CommonChorusFicheNavettePeer::RETENUE_GARANTIE, $this->retenue_garantie);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::MONTANT_MINI)) $criteria->add(CommonChorusFicheNavettePeer::MONTANT_MINI, $this->montant_mini);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::MONTANT_MAXI)) $criteria->add(CommonChorusFicheNavettePeer::MONTANT_MAXI, $this->montant_maxi);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::MONTANT_FORFAITAIRE)) $criteria->add(CommonChorusFicheNavettePeer::MONTANT_FORFAITAIRE, $this->montant_forfaitaire);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::MONTANT_BC)) $criteria->add(CommonChorusFicheNavettePeer::MONTANT_BC, $this->montant_bc);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::TAUX_TVA)) $criteria->add(CommonChorusFicheNavettePeer::TAUX_TVA, $this->taux_tva);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::CENTRE_COUT)) $criteria->add(CommonChorusFicheNavettePeer::CENTRE_COUT, $this->centre_cout);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::CENTRE_FINANCIER)) $criteria->add(CommonChorusFicheNavettePeer::CENTRE_FINANCIER, $this->centre_financier);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ACTIVITE)) $criteria->add(CommonChorusFicheNavettePeer::ACTIVITE, $this->activite);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::DOMAINE_FONCTIONNEL)) $criteria->add(CommonChorusFicheNavettePeer::DOMAINE_FONCTIONNEL, $this->domaine_fonctionnel);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::FOND)) $criteria->add(CommonChorusFicheNavettePeer::FOND, $this->fond);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::LOCALISATION_INTERMINISTERIELLE)) $criteria->add(CommonChorusFicheNavettePeer::LOCALISATION_INTERMINISTERIELLE, $this->localisation_interministerielle);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::NATURE)) $criteria->add(CommonChorusFicheNavettePeer::NATURE, $this->nature);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::AXE_MINISTERIEL1)) $criteria->add(CommonChorusFicheNavettePeer::AXE_MINISTERIEL1, $this->axe_ministeriel1);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::PROJET_ANALYTIQUE)) $criteria->add(CommonChorusFicheNavettePeer::PROJET_ANALYTIQUE, $this->projet_analytique);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::LOCALISATION_MINISTERIELLE)) $criteria->add(CommonChorusFicheNavettePeer::LOCALISATION_MINISTERIELLE, $this->localisation_ministerielle);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::AXE_MINISTERIEL2)) $criteria->add(CommonChorusFicheNavettePeer::AXE_MINISTERIEL2, $this->axe_ministeriel2);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::REMARQUES)) $criteria->add(CommonChorusFicheNavettePeer::REMARQUES, $this->remarques);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::ID_DOCUMENT)) $criteria->add(CommonChorusFicheNavettePeer::ID_DOCUMENT, $this->id_document);
        if ($this->isColumnModified(CommonChorusFicheNavettePeer::NOM_DOCUMENT)) $criteria->add(CommonChorusFicheNavettePeer::NOM_DOCUMENT, $this->nom_document);

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
        $criteria = new Criteria(CommonChorusFicheNavettePeer::DATABASE_NAME);
        $criteria->add(CommonChorusFicheNavettePeer::ID, $this->id);
        $criteria->add(CommonChorusFicheNavettePeer::ORGANISME, $this->organisme);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getId();
        $pks[1] = $this->getOrganisme();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setId($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getId()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonChorusFicheNavette (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdChorusEchange($this->getIdChorusEchange());
        $copyObj->setRpa($this->getRpa());
        $copyObj->setObjet($this->getObjet());
        $copyObj->setFicheImmobilisation($this->getFicheImmobilisation());
        $copyObj->setAttentePj($this->getAttentePj());
        $copyObj->setMarchePartage($this->getMarchePartage());
        $copyObj->setIdAccordCadre($this->getIdAccordCadre());
        $copyObj->setLibAccordCadre($this->getLibAccordCadre());
        $copyObj->setAnneeCreationAccordCadre($this->getAnneeCreationAccordCadre());
        $copyObj->setMontantHt($this->getMontantHt());
        $copyObj->setReconductible($this->getReconductible());
        $copyObj->setVisaAccf($this->getVisaAccf());
        $copyObj->setVisaPrefet($this->getVisaPrefet());
        $copyObj->setRetenueGarantie($this->getRetenueGarantie());
        $copyObj->setMontantMini($this->getMontantMini());
        $copyObj->setMontantMaxi($this->getMontantMaxi());
        $copyObj->setMontantForfaitaire($this->getMontantForfaitaire());
        $copyObj->setMontantBc($this->getMontantBc());
        $copyObj->setTauxTva($this->getTauxTva());
        $copyObj->setCentreCout($this->getCentreCout());
        $copyObj->setCentreFinancier($this->getCentreFinancier());
        $copyObj->setActivite($this->getActivite());
        $copyObj->setDomaineFonctionnel($this->getDomaineFonctionnel());
        $copyObj->setFond($this->getFond());
        $copyObj->setLocalisationInterministerielle($this->getLocalisationInterministerielle());
        $copyObj->setNature($this->getNature());
        $copyObj->setAxeMinisteriel1($this->getAxeMinisteriel1());
        $copyObj->setProjetAnalytique($this->getProjetAnalytique());
        $copyObj->setLocalisationMinisterielle($this->getLocalisationMinisterielle());
        $copyObj->setAxeMinisteriel2($this->getAxeMinisteriel2());
        $copyObj->setRemarques($this->getRemarques());
        $copyObj->setIdDocument($this->getIdDocument());
        $copyObj->setNomDocument($this->getNomDocument());
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
     * @return CommonChorusFicheNavette Clone of current object.
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
     * @return CommonChorusFicheNavettePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonChorusFicheNavettePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->id_chorus_echange = null;
        $this->rpa = null;
        $this->objet = null;
        $this->fiche_immobilisation = null;
        $this->attente_pj = null;
        $this->marche_partage = null;
        $this->id_accord_cadre = null;
        $this->lib_accord_cadre = null;
        $this->annee_creation_accord_cadre = null;
        $this->montant_ht = null;
        $this->reconductible = null;
        $this->visa_accf = null;
        $this->visa_prefet = null;
        $this->retenue_garantie = null;
        $this->montant_mini = null;
        $this->montant_maxi = null;
        $this->montant_forfaitaire = null;
        $this->montant_bc = null;
        $this->taux_tva = null;
        $this->centre_cout = null;
        $this->centre_financier = null;
        $this->activite = null;
        $this->domaine_fonctionnel = null;
        $this->fond = null;
        $this->localisation_interministerielle = null;
        $this->nature = null;
        $this->axe_ministeriel1 = null;
        $this->projet_analytique = null;
        $this->localisation_ministerielle = null;
        $this->axe_ministeriel2 = null;
        $this->remarques = null;
        $this->id_document = null;
        $this->nom_document = null;
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
        return (string) $this->exportTo(CommonChorusFicheNavettePeer::DEFAULT_STRING_FORMAT);
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
