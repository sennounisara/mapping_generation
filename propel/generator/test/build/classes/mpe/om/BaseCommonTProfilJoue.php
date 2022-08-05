<?php


/**
 * Base class that represents a row from the 'T_Profil_Joue' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTProfilJoue extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTProfilJouePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTProfilJouePeer
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
     * The value for the id_agent field.
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the nom_officiel field.
     * @var        string
     */
    protected $nom_officiel;

    /**
     * The value for the pays field.
     * @var        string
     */
    protected $pays;

    /**
     * The value for the ville field.
     * @var        string
     */
    protected $ville;

    /**
     * The value for the adresse field.
     * @var        string
     */
    protected $adresse;

    /**
     * The value for the code_postal field.
     * @var        string
     */
    protected $code_postal;

    /**
     * The value for the point_contact field.
     * @var        string
     */
    protected $point_contact;

    /**
     * The value for the a_attention_de field.
     * @var        string
     */
    protected $a_attention_de;

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
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the adresse_pouvoir_adjudicateur field.
     * @var        string
     */
    protected $adresse_pouvoir_adjudicateur;

    /**
     * The value for the adresse_profil_acheteur field.
     * @var        string
     */
    protected $adresse_profil_acheteur;

    /**
     * The value for the autorite_nationale field.
     * @var        int
     */
    protected $autorite_nationale;

    /**
     * The value for the office_nationale field.
     * @var        int
     */
    protected $office_nationale;

    /**
     * The value for the collectivite_territoriale field.
     * @var        int
     */
    protected $collectivite_territoriale;

    /**
     * The value for the office_regionale field.
     * @var        int
     */
    protected $office_regionale;

    /**
     * The value for the organisme_public field.
     * @var        int
     */
    protected $organisme_public;

    /**
     * The value for the organisation_europenne field.
     * @var        int
     */
    protected $organisation_europenne;

    /**
     * The value for the autre_type_pouvoir_adjudicateur field.
     * @var        int
     */
    protected $autre_type_pouvoir_adjudicateur;

    /**
     * The value for the autre_libelle_type_pouvoir_adjudicateur field.
     * @var        string
     */
    protected $autre_libelle_type_pouvoir_adjudicateur;

    /**
     * The value for the services_generaux field.
     * @var        int
     */
    protected $services_generaux;

    /**
     * The value for the defense field.
     * @var        int
     */
    protected $defense;

    /**
     * The value for the securite_public field.
     * @var        int
     */
    protected $securite_public;

    /**
     * The value for the environnement field.
     * @var        int
     */
    protected $environnement;

    /**
     * The value for the affaires_economiques field.
     * @var        int
     */
    protected $affaires_economiques;

    /**
     * The value for the sante field.
     * @var        int
     */
    protected $sante;

    /**
     * The value for the developpement_collectif field.
     * @var        int
     */
    protected $developpement_collectif;

    /**
     * The value for the protection_sociale field.
     * @var        int
     */
    protected $protection_sociale;

    /**
     * The value for the loisirs field.
     * @var        int
     */
    protected $loisirs;

    /**
     * The value for the eduction field.
     * @var        int
     */
    protected $eduction;

    /**
     * The value for the autre_activites_principales field.
     * @var        int
     */
    protected $autre_activites_principales;

    /**
     * The value for the autre_libelle_activites_principales field.
     * @var        string
     */
    protected $autre_libelle_activites_principales;

    /**
     * The value for the pouvoir_adjudicateur_agit field.
     * @var        int
     */
    protected $pouvoir_adjudicateur_agit;

    /**
     * The value for the pouvoir_adjudicateur_marche_couvert field.
     * @var        int
     */
    protected $pouvoir_adjudicateur_marche_couvert;

    /**
     * The value for the entite_adjudicatrice_marche_couvert field.
     * @var        int
     */
    protected $entite_adjudicatrice_marche_couvert;

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
     * Get the [id] column value.
     * 
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [id_agent] column value.
     * 
     * @return int
     */
    public function getIdAgent()
    {

        return $this->id_agent;
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
     * Get the [nom_officiel] column value.
     * 
     * @return string
     */
    public function getNomOfficiel()
    {

        return $this->nom_officiel;
    }

    /**
     * Get the [pays] column value.
     * 
     * @return string
     */
    public function getPays()
    {

        return $this->pays;
    }

    /**
     * Get the [ville] column value.
     * 
     * @return string
     */
    public function getVille()
    {

        return $this->ville;
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
     * Get the [code_postal] column value.
     * 
     * @return string
     */
    public function getCodePostal()
    {

        return $this->code_postal;
    }

    /**
     * Get the [point_contact] column value.
     * 
     * @return string
     */
    public function getPointContact()
    {

        return $this->point_contact;
    }

    /**
     * Get the [a_attention_de] column value.
     * 
     * @return string
     */
    public function getAAttentionDe()
    {

        return $this->a_attention_de;
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
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [adresse_pouvoir_adjudicateur] column value.
     * 
     * @return string
     */
    public function getAdressePouvoirAdjudicateur()
    {

        return $this->adresse_pouvoir_adjudicateur;
    }

    /**
     * Get the [adresse_profil_acheteur] column value.
     * 
     * @return string
     */
    public function getAdresseProfilAcheteur()
    {

        return $this->adresse_profil_acheteur;
    }

    /**
     * Get the [autorite_nationale] column value.
     * 
     * @return int
     */
    public function getAutoriteNationale()
    {

        return $this->autorite_nationale;
    }

    /**
     * Get the [office_nationale] column value.
     * 
     * @return int
     */
    public function getOfficeNationale()
    {

        return $this->office_nationale;
    }

    /**
     * Get the [collectivite_territoriale] column value.
     * 
     * @return int
     */
    public function getCollectiviteTerritoriale()
    {

        return $this->collectivite_territoriale;
    }

    /**
     * Get the [office_regionale] column value.
     * 
     * @return int
     */
    public function getOfficeRegionale()
    {

        return $this->office_regionale;
    }

    /**
     * Get the [organisme_public] column value.
     * 
     * @return int
     */
    public function getOrganismePublic()
    {

        return $this->organisme_public;
    }

    /**
     * Get the [organisation_europenne] column value.
     * 
     * @return int
     */
    public function getOrganisationEuropenne()
    {

        return $this->organisation_europenne;
    }

    /**
     * Get the [autre_type_pouvoir_adjudicateur] column value.
     * 
     * @return int
     */
    public function getAutreTypePouvoirAdjudicateur()
    {

        return $this->autre_type_pouvoir_adjudicateur;
    }

    /**
     * Get the [autre_libelle_type_pouvoir_adjudicateur] column value.
     * 
     * @return string
     */
    public function getAutreLibelleTypePouvoirAdjudicateur()
    {

        return $this->autre_libelle_type_pouvoir_adjudicateur;
    }

    /**
     * Get the [services_generaux] column value.
     * 
     * @return int
     */
    public function getServicesGeneraux()
    {

        return $this->services_generaux;
    }

    /**
     * Get the [defense] column value.
     * 
     * @return int
     */
    public function getDefense()
    {

        return $this->defense;
    }

    /**
     * Get the [securite_public] column value.
     * 
     * @return int
     */
    public function getSecuritePublic()
    {

        return $this->securite_public;
    }

    /**
     * Get the [environnement] column value.
     * 
     * @return int
     */
    public function getEnvironnement()
    {

        return $this->environnement;
    }

    /**
     * Get the [affaires_economiques] column value.
     * 
     * @return int
     */
    public function getAffairesEconomiques()
    {

        return $this->affaires_economiques;
    }

    /**
     * Get the [sante] column value.
     * 
     * @return int
     */
    public function getSante()
    {

        return $this->sante;
    }

    /**
     * Get the [developpement_collectif] column value.
     * 
     * @return int
     */
    public function getDeveloppementCollectif()
    {

        return $this->developpement_collectif;
    }

    /**
     * Get the [protection_sociale] column value.
     * 
     * @return int
     */
    public function getProtectionSociale()
    {

        return $this->protection_sociale;
    }

    /**
     * Get the [loisirs] column value.
     * 
     * @return int
     */
    public function getLoisirs()
    {

        return $this->loisirs;
    }

    /**
     * Get the [eduction] column value.
     * 
     * @return int
     */
    public function getEduction()
    {

        return $this->eduction;
    }

    /**
     * Get the [autre_activites_principales] column value.
     * 
     * @return int
     */
    public function getAutreActivitesPrincipales()
    {

        return $this->autre_activites_principales;
    }

    /**
     * Get the [autre_libelle_activites_principales] column value.
     * 
     * @return string
     */
    public function getAutreLibelleActivitesPrincipales()
    {

        return $this->autre_libelle_activites_principales;
    }

    /**
     * Get the [pouvoir_adjudicateur_agit] column value.
     * 
     * @return int
     */
    public function getPouvoirAdjudicateurAgit()
    {

        return $this->pouvoir_adjudicateur_agit;
    }

    /**
     * Get the [pouvoir_adjudicateur_marche_couvert] column value.
     * 
     * @return int
     */
    public function getPouvoirAdjudicateurMarcheCouvert()
    {

        return $this->pouvoir_adjudicateur_marche_couvert;
    }

    /**
     * Get the [entite_adjudicatrice_marche_couvert] column value.
     * 
     * @return int
     */
    public function getEntiteAdjudicatriceMarcheCouvert()
    {

        return $this->entite_adjudicatrice_marche_couvert;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [nom_officiel] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setNomOfficiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_officiel !== $v) {
            $this->nom_officiel = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::NOM_OFFICIEL;
        }


        return $this;
    } // setNomOfficiel()

    /**
     * Set the value of [pays] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays !== $v) {
            $this->pays = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::PAYS;
        }


        return $this;
    } // setPays()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [code_postal] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setCodePostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_postal !== $v) {
            $this->code_postal = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::CODE_POSTAL;
        }


        return $this;
    } // setCodePostal()

    /**
     * Set the value of [point_contact] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setPointContact($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->point_contact !== $v) {
            $this->point_contact = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::POINT_CONTACT;
        }


        return $this;
    } // setPointContact()

    /**
     * Set the value of [a_attention_de] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setAAttentionDe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->a_attention_de !== $v) {
            $this->a_attention_de = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::A_ATTENTION_DE;
        }


        return $this;
    } // setAAttentionDe()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [adresse_pouvoir_adjudicateur] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setAdressePouvoirAdjudicateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_pouvoir_adjudicateur !== $v) {
            $this->adresse_pouvoir_adjudicateur = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::ADRESSE_POUVOIR_ADJUDICATEUR;
        }


        return $this;
    } // setAdressePouvoirAdjudicateur()

    /**
     * Set the value of [adresse_profil_acheteur] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setAdresseProfilAcheteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_profil_acheteur !== $v) {
            $this->adresse_profil_acheteur = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::ADRESSE_PROFIL_ACHETEUR;
        }


        return $this;
    } // setAdresseProfilAcheteur()

    /**
     * Set the value of [autorite_nationale] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setAutoriteNationale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autorite_nationale !== $v) {
            $this->autorite_nationale = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::AUTORITE_NATIONALE;
        }


        return $this;
    } // setAutoriteNationale()

    /**
     * Set the value of [office_nationale] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setOfficeNationale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->office_nationale !== $v) {
            $this->office_nationale = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::OFFICE_NATIONALE;
        }


        return $this;
    } // setOfficeNationale()

    /**
     * Set the value of [collectivite_territoriale] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setCollectiviteTerritoriale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->collectivite_territoriale !== $v) {
            $this->collectivite_territoriale = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::COLLECTIVITE_TERRITORIALE;
        }


        return $this;
    } // setCollectiviteTerritoriale()

    /**
     * Set the value of [office_regionale] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setOfficeRegionale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->office_regionale !== $v) {
            $this->office_regionale = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::OFFICE_REGIONALE;
        }


        return $this;
    } // setOfficeRegionale()

    /**
     * Set the value of [organisme_public] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setOrganismePublic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->organisme_public !== $v) {
            $this->organisme_public = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::ORGANISME_PUBLIC;
        }


        return $this;
    } // setOrganismePublic()

    /**
     * Set the value of [organisation_europenne] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setOrganisationEuropenne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->organisation_europenne !== $v) {
            $this->organisation_europenne = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::ORGANISATION_EUROPENNE;
        }


        return $this;
    } // setOrganisationEuropenne()

    /**
     * Set the value of [autre_type_pouvoir_adjudicateur] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setAutreTypePouvoirAdjudicateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autre_type_pouvoir_adjudicateur !== $v) {
            $this->autre_type_pouvoir_adjudicateur = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::AUTRE_TYPE_POUVOIR_ADJUDICATEUR;
        }


        return $this;
    } // setAutreTypePouvoirAdjudicateur()

    /**
     * Set the value of [autre_libelle_type_pouvoir_adjudicateur] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setAutreLibelleTypePouvoirAdjudicateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autre_libelle_type_pouvoir_adjudicateur !== $v) {
            $this->autre_libelle_type_pouvoir_adjudicateur = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::AUTRE_LIBELLE_TYPE_POUVOIR_ADJUDICATEUR;
        }


        return $this;
    } // setAutreLibelleTypePouvoirAdjudicateur()

    /**
     * Set the value of [services_generaux] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setServicesGeneraux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->services_generaux !== $v) {
            $this->services_generaux = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::SERVICES_GENERAUX;
        }


        return $this;
    } // setServicesGeneraux()

    /**
     * Set the value of [defense] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setDefense($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->defense !== $v) {
            $this->defense = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::DEFENSE;
        }


        return $this;
    } // setDefense()

    /**
     * Set the value of [securite_public] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setSecuritePublic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->securite_public !== $v) {
            $this->securite_public = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::SECURITE_PUBLIC;
        }


        return $this;
    } // setSecuritePublic()

    /**
     * Set the value of [environnement] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setEnvironnement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->environnement !== $v) {
            $this->environnement = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::ENVIRONNEMENT;
        }


        return $this;
    } // setEnvironnement()

    /**
     * Set the value of [affaires_economiques] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setAffairesEconomiques($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->affaires_economiques !== $v) {
            $this->affaires_economiques = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::AFFAIRES_ECONOMIQUES;
        }


        return $this;
    } // setAffairesEconomiques()

    /**
     * Set the value of [sante] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setSante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sante !== $v) {
            $this->sante = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::SANTE;
        }


        return $this;
    } // setSante()

    /**
     * Set the value of [developpement_collectif] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setDeveloppementCollectif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->developpement_collectif !== $v) {
            $this->developpement_collectif = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::DEVELOPPEMENT_COLLECTIF;
        }


        return $this;
    } // setDeveloppementCollectif()

    /**
     * Set the value of [protection_sociale] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setProtectionSociale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->protection_sociale !== $v) {
            $this->protection_sociale = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::PROTECTION_SOCIALE;
        }


        return $this;
    } // setProtectionSociale()

    /**
     * Set the value of [loisirs] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setLoisirs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->loisirs !== $v) {
            $this->loisirs = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::LOISIRS;
        }


        return $this;
    } // setLoisirs()

    /**
     * Set the value of [eduction] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setEduction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eduction !== $v) {
            $this->eduction = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::EDUCTION;
        }


        return $this;
    } // setEduction()

    /**
     * Set the value of [autre_activites_principales] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setAutreActivitesPrincipales($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autre_activites_principales !== $v) {
            $this->autre_activites_principales = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::AUTRE_ACTIVITES_PRINCIPALES;
        }


        return $this;
    } // setAutreActivitesPrincipales()

    /**
     * Set the value of [autre_libelle_activites_principales] column.
     * 
     * @param string $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setAutreLibelleActivitesPrincipales($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autre_libelle_activites_principales !== $v) {
            $this->autre_libelle_activites_principales = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::AUTRE_LIBELLE_ACTIVITES_PRINCIPALES;
        }


        return $this;
    } // setAutreLibelleActivitesPrincipales()

    /**
     * Set the value of [pouvoir_adjudicateur_agit] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setPouvoirAdjudicateurAgit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pouvoir_adjudicateur_agit !== $v) {
            $this->pouvoir_adjudicateur_agit = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_AGIT;
        }


        return $this;
    } // setPouvoirAdjudicateurAgit()

    /**
     * Set the value of [pouvoir_adjudicateur_marche_couvert] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setPouvoirAdjudicateurMarcheCouvert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pouvoir_adjudicateur_marche_couvert !== $v) {
            $this->pouvoir_adjudicateur_marche_couvert = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_MARCHE_COUVERT;
        }


        return $this;
    } // setPouvoirAdjudicateurMarcheCouvert()

    /**
     * Set the value of [entite_adjudicatrice_marche_couvert] column.
     * 
     * @param int $v new value
     * @return CommonTProfilJoue The current object (for fluent API support)
     */
    public function setEntiteAdjudicatriceMarcheCouvert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entite_adjudicatrice_marche_couvert !== $v) {
            $this->entite_adjudicatrice_marche_couvert = $v;
            $this->modifiedColumns[] = CommonTProfilJouePeer::ENTITE_ADJUDICATRICE_MARCHE_COUVERT;
        }


        return $this;
    } // setEntiteAdjudicatriceMarcheCouvert()

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
            $this->id_agent = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->organisme = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->nom_officiel = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->pays = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ville = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->adresse = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->code_postal = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->point_contact = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->a_attention_de = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->telephone = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->fax = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->email = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->adresse_pouvoir_adjudicateur = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->adresse_profil_acheteur = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->autorite_nationale = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->office_nationale = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->collectivite_territoriale = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->office_regionale = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->organisme_public = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->organisation_europenne = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->autre_type_pouvoir_adjudicateur = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->autre_libelle_type_pouvoir_adjudicateur = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->services_generaux = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->defense = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->securite_public = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->environnement = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->affaires_economiques = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->sante = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->developpement_collectif = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->protection_sociale = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->loisirs = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->eduction = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->autre_activites_principales = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->autre_libelle_activites_principales = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->pouvoir_adjudicateur_agit = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->pouvoir_adjudicateur_marche_couvert = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->entite_adjudicatrice_marche_couvert = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 38; // 38 = CommonTProfilJouePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTProfilJoue object", $e);
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
            $con = Propel::getConnection(CommonTProfilJouePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTProfilJouePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTProfilJouePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTProfilJoueQuery::create()
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
            $con = Propel::getConnection(CommonTProfilJouePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTProfilJouePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTProfilJouePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTProfilJouePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTProfilJouePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::NOM_OFFICIEL)) {
            $modifiedColumns[':p' . $index++]  = '`nom_officiel`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`pays`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::CODE_POSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`code_postal`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::POINT_CONTACT)) {
            $modifiedColumns[':p' . $index++]  = '`point_contact`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::A_ATTENTION_DE)) {
            $modifiedColumns[':p' . $index++]  = '`a_attention_de`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`telephone`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::ADRESSE_POUVOIR_ADJUDICATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_pouvoir_adjudicateur`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::ADRESSE_PROFIL_ACHETEUR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_profil_acheteur`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::AUTORITE_NATIONALE)) {
            $modifiedColumns[':p' . $index++]  = '`autorite_nationale`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::OFFICE_NATIONALE)) {
            $modifiedColumns[':p' . $index++]  = '`office_nationale`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::COLLECTIVITE_TERRITORIALE)) {
            $modifiedColumns[':p' . $index++]  = '`collectivite_territoriale`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::OFFICE_REGIONALE)) {
            $modifiedColumns[':p' . $index++]  = '`office_regionale`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::ORGANISME_PUBLIC)) {
            $modifiedColumns[':p' . $index++]  = '`organisme_public`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::ORGANISATION_EUROPENNE)) {
            $modifiedColumns[':p' . $index++]  = '`organisation_europenne`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::AUTRE_TYPE_POUVOIR_ADJUDICATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`autre_type_pouvoir_adjudicateur`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::AUTRE_LIBELLE_TYPE_POUVOIR_ADJUDICATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`autre_libelle_type_pouvoir_adjudicateur`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::SERVICES_GENERAUX)) {
            $modifiedColumns[':p' . $index++]  = '`services_generaux`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::DEFENSE)) {
            $modifiedColumns[':p' . $index++]  = '`defense`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::SECURITE_PUBLIC)) {
            $modifiedColumns[':p' . $index++]  = '`securite_public`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::ENVIRONNEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`environnement`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::AFFAIRES_ECONOMIQUES)) {
            $modifiedColumns[':p' . $index++]  = '`affaires_economiques`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::SANTE)) {
            $modifiedColumns[':p' . $index++]  = '`sante`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::DEVELOPPEMENT_COLLECTIF)) {
            $modifiedColumns[':p' . $index++]  = '`developpement_collectif`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::PROTECTION_SOCIALE)) {
            $modifiedColumns[':p' . $index++]  = '`protection_sociale`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::LOISIRS)) {
            $modifiedColumns[':p' . $index++]  = '`loisirs`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::EDUCTION)) {
            $modifiedColumns[':p' . $index++]  = '`eduction`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::AUTRE_ACTIVITES_PRINCIPALES)) {
            $modifiedColumns[':p' . $index++]  = '`autre_activites_principales`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::AUTRE_LIBELLE_ACTIVITES_PRINCIPALES)) {
            $modifiedColumns[':p' . $index++]  = '`autre_libelle_activites_principales`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_AGIT)) {
            $modifiedColumns[':p' . $index++]  = '`pouvoir_adjudicateur_agit`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_MARCHE_COUVERT)) {
            $modifiedColumns[':p' . $index++]  = '`pouvoir_adjudicateur_marche_couvert`';
        }
        if ($this->isColumnModified(CommonTProfilJouePeer::ENTITE_ADJUDICATRICE_MARCHE_COUVERT)) {
            $modifiedColumns[':p' . $index++]  = '`entite_adjudicatrice_marche_couvert`';
        }

        $sql = sprintf(
            'INSERT INTO `T_Profil_Joue` (%s) VALUES (%s)',
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
                    case '`id_agent`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`nom_officiel`':						
                        $stmt->bindValue($identifier, $this->nom_officiel, PDO::PARAM_STR);
                        break;
                    case '`pays`':						
                        $stmt->bindValue($identifier, $this->pays, PDO::PARAM_STR);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`code_postal`':						
                        $stmt->bindValue($identifier, $this->code_postal, PDO::PARAM_STR);
                        break;
                    case '`point_contact`':						
                        $stmt->bindValue($identifier, $this->point_contact, PDO::PARAM_STR);
                        break;
                    case '`a_attention_de`':						
                        $stmt->bindValue($identifier, $this->a_attention_de, PDO::PARAM_STR);
                        break;
                    case '`telephone`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`fax`':						
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`adresse_pouvoir_adjudicateur`':						
                        $stmt->bindValue($identifier, $this->adresse_pouvoir_adjudicateur, PDO::PARAM_STR);
                        break;
                    case '`adresse_profil_acheteur`':						
                        $stmt->bindValue($identifier, $this->adresse_profil_acheteur, PDO::PARAM_STR);
                        break;
                    case '`autorite_nationale`':						
                        $stmt->bindValue($identifier, $this->autorite_nationale, PDO::PARAM_INT);
                        break;
                    case '`office_nationale`':						
                        $stmt->bindValue($identifier, $this->office_nationale, PDO::PARAM_INT);
                        break;
                    case '`collectivite_territoriale`':						
                        $stmt->bindValue($identifier, $this->collectivite_territoriale, PDO::PARAM_INT);
                        break;
                    case '`office_regionale`':						
                        $stmt->bindValue($identifier, $this->office_regionale, PDO::PARAM_INT);
                        break;
                    case '`organisme_public`':						
                        $stmt->bindValue($identifier, $this->organisme_public, PDO::PARAM_INT);
                        break;
                    case '`organisation_europenne`':						
                        $stmt->bindValue($identifier, $this->organisation_europenne, PDO::PARAM_INT);
                        break;
                    case '`autre_type_pouvoir_adjudicateur`':						
                        $stmt->bindValue($identifier, $this->autre_type_pouvoir_adjudicateur, PDO::PARAM_INT);
                        break;
                    case '`autre_libelle_type_pouvoir_adjudicateur`':						
                        $stmt->bindValue($identifier, $this->autre_libelle_type_pouvoir_adjudicateur, PDO::PARAM_STR);
                        break;
                    case '`services_generaux`':						
                        $stmt->bindValue($identifier, $this->services_generaux, PDO::PARAM_INT);
                        break;
                    case '`defense`':						
                        $stmt->bindValue($identifier, $this->defense, PDO::PARAM_INT);
                        break;
                    case '`securite_public`':						
                        $stmt->bindValue($identifier, $this->securite_public, PDO::PARAM_INT);
                        break;
                    case '`environnement`':						
                        $stmt->bindValue($identifier, $this->environnement, PDO::PARAM_INT);
                        break;
                    case '`affaires_economiques`':						
                        $stmt->bindValue($identifier, $this->affaires_economiques, PDO::PARAM_INT);
                        break;
                    case '`sante`':						
                        $stmt->bindValue($identifier, $this->sante, PDO::PARAM_INT);
                        break;
                    case '`developpement_collectif`':						
                        $stmt->bindValue($identifier, $this->developpement_collectif, PDO::PARAM_INT);
                        break;
                    case '`protection_sociale`':						
                        $stmt->bindValue($identifier, $this->protection_sociale, PDO::PARAM_INT);
                        break;
                    case '`loisirs`':						
                        $stmt->bindValue($identifier, $this->loisirs, PDO::PARAM_INT);
                        break;
                    case '`eduction`':						
                        $stmt->bindValue($identifier, $this->eduction, PDO::PARAM_INT);
                        break;
                    case '`autre_activites_principales`':						
                        $stmt->bindValue($identifier, $this->autre_activites_principales, PDO::PARAM_INT);
                        break;
                    case '`autre_libelle_activites_principales`':						
                        $stmt->bindValue($identifier, $this->autre_libelle_activites_principales, PDO::PARAM_STR);
                        break;
                    case '`pouvoir_adjudicateur_agit`':						
                        $stmt->bindValue($identifier, $this->pouvoir_adjudicateur_agit, PDO::PARAM_INT);
                        break;
                    case '`pouvoir_adjudicateur_marche_couvert`':						
                        $stmt->bindValue($identifier, $this->pouvoir_adjudicateur_marche_couvert, PDO::PARAM_INT);
                        break;
                    case '`entite_adjudicatrice_marche_couvert`':						
                        $stmt->bindValue($identifier, $this->entite_adjudicatrice_marche_couvert, PDO::PARAM_INT);
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


            if (($retval = CommonTProfilJouePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTProfilJouePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdAgent();
                break;
            case 2:
                return $this->getOrganisme();
                break;
            case 3:
                return $this->getNomOfficiel();
                break;
            case 4:
                return $this->getPays();
                break;
            case 5:
                return $this->getVille();
                break;
            case 6:
                return $this->getAdresse();
                break;
            case 7:
                return $this->getCodePostal();
                break;
            case 8:
                return $this->getPointContact();
                break;
            case 9:
                return $this->getAAttentionDe();
                break;
            case 10:
                return $this->getTelephone();
                break;
            case 11:
                return $this->getFax();
                break;
            case 12:
                return $this->getEmail();
                break;
            case 13:
                return $this->getAdressePouvoirAdjudicateur();
                break;
            case 14:
                return $this->getAdresseProfilAcheteur();
                break;
            case 15:
                return $this->getAutoriteNationale();
                break;
            case 16:
                return $this->getOfficeNationale();
                break;
            case 17:
                return $this->getCollectiviteTerritoriale();
                break;
            case 18:
                return $this->getOfficeRegionale();
                break;
            case 19:
                return $this->getOrganismePublic();
                break;
            case 20:
                return $this->getOrganisationEuropenne();
                break;
            case 21:
                return $this->getAutreTypePouvoirAdjudicateur();
                break;
            case 22:
                return $this->getAutreLibelleTypePouvoirAdjudicateur();
                break;
            case 23:
                return $this->getServicesGeneraux();
                break;
            case 24:
                return $this->getDefense();
                break;
            case 25:
                return $this->getSecuritePublic();
                break;
            case 26:
                return $this->getEnvironnement();
                break;
            case 27:
                return $this->getAffairesEconomiques();
                break;
            case 28:
                return $this->getSante();
                break;
            case 29:
                return $this->getDeveloppementCollectif();
                break;
            case 30:
                return $this->getProtectionSociale();
                break;
            case 31:
                return $this->getLoisirs();
                break;
            case 32:
                return $this->getEduction();
                break;
            case 33:
                return $this->getAutreActivitesPrincipales();
                break;
            case 34:
                return $this->getAutreLibelleActivitesPrincipales();
                break;
            case 35:
                return $this->getPouvoirAdjudicateurAgit();
                break;
            case 36:
                return $this->getPouvoirAdjudicateurMarcheCouvert();
                break;
            case 37:
                return $this->getEntiteAdjudicatriceMarcheCouvert();
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
        if (isset($alreadyDumpedObjects['CommonTProfilJoue'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTProfilJoue'][$this->getPrimaryKey()] = true;
        $keys = CommonTProfilJouePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdAgent(),
            $keys[2] => $this->getOrganisme(),
            $keys[3] => $this->getNomOfficiel(),
            $keys[4] => $this->getPays(),
            $keys[5] => $this->getVille(),
            $keys[6] => $this->getAdresse(),
            $keys[7] => $this->getCodePostal(),
            $keys[8] => $this->getPointContact(),
            $keys[9] => $this->getAAttentionDe(),
            $keys[10] => $this->getTelephone(),
            $keys[11] => $this->getFax(),
            $keys[12] => $this->getEmail(),
            $keys[13] => $this->getAdressePouvoirAdjudicateur(),
            $keys[14] => $this->getAdresseProfilAcheteur(),
            $keys[15] => $this->getAutoriteNationale(),
            $keys[16] => $this->getOfficeNationale(),
            $keys[17] => $this->getCollectiviteTerritoriale(),
            $keys[18] => $this->getOfficeRegionale(),
            $keys[19] => $this->getOrganismePublic(),
            $keys[20] => $this->getOrganisationEuropenne(),
            $keys[21] => $this->getAutreTypePouvoirAdjudicateur(),
            $keys[22] => $this->getAutreLibelleTypePouvoirAdjudicateur(),
            $keys[23] => $this->getServicesGeneraux(),
            $keys[24] => $this->getDefense(),
            $keys[25] => $this->getSecuritePublic(),
            $keys[26] => $this->getEnvironnement(),
            $keys[27] => $this->getAffairesEconomiques(),
            $keys[28] => $this->getSante(),
            $keys[29] => $this->getDeveloppementCollectif(),
            $keys[30] => $this->getProtectionSociale(),
            $keys[31] => $this->getLoisirs(),
            $keys[32] => $this->getEduction(),
            $keys[33] => $this->getAutreActivitesPrincipales(),
            $keys[34] => $this->getAutreLibelleActivitesPrincipales(),
            $keys[35] => $this->getPouvoirAdjudicateurAgit(),
            $keys[36] => $this->getPouvoirAdjudicateurMarcheCouvert(),
            $keys[37] => $this->getEntiteAdjudicatriceMarcheCouvert(),
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
        $pos = CommonTProfilJouePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdAgent($value);
                break;
            case 2:
                $this->setOrganisme($value);
                break;
            case 3:
                $this->setNomOfficiel($value);
                break;
            case 4:
                $this->setPays($value);
                break;
            case 5:
                $this->setVille($value);
                break;
            case 6:
                $this->setAdresse($value);
                break;
            case 7:
                $this->setCodePostal($value);
                break;
            case 8:
                $this->setPointContact($value);
                break;
            case 9:
                $this->setAAttentionDe($value);
                break;
            case 10:
                $this->setTelephone($value);
                break;
            case 11:
                $this->setFax($value);
                break;
            case 12:
                $this->setEmail($value);
                break;
            case 13:
                $this->setAdressePouvoirAdjudicateur($value);
                break;
            case 14:
                $this->setAdresseProfilAcheteur($value);
                break;
            case 15:
                $this->setAutoriteNationale($value);
                break;
            case 16:
                $this->setOfficeNationale($value);
                break;
            case 17:
                $this->setCollectiviteTerritoriale($value);
                break;
            case 18:
                $this->setOfficeRegionale($value);
                break;
            case 19:
                $this->setOrganismePublic($value);
                break;
            case 20:
                $this->setOrganisationEuropenne($value);
                break;
            case 21:
                $this->setAutreTypePouvoirAdjudicateur($value);
                break;
            case 22:
                $this->setAutreLibelleTypePouvoirAdjudicateur($value);
                break;
            case 23:
                $this->setServicesGeneraux($value);
                break;
            case 24:
                $this->setDefense($value);
                break;
            case 25:
                $this->setSecuritePublic($value);
                break;
            case 26:
                $this->setEnvironnement($value);
                break;
            case 27:
                $this->setAffairesEconomiques($value);
                break;
            case 28:
                $this->setSante($value);
                break;
            case 29:
                $this->setDeveloppementCollectif($value);
                break;
            case 30:
                $this->setProtectionSociale($value);
                break;
            case 31:
                $this->setLoisirs($value);
                break;
            case 32:
                $this->setEduction($value);
                break;
            case 33:
                $this->setAutreActivitesPrincipales($value);
                break;
            case 34:
                $this->setAutreLibelleActivitesPrincipales($value);
                break;
            case 35:
                $this->setPouvoirAdjudicateurAgit($value);
                break;
            case 36:
                $this->setPouvoirAdjudicateurMarcheCouvert($value);
                break;
            case 37:
                $this->setEntiteAdjudicatriceMarcheCouvert($value);
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
        $keys = CommonTProfilJouePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdAgent($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrganisme($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNomOfficiel($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPays($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVille($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAdresse($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCodePostal($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPointContact($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAAttentionDe($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTelephone($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setFax($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEmail($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAdressePouvoirAdjudicateur($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setAdresseProfilAcheteur($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAutoriteNationale($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setOfficeNationale($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setCollectiviteTerritoriale($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setOfficeRegionale($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setOrganismePublic($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setOrganisationEuropenne($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setAutreTypePouvoirAdjudicateur($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setAutreLibelleTypePouvoirAdjudicateur($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setServicesGeneraux($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDefense($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setSecuritePublic($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setEnvironnement($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setAffairesEconomiques($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setSante($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDeveloppementCollectif($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setProtectionSociale($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setLoisirs($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setEduction($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setAutreActivitesPrincipales($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setAutreLibelleActivitesPrincipales($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setPouvoirAdjudicateurAgit($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setPouvoirAdjudicateurMarcheCouvert($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setEntiteAdjudicatriceMarcheCouvert($arr[$keys[37]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTProfilJouePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTProfilJouePeer::ID)) $criteria->add(CommonTProfilJouePeer::ID, $this->id);
        if ($this->isColumnModified(CommonTProfilJouePeer::ID_AGENT)) $criteria->add(CommonTProfilJouePeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(CommonTProfilJouePeer::ORGANISME)) $criteria->add(CommonTProfilJouePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTProfilJouePeer::NOM_OFFICIEL)) $criteria->add(CommonTProfilJouePeer::NOM_OFFICIEL, $this->nom_officiel);
        if ($this->isColumnModified(CommonTProfilJouePeer::PAYS)) $criteria->add(CommonTProfilJouePeer::PAYS, $this->pays);
        if ($this->isColumnModified(CommonTProfilJouePeer::VILLE)) $criteria->add(CommonTProfilJouePeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonTProfilJouePeer::ADRESSE)) $criteria->add(CommonTProfilJouePeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonTProfilJouePeer::CODE_POSTAL)) $criteria->add(CommonTProfilJouePeer::CODE_POSTAL, $this->code_postal);
        if ($this->isColumnModified(CommonTProfilJouePeer::POINT_CONTACT)) $criteria->add(CommonTProfilJouePeer::POINT_CONTACT, $this->point_contact);
        if ($this->isColumnModified(CommonTProfilJouePeer::A_ATTENTION_DE)) $criteria->add(CommonTProfilJouePeer::A_ATTENTION_DE, $this->a_attention_de);
        if ($this->isColumnModified(CommonTProfilJouePeer::TELEPHONE)) $criteria->add(CommonTProfilJouePeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(CommonTProfilJouePeer::FAX)) $criteria->add(CommonTProfilJouePeer::FAX, $this->fax);
        if ($this->isColumnModified(CommonTProfilJouePeer::EMAIL)) $criteria->add(CommonTProfilJouePeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonTProfilJouePeer::ADRESSE_POUVOIR_ADJUDICATEUR)) $criteria->add(CommonTProfilJouePeer::ADRESSE_POUVOIR_ADJUDICATEUR, $this->adresse_pouvoir_adjudicateur);
        if ($this->isColumnModified(CommonTProfilJouePeer::ADRESSE_PROFIL_ACHETEUR)) $criteria->add(CommonTProfilJouePeer::ADRESSE_PROFIL_ACHETEUR, $this->adresse_profil_acheteur);
        if ($this->isColumnModified(CommonTProfilJouePeer::AUTORITE_NATIONALE)) $criteria->add(CommonTProfilJouePeer::AUTORITE_NATIONALE, $this->autorite_nationale);
        if ($this->isColumnModified(CommonTProfilJouePeer::OFFICE_NATIONALE)) $criteria->add(CommonTProfilJouePeer::OFFICE_NATIONALE, $this->office_nationale);
        if ($this->isColumnModified(CommonTProfilJouePeer::COLLECTIVITE_TERRITORIALE)) $criteria->add(CommonTProfilJouePeer::COLLECTIVITE_TERRITORIALE, $this->collectivite_territoriale);
        if ($this->isColumnModified(CommonTProfilJouePeer::OFFICE_REGIONALE)) $criteria->add(CommonTProfilJouePeer::OFFICE_REGIONALE, $this->office_regionale);
        if ($this->isColumnModified(CommonTProfilJouePeer::ORGANISME_PUBLIC)) $criteria->add(CommonTProfilJouePeer::ORGANISME_PUBLIC, $this->organisme_public);
        if ($this->isColumnModified(CommonTProfilJouePeer::ORGANISATION_EUROPENNE)) $criteria->add(CommonTProfilJouePeer::ORGANISATION_EUROPENNE, $this->organisation_europenne);
        if ($this->isColumnModified(CommonTProfilJouePeer::AUTRE_TYPE_POUVOIR_ADJUDICATEUR)) $criteria->add(CommonTProfilJouePeer::AUTRE_TYPE_POUVOIR_ADJUDICATEUR, $this->autre_type_pouvoir_adjudicateur);
        if ($this->isColumnModified(CommonTProfilJouePeer::AUTRE_LIBELLE_TYPE_POUVOIR_ADJUDICATEUR)) $criteria->add(CommonTProfilJouePeer::AUTRE_LIBELLE_TYPE_POUVOIR_ADJUDICATEUR, $this->autre_libelle_type_pouvoir_adjudicateur);
        if ($this->isColumnModified(CommonTProfilJouePeer::SERVICES_GENERAUX)) $criteria->add(CommonTProfilJouePeer::SERVICES_GENERAUX, $this->services_generaux);
        if ($this->isColumnModified(CommonTProfilJouePeer::DEFENSE)) $criteria->add(CommonTProfilJouePeer::DEFENSE, $this->defense);
        if ($this->isColumnModified(CommonTProfilJouePeer::SECURITE_PUBLIC)) $criteria->add(CommonTProfilJouePeer::SECURITE_PUBLIC, $this->securite_public);
        if ($this->isColumnModified(CommonTProfilJouePeer::ENVIRONNEMENT)) $criteria->add(CommonTProfilJouePeer::ENVIRONNEMENT, $this->environnement);
        if ($this->isColumnModified(CommonTProfilJouePeer::AFFAIRES_ECONOMIQUES)) $criteria->add(CommonTProfilJouePeer::AFFAIRES_ECONOMIQUES, $this->affaires_economiques);
        if ($this->isColumnModified(CommonTProfilJouePeer::SANTE)) $criteria->add(CommonTProfilJouePeer::SANTE, $this->sante);
        if ($this->isColumnModified(CommonTProfilJouePeer::DEVELOPPEMENT_COLLECTIF)) $criteria->add(CommonTProfilJouePeer::DEVELOPPEMENT_COLLECTIF, $this->developpement_collectif);
        if ($this->isColumnModified(CommonTProfilJouePeer::PROTECTION_SOCIALE)) $criteria->add(CommonTProfilJouePeer::PROTECTION_SOCIALE, $this->protection_sociale);
        if ($this->isColumnModified(CommonTProfilJouePeer::LOISIRS)) $criteria->add(CommonTProfilJouePeer::LOISIRS, $this->loisirs);
        if ($this->isColumnModified(CommonTProfilJouePeer::EDUCTION)) $criteria->add(CommonTProfilJouePeer::EDUCTION, $this->eduction);
        if ($this->isColumnModified(CommonTProfilJouePeer::AUTRE_ACTIVITES_PRINCIPALES)) $criteria->add(CommonTProfilJouePeer::AUTRE_ACTIVITES_PRINCIPALES, $this->autre_activites_principales);
        if ($this->isColumnModified(CommonTProfilJouePeer::AUTRE_LIBELLE_ACTIVITES_PRINCIPALES)) $criteria->add(CommonTProfilJouePeer::AUTRE_LIBELLE_ACTIVITES_PRINCIPALES, $this->autre_libelle_activites_principales);
        if ($this->isColumnModified(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_AGIT)) $criteria->add(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_AGIT, $this->pouvoir_adjudicateur_agit);
        if ($this->isColumnModified(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_MARCHE_COUVERT)) $criteria->add(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_MARCHE_COUVERT, $this->pouvoir_adjudicateur_marche_couvert);
        if ($this->isColumnModified(CommonTProfilJouePeer::ENTITE_ADJUDICATRICE_MARCHE_COUVERT)) $criteria->add(CommonTProfilJouePeer::ENTITE_ADJUDICATRICE_MARCHE_COUVERT, $this->entite_adjudicatrice_marche_couvert);

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
        $criteria = new Criteria(CommonTProfilJouePeer::DATABASE_NAME);
        $criteria->add(CommonTProfilJouePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonTProfilJoue (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setNomOfficiel($this->getNomOfficiel());
        $copyObj->setPays($this->getPays());
        $copyObj->setVille($this->getVille());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setCodePostal($this->getCodePostal());
        $copyObj->setPointContact($this->getPointContact());
        $copyObj->setAAttentionDe($this->getAAttentionDe());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setFax($this->getFax());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setAdressePouvoirAdjudicateur($this->getAdressePouvoirAdjudicateur());
        $copyObj->setAdresseProfilAcheteur($this->getAdresseProfilAcheteur());
        $copyObj->setAutoriteNationale($this->getAutoriteNationale());
        $copyObj->setOfficeNationale($this->getOfficeNationale());
        $copyObj->setCollectiviteTerritoriale($this->getCollectiviteTerritoriale());
        $copyObj->setOfficeRegionale($this->getOfficeRegionale());
        $copyObj->setOrganismePublic($this->getOrganismePublic());
        $copyObj->setOrganisationEuropenne($this->getOrganisationEuropenne());
        $copyObj->setAutreTypePouvoirAdjudicateur($this->getAutreTypePouvoirAdjudicateur());
        $copyObj->setAutreLibelleTypePouvoirAdjudicateur($this->getAutreLibelleTypePouvoirAdjudicateur());
        $copyObj->setServicesGeneraux($this->getServicesGeneraux());
        $copyObj->setDefense($this->getDefense());
        $copyObj->setSecuritePublic($this->getSecuritePublic());
        $copyObj->setEnvironnement($this->getEnvironnement());
        $copyObj->setAffairesEconomiques($this->getAffairesEconomiques());
        $copyObj->setSante($this->getSante());
        $copyObj->setDeveloppementCollectif($this->getDeveloppementCollectif());
        $copyObj->setProtectionSociale($this->getProtectionSociale());
        $copyObj->setLoisirs($this->getLoisirs());
        $copyObj->setEduction($this->getEduction());
        $copyObj->setAutreActivitesPrincipales($this->getAutreActivitesPrincipales());
        $copyObj->setAutreLibelleActivitesPrincipales($this->getAutreLibelleActivitesPrincipales());
        $copyObj->setPouvoirAdjudicateurAgit($this->getPouvoirAdjudicateurAgit());
        $copyObj->setPouvoirAdjudicateurMarcheCouvert($this->getPouvoirAdjudicateurMarcheCouvert());
        $copyObj->setEntiteAdjudicatriceMarcheCouvert($this->getEntiteAdjudicatriceMarcheCouvert());
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
     * @return CommonTProfilJoue Clone of current object.
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
     * @return CommonTProfilJouePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTProfilJouePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_agent = null;
        $this->organisme = null;
        $this->nom_officiel = null;
        $this->pays = null;
        $this->ville = null;
        $this->adresse = null;
        $this->code_postal = null;
        $this->point_contact = null;
        $this->a_attention_de = null;
        $this->telephone = null;
        $this->fax = null;
        $this->email = null;
        $this->adresse_pouvoir_adjudicateur = null;
        $this->adresse_profil_acheteur = null;
        $this->autorite_nationale = null;
        $this->office_nationale = null;
        $this->collectivite_territoriale = null;
        $this->office_regionale = null;
        $this->organisme_public = null;
        $this->organisation_europenne = null;
        $this->autre_type_pouvoir_adjudicateur = null;
        $this->autre_libelle_type_pouvoir_adjudicateur = null;
        $this->services_generaux = null;
        $this->defense = null;
        $this->securite_public = null;
        $this->environnement = null;
        $this->affaires_economiques = null;
        $this->sante = null;
        $this->developpement_collectif = null;
        $this->protection_sociale = null;
        $this->loisirs = null;
        $this->eduction = null;
        $this->autre_activites_principales = null;
        $this->autre_libelle_activites_principales = null;
        $this->pouvoir_adjudicateur_agit = null;
        $this->pouvoir_adjudicateur_marche_couvert = null;
        $this->entite_adjudicatrice_marche_couvert = null;
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
        return (string) $this->exportTo(CommonTProfilJouePeer::DEFAULT_STRING_FORMAT);
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
