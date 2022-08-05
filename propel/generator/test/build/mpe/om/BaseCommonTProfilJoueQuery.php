<?php


/**
 * Base class that represents a query for the 'T_Profil_Joue' table.
 *
 * 
 *
 * @method CommonTProfilJoueQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTProfilJoueQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonTProfilJoueQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTProfilJoueQuery orderByNomOfficiel($order = Criteria::ASC) Order by the nom_officiel column
 * @method CommonTProfilJoueQuery orderByPays($order = Criteria::ASC) Order by the pays column
 * @method CommonTProfilJoueQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonTProfilJoueQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonTProfilJoueQuery orderByCodePostal($order = Criteria::ASC) Order by the code_postal column
 * @method CommonTProfilJoueQuery orderByPointContact($order = Criteria::ASC) Order by the point_contact column
 * @method CommonTProfilJoueQuery orderByAAttentionDe($order = Criteria::ASC) Order by the a_attention_de column
 * @method CommonTProfilJoueQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method CommonTProfilJoueQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonTProfilJoueQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonTProfilJoueQuery orderByAdressePouvoirAdjudicateur($order = Criteria::ASC) Order by the adresse_pouvoir_adjudicateur column
 * @method CommonTProfilJoueQuery orderByAdresseProfilAcheteur($order = Criteria::ASC) Order by the adresse_profil_acheteur column
 * @method CommonTProfilJoueQuery orderByAutoriteNationale($order = Criteria::ASC) Order by the autorite_nationale column
 * @method CommonTProfilJoueQuery orderByOfficeNationale($order = Criteria::ASC) Order by the office_nationale column
 * @method CommonTProfilJoueQuery orderByCollectiviteTerritoriale($order = Criteria::ASC) Order by the collectivite_territoriale column
 * @method CommonTProfilJoueQuery orderByOfficeRegionale($order = Criteria::ASC) Order by the office_regionale column
 * @method CommonTProfilJoueQuery orderByOrganismePublic($order = Criteria::ASC) Order by the organisme_public column
 * @method CommonTProfilJoueQuery orderByOrganisationEuropenne($order = Criteria::ASC) Order by the organisation_europenne column
 * @method CommonTProfilJoueQuery orderByAutreTypePouvoirAdjudicateur($order = Criteria::ASC) Order by the autre_type_pouvoir_adjudicateur column
 * @method CommonTProfilJoueQuery orderByAutreLibelleTypePouvoirAdjudicateur($order = Criteria::ASC) Order by the autre_libelle_type_pouvoir_adjudicateur column
 * @method CommonTProfilJoueQuery orderByServicesGeneraux($order = Criteria::ASC) Order by the services_generaux column
 * @method CommonTProfilJoueQuery orderByDefense($order = Criteria::ASC) Order by the defense column
 * @method CommonTProfilJoueQuery orderBySecuritePublic($order = Criteria::ASC) Order by the securite_public column
 * @method CommonTProfilJoueQuery orderByEnvironnement($order = Criteria::ASC) Order by the environnement column
 * @method CommonTProfilJoueQuery orderByAffairesEconomiques($order = Criteria::ASC) Order by the affaires_economiques column
 * @method CommonTProfilJoueQuery orderBySante($order = Criteria::ASC) Order by the sante column
 * @method CommonTProfilJoueQuery orderByDeveloppementCollectif($order = Criteria::ASC) Order by the developpement_collectif column
 * @method CommonTProfilJoueQuery orderByProtectionSociale($order = Criteria::ASC) Order by the protection_sociale column
 * @method CommonTProfilJoueQuery orderByLoisirs($order = Criteria::ASC) Order by the loisirs column
 * @method CommonTProfilJoueQuery orderByEduction($order = Criteria::ASC) Order by the eduction column
 * @method CommonTProfilJoueQuery orderByAutreActivitesPrincipales($order = Criteria::ASC) Order by the autre_activites_principales column
 * @method CommonTProfilJoueQuery orderByAutreLibelleActivitesPrincipales($order = Criteria::ASC) Order by the autre_libelle_activites_principales column
 * @method CommonTProfilJoueQuery orderByPouvoirAdjudicateurAgit($order = Criteria::ASC) Order by the pouvoir_adjudicateur_agit column
 * @method CommonTProfilJoueQuery orderByPouvoirAdjudicateurMarcheCouvert($order = Criteria::ASC) Order by the pouvoir_adjudicateur_marche_couvert column
 * @method CommonTProfilJoueQuery orderByEntiteAdjudicatriceMarcheCouvert($order = Criteria::ASC) Order by the entite_adjudicatrice_marche_couvert column
 *
 * @method CommonTProfilJoueQuery groupById() Group by the id column
 * @method CommonTProfilJoueQuery groupByIdAgent() Group by the id_agent column
 * @method CommonTProfilJoueQuery groupByOrganisme() Group by the organisme column
 * @method CommonTProfilJoueQuery groupByNomOfficiel() Group by the nom_officiel column
 * @method CommonTProfilJoueQuery groupByPays() Group by the pays column
 * @method CommonTProfilJoueQuery groupByVille() Group by the ville column
 * @method CommonTProfilJoueQuery groupByAdresse() Group by the adresse column
 * @method CommonTProfilJoueQuery groupByCodePostal() Group by the code_postal column
 * @method CommonTProfilJoueQuery groupByPointContact() Group by the point_contact column
 * @method CommonTProfilJoueQuery groupByAAttentionDe() Group by the a_attention_de column
 * @method CommonTProfilJoueQuery groupByTelephone() Group by the telephone column
 * @method CommonTProfilJoueQuery groupByFax() Group by the fax column
 * @method CommonTProfilJoueQuery groupByEmail() Group by the email column
 * @method CommonTProfilJoueQuery groupByAdressePouvoirAdjudicateur() Group by the adresse_pouvoir_adjudicateur column
 * @method CommonTProfilJoueQuery groupByAdresseProfilAcheteur() Group by the adresse_profil_acheteur column
 * @method CommonTProfilJoueQuery groupByAutoriteNationale() Group by the autorite_nationale column
 * @method CommonTProfilJoueQuery groupByOfficeNationale() Group by the office_nationale column
 * @method CommonTProfilJoueQuery groupByCollectiviteTerritoriale() Group by the collectivite_territoriale column
 * @method CommonTProfilJoueQuery groupByOfficeRegionale() Group by the office_regionale column
 * @method CommonTProfilJoueQuery groupByOrganismePublic() Group by the organisme_public column
 * @method CommonTProfilJoueQuery groupByOrganisationEuropenne() Group by the organisation_europenne column
 * @method CommonTProfilJoueQuery groupByAutreTypePouvoirAdjudicateur() Group by the autre_type_pouvoir_adjudicateur column
 * @method CommonTProfilJoueQuery groupByAutreLibelleTypePouvoirAdjudicateur() Group by the autre_libelle_type_pouvoir_adjudicateur column
 * @method CommonTProfilJoueQuery groupByServicesGeneraux() Group by the services_generaux column
 * @method CommonTProfilJoueQuery groupByDefense() Group by the defense column
 * @method CommonTProfilJoueQuery groupBySecuritePublic() Group by the securite_public column
 * @method CommonTProfilJoueQuery groupByEnvironnement() Group by the environnement column
 * @method CommonTProfilJoueQuery groupByAffairesEconomiques() Group by the affaires_economiques column
 * @method CommonTProfilJoueQuery groupBySante() Group by the sante column
 * @method CommonTProfilJoueQuery groupByDeveloppementCollectif() Group by the developpement_collectif column
 * @method CommonTProfilJoueQuery groupByProtectionSociale() Group by the protection_sociale column
 * @method CommonTProfilJoueQuery groupByLoisirs() Group by the loisirs column
 * @method CommonTProfilJoueQuery groupByEduction() Group by the eduction column
 * @method CommonTProfilJoueQuery groupByAutreActivitesPrincipales() Group by the autre_activites_principales column
 * @method CommonTProfilJoueQuery groupByAutreLibelleActivitesPrincipales() Group by the autre_libelle_activites_principales column
 * @method CommonTProfilJoueQuery groupByPouvoirAdjudicateurAgit() Group by the pouvoir_adjudicateur_agit column
 * @method CommonTProfilJoueQuery groupByPouvoirAdjudicateurMarcheCouvert() Group by the pouvoir_adjudicateur_marche_couvert column
 * @method CommonTProfilJoueQuery groupByEntiteAdjudicatriceMarcheCouvert() Group by the entite_adjudicatrice_marche_couvert column
 *
 * @method CommonTProfilJoueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTProfilJoueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTProfilJoueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTProfilJoue findOne(PropelPDO $con = null) Return the first CommonTProfilJoue matching the query
 * @method CommonTProfilJoue findOneOrCreate(PropelPDO $con = null) Return the first CommonTProfilJoue matching the query, or a new CommonTProfilJoue object populated from the query conditions when no match is found
 *
 * @method CommonTProfilJoue findOneByIdAgent(int $id_agent) Return the first CommonTProfilJoue filtered by the id_agent column
 * @method CommonTProfilJoue findOneByOrganisme(string $organisme) Return the first CommonTProfilJoue filtered by the organisme column
 * @method CommonTProfilJoue findOneByNomOfficiel(string $nom_officiel) Return the first CommonTProfilJoue filtered by the nom_officiel column
 * @method CommonTProfilJoue findOneByPays(string $pays) Return the first CommonTProfilJoue filtered by the pays column
 * @method CommonTProfilJoue findOneByVille(string $ville) Return the first CommonTProfilJoue filtered by the ville column
 * @method CommonTProfilJoue findOneByAdresse(string $adresse) Return the first CommonTProfilJoue filtered by the adresse column
 * @method CommonTProfilJoue findOneByCodePostal(string $code_postal) Return the first CommonTProfilJoue filtered by the code_postal column
 * @method CommonTProfilJoue findOneByPointContact(string $point_contact) Return the first CommonTProfilJoue filtered by the point_contact column
 * @method CommonTProfilJoue findOneByAAttentionDe(string $a_attention_de) Return the first CommonTProfilJoue filtered by the a_attention_de column
 * @method CommonTProfilJoue findOneByTelephone(string $telephone) Return the first CommonTProfilJoue filtered by the telephone column
 * @method CommonTProfilJoue findOneByFax(string $fax) Return the first CommonTProfilJoue filtered by the fax column
 * @method CommonTProfilJoue findOneByEmail(string $email) Return the first CommonTProfilJoue filtered by the email column
 * @method CommonTProfilJoue findOneByAdressePouvoirAdjudicateur(string $adresse_pouvoir_adjudicateur) Return the first CommonTProfilJoue filtered by the adresse_pouvoir_adjudicateur column
 * @method CommonTProfilJoue findOneByAdresseProfilAcheteur(string $adresse_profil_acheteur) Return the first CommonTProfilJoue filtered by the adresse_profil_acheteur column
 * @method CommonTProfilJoue findOneByAutoriteNationale(int $autorite_nationale) Return the first CommonTProfilJoue filtered by the autorite_nationale column
 * @method CommonTProfilJoue findOneByOfficeNationale(int $office_nationale) Return the first CommonTProfilJoue filtered by the office_nationale column
 * @method CommonTProfilJoue findOneByCollectiviteTerritoriale(int $collectivite_territoriale) Return the first CommonTProfilJoue filtered by the collectivite_territoriale column
 * @method CommonTProfilJoue findOneByOfficeRegionale(int $office_regionale) Return the first CommonTProfilJoue filtered by the office_regionale column
 * @method CommonTProfilJoue findOneByOrganismePublic(int $organisme_public) Return the first CommonTProfilJoue filtered by the organisme_public column
 * @method CommonTProfilJoue findOneByOrganisationEuropenne(int $organisation_europenne) Return the first CommonTProfilJoue filtered by the organisation_europenne column
 * @method CommonTProfilJoue findOneByAutreTypePouvoirAdjudicateur(int $autre_type_pouvoir_adjudicateur) Return the first CommonTProfilJoue filtered by the autre_type_pouvoir_adjudicateur column
 * @method CommonTProfilJoue findOneByAutreLibelleTypePouvoirAdjudicateur(string $autre_libelle_type_pouvoir_adjudicateur) Return the first CommonTProfilJoue filtered by the autre_libelle_type_pouvoir_adjudicateur column
 * @method CommonTProfilJoue findOneByServicesGeneraux(int $services_generaux) Return the first CommonTProfilJoue filtered by the services_generaux column
 * @method CommonTProfilJoue findOneByDefense(int $defense) Return the first CommonTProfilJoue filtered by the defense column
 * @method CommonTProfilJoue findOneBySecuritePublic(int $securite_public) Return the first CommonTProfilJoue filtered by the securite_public column
 * @method CommonTProfilJoue findOneByEnvironnement(int $environnement) Return the first CommonTProfilJoue filtered by the environnement column
 * @method CommonTProfilJoue findOneByAffairesEconomiques(int $affaires_economiques) Return the first CommonTProfilJoue filtered by the affaires_economiques column
 * @method CommonTProfilJoue findOneBySante(int $sante) Return the first CommonTProfilJoue filtered by the sante column
 * @method CommonTProfilJoue findOneByDeveloppementCollectif(int $developpement_collectif) Return the first CommonTProfilJoue filtered by the developpement_collectif column
 * @method CommonTProfilJoue findOneByProtectionSociale(int $protection_sociale) Return the first CommonTProfilJoue filtered by the protection_sociale column
 * @method CommonTProfilJoue findOneByLoisirs(int $loisirs) Return the first CommonTProfilJoue filtered by the loisirs column
 * @method CommonTProfilJoue findOneByEduction(int $eduction) Return the first CommonTProfilJoue filtered by the eduction column
 * @method CommonTProfilJoue findOneByAutreActivitesPrincipales(int $autre_activites_principales) Return the first CommonTProfilJoue filtered by the autre_activites_principales column
 * @method CommonTProfilJoue findOneByAutreLibelleActivitesPrincipales(string $autre_libelle_activites_principales) Return the first CommonTProfilJoue filtered by the autre_libelle_activites_principales column
 * @method CommonTProfilJoue findOneByPouvoirAdjudicateurAgit(int $pouvoir_adjudicateur_agit) Return the first CommonTProfilJoue filtered by the pouvoir_adjudicateur_agit column
 * @method CommonTProfilJoue findOneByPouvoirAdjudicateurMarcheCouvert(int $pouvoir_adjudicateur_marche_couvert) Return the first CommonTProfilJoue filtered by the pouvoir_adjudicateur_marche_couvert column
 * @method CommonTProfilJoue findOneByEntiteAdjudicatriceMarcheCouvert(int $entite_adjudicatrice_marche_couvert) Return the first CommonTProfilJoue filtered by the entite_adjudicatrice_marche_couvert column
 *
 * @method array findById(int $id) Return CommonTProfilJoue objects filtered by the id column
 * @method array findByIdAgent(int $id_agent) Return CommonTProfilJoue objects filtered by the id_agent column
 * @method array findByOrganisme(string $organisme) Return CommonTProfilJoue objects filtered by the organisme column
 * @method array findByNomOfficiel(string $nom_officiel) Return CommonTProfilJoue objects filtered by the nom_officiel column
 * @method array findByPays(string $pays) Return CommonTProfilJoue objects filtered by the pays column
 * @method array findByVille(string $ville) Return CommonTProfilJoue objects filtered by the ville column
 * @method array findByAdresse(string $adresse) Return CommonTProfilJoue objects filtered by the adresse column
 * @method array findByCodePostal(string $code_postal) Return CommonTProfilJoue objects filtered by the code_postal column
 * @method array findByPointContact(string $point_contact) Return CommonTProfilJoue objects filtered by the point_contact column
 * @method array findByAAttentionDe(string $a_attention_de) Return CommonTProfilJoue objects filtered by the a_attention_de column
 * @method array findByTelephone(string $telephone) Return CommonTProfilJoue objects filtered by the telephone column
 * @method array findByFax(string $fax) Return CommonTProfilJoue objects filtered by the fax column
 * @method array findByEmail(string $email) Return CommonTProfilJoue objects filtered by the email column
 * @method array findByAdressePouvoirAdjudicateur(string $adresse_pouvoir_adjudicateur) Return CommonTProfilJoue objects filtered by the adresse_pouvoir_adjudicateur column
 * @method array findByAdresseProfilAcheteur(string $adresse_profil_acheteur) Return CommonTProfilJoue objects filtered by the adresse_profil_acheteur column
 * @method array findByAutoriteNationale(int $autorite_nationale) Return CommonTProfilJoue objects filtered by the autorite_nationale column
 * @method array findByOfficeNationale(int $office_nationale) Return CommonTProfilJoue objects filtered by the office_nationale column
 * @method array findByCollectiviteTerritoriale(int $collectivite_territoriale) Return CommonTProfilJoue objects filtered by the collectivite_territoriale column
 * @method array findByOfficeRegionale(int $office_regionale) Return CommonTProfilJoue objects filtered by the office_regionale column
 * @method array findByOrganismePublic(int $organisme_public) Return CommonTProfilJoue objects filtered by the organisme_public column
 * @method array findByOrganisationEuropenne(int $organisation_europenne) Return CommonTProfilJoue objects filtered by the organisation_europenne column
 * @method array findByAutreTypePouvoirAdjudicateur(int $autre_type_pouvoir_adjudicateur) Return CommonTProfilJoue objects filtered by the autre_type_pouvoir_adjudicateur column
 * @method array findByAutreLibelleTypePouvoirAdjudicateur(string $autre_libelle_type_pouvoir_adjudicateur) Return CommonTProfilJoue objects filtered by the autre_libelle_type_pouvoir_adjudicateur column
 * @method array findByServicesGeneraux(int $services_generaux) Return CommonTProfilJoue objects filtered by the services_generaux column
 * @method array findByDefense(int $defense) Return CommonTProfilJoue objects filtered by the defense column
 * @method array findBySecuritePublic(int $securite_public) Return CommonTProfilJoue objects filtered by the securite_public column
 * @method array findByEnvironnement(int $environnement) Return CommonTProfilJoue objects filtered by the environnement column
 * @method array findByAffairesEconomiques(int $affaires_economiques) Return CommonTProfilJoue objects filtered by the affaires_economiques column
 * @method array findBySante(int $sante) Return CommonTProfilJoue objects filtered by the sante column
 * @method array findByDeveloppementCollectif(int $developpement_collectif) Return CommonTProfilJoue objects filtered by the developpement_collectif column
 * @method array findByProtectionSociale(int $protection_sociale) Return CommonTProfilJoue objects filtered by the protection_sociale column
 * @method array findByLoisirs(int $loisirs) Return CommonTProfilJoue objects filtered by the loisirs column
 * @method array findByEduction(int $eduction) Return CommonTProfilJoue objects filtered by the eduction column
 * @method array findByAutreActivitesPrincipales(int $autre_activites_principales) Return CommonTProfilJoue objects filtered by the autre_activites_principales column
 * @method array findByAutreLibelleActivitesPrincipales(string $autre_libelle_activites_principales) Return CommonTProfilJoue objects filtered by the autre_libelle_activites_principales column
 * @method array findByPouvoirAdjudicateurAgit(int $pouvoir_adjudicateur_agit) Return CommonTProfilJoue objects filtered by the pouvoir_adjudicateur_agit column
 * @method array findByPouvoirAdjudicateurMarcheCouvert(int $pouvoir_adjudicateur_marche_couvert) Return CommonTProfilJoue objects filtered by the pouvoir_adjudicateur_marche_couvert column
 * @method array findByEntiteAdjudicatriceMarcheCouvert(int $entite_adjudicatrice_marche_couvert) Return CommonTProfilJoue objects filtered by the entite_adjudicatrice_marche_couvert column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTProfilJoueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTProfilJoueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTProfilJoue', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTProfilJoueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTProfilJoueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTProfilJoueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTProfilJoueQuery) {
            return $criteria;
        }
        $query = new CommonTProfilJoueQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTProfilJoue|CommonTProfilJoue[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTProfilJouePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTProfilJouePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTProfilJoue A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTProfilJoue A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_agent`, `organisme`, `nom_officiel`, `pays`, `ville`, `adresse`, `code_postal`, `point_contact`, `a_attention_de`, `telephone`, `fax`, `email`, `adresse_pouvoir_adjudicateur`, `adresse_profil_acheteur`, `autorite_nationale`, `office_nationale`, `collectivite_territoriale`, `office_regionale`, `organisme_public`, `organisation_europenne`, `autre_type_pouvoir_adjudicateur`, `autre_libelle_type_pouvoir_adjudicateur`, `services_generaux`, `defense`, `securite_public`, `environnement`, `affaires_economiques`, `sante`, `developpement_collectif`, `protection_sociale`, `loisirs`, `eduction`, `autre_activites_principales`, `autre_libelle_activites_principales`, `pouvoir_adjudicateur_agit`, `pouvoir_adjudicateur_marche_couvert`, `entite_adjudicatrice_marche_couvert` FROM `T_Profil_Joue` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTProfilJoue();
            $obj->hydrate($row);
            CommonTProfilJouePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonTProfilJoue|CommonTProfilJoue[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonTProfilJoue[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTProfilJouePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTProfilJouePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the nom_officiel column
     *
     * Example usage:
     * <code>
     * $query->filterByNomOfficiel('fooValue');   // WHERE nom_officiel = 'fooValue'
     * $query->filterByNomOfficiel('%fooValue%'); // WHERE nom_officiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomOfficiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByNomOfficiel($nomOfficiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomOfficiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomOfficiel)) {
                $nomOfficiel = str_replace('*', '%', $nomOfficiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::NOM_OFFICIEL, $nomOfficiel, $comparison);
    }

    /**
     * Filter the query on the pays column
     *
     * Example usage:
     * <code>
     * $query->filterByPays('fooValue');   // WHERE pays = 'fooValue'
     * $query->filterByPays('%fooValue%'); // WHERE pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByPays($pays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pays)) {
                $pays = str_replace('*', '%', $pays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::PAYS, $pays, $comparison);
    }

    /**
     * Filter the query on the ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE ville = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ville)) {
                $ville = str_replace('*', '%', $ville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE adresse = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByAdresse($adresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse)) {
                $adresse = str_replace('*', '%', $adresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the code_postal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodePostal('fooValue');   // WHERE code_postal = 'fooValue'
     * $query->filterByCodePostal('%fooValue%'); // WHERE code_postal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codePostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByCodePostal($codePostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codePostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codePostal)) {
                $codePostal = str_replace('*', '%', $codePostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::CODE_POSTAL, $codePostal, $comparison);
    }

    /**
     * Filter the query on the point_contact column
     *
     * Example usage:
     * <code>
     * $query->filterByPointContact('fooValue');   // WHERE point_contact = 'fooValue'
     * $query->filterByPointContact('%fooValue%'); // WHERE point_contact LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pointContact The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByPointContact($pointContact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pointContact)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pointContact)) {
                $pointContact = str_replace('*', '%', $pointContact);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::POINT_CONTACT, $pointContact, $comparison);
    }

    /**
     * Filter the query on the a_attention_de column
     *
     * Example usage:
     * <code>
     * $query->filterByAAttentionDe('fooValue');   // WHERE a_attention_de = 'fooValue'
     * $query->filterByAAttentionDe('%fooValue%'); // WHERE a_attention_de LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aAttentionDe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByAAttentionDe($aAttentionDe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aAttentionDe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aAttentionDe)) {
                $aAttentionDe = str_replace('*', '%', $aAttentionDe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::A_ATTENTION_DE, $aAttentionDe, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the adresse_pouvoir_adjudicateur column
     *
     * Example usage:
     * <code>
     * $query->filterByAdressePouvoirAdjudicateur('fooValue');   // WHERE adresse_pouvoir_adjudicateur = 'fooValue'
     * $query->filterByAdressePouvoirAdjudicateur('%fooValue%'); // WHERE adresse_pouvoir_adjudicateur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adressePouvoirAdjudicateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByAdressePouvoirAdjudicateur($adressePouvoirAdjudicateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adressePouvoirAdjudicateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adressePouvoirAdjudicateur)) {
                $adressePouvoirAdjudicateur = str_replace('*', '%', $adressePouvoirAdjudicateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::ADRESSE_POUVOIR_ADJUDICATEUR, $adressePouvoirAdjudicateur, $comparison);
    }

    /**
     * Filter the query on the adresse_profil_acheteur column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseProfilAcheteur('fooValue');   // WHERE adresse_profil_acheteur = 'fooValue'
     * $query->filterByAdresseProfilAcheteur('%fooValue%'); // WHERE adresse_profil_acheteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseProfilAcheteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByAdresseProfilAcheteur($adresseProfilAcheteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseProfilAcheteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseProfilAcheteur)) {
                $adresseProfilAcheteur = str_replace('*', '%', $adresseProfilAcheteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::ADRESSE_PROFIL_ACHETEUR, $adresseProfilAcheteur, $comparison);
    }

    /**
     * Filter the query on the autorite_nationale column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoriteNationale(1234); // WHERE autorite_nationale = 1234
     * $query->filterByAutoriteNationale(array(12, 34)); // WHERE autorite_nationale IN (12, 34)
     * $query->filterByAutoriteNationale(array('min' => 12)); // WHERE autorite_nationale >= 12
     * $query->filterByAutoriteNationale(array('max' => 12)); // WHERE autorite_nationale <= 12
     * </code>
     *
     * @param     mixed $autoriteNationale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByAutoriteNationale($autoriteNationale = null, $comparison = null)
    {
        if (is_array($autoriteNationale)) {
            $useMinMax = false;
            if (isset($autoriteNationale['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::AUTORITE_NATIONALE, $autoriteNationale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoriteNationale['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::AUTORITE_NATIONALE, $autoriteNationale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::AUTORITE_NATIONALE, $autoriteNationale, $comparison);
    }

    /**
     * Filter the query on the office_nationale column
     *
     * Example usage:
     * <code>
     * $query->filterByOfficeNationale(1234); // WHERE office_nationale = 1234
     * $query->filterByOfficeNationale(array(12, 34)); // WHERE office_nationale IN (12, 34)
     * $query->filterByOfficeNationale(array('min' => 12)); // WHERE office_nationale >= 12
     * $query->filterByOfficeNationale(array('max' => 12)); // WHERE office_nationale <= 12
     * </code>
     *
     * @param     mixed $officeNationale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByOfficeNationale($officeNationale = null, $comparison = null)
    {
        if (is_array($officeNationale)) {
            $useMinMax = false;
            if (isset($officeNationale['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::OFFICE_NATIONALE, $officeNationale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($officeNationale['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::OFFICE_NATIONALE, $officeNationale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::OFFICE_NATIONALE, $officeNationale, $comparison);
    }

    /**
     * Filter the query on the collectivite_territoriale column
     *
     * Example usage:
     * <code>
     * $query->filterByCollectiviteTerritoriale(1234); // WHERE collectivite_territoriale = 1234
     * $query->filterByCollectiviteTerritoriale(array(12, 34)); // WHERE collectivite_territoriale IN (12, 34)
     * $query->filterByCollectiviteTerritoriale(array('min' => 12)); // WHERE collectivite_territoriale >= 12
     * $query->filterByCollectiviteTerritoriale(array('max' => 12)); // WHERE collectivite_territoriale <= 12
     * </code>
     *
     * @param     mixed $collectiviteTerritoriale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByCollectiviteTerritoriale($collectiviteTerritoriale = null, $comparison = null)
    {
        if (is_array($collectiviteTerritoriale)) {
            $useMinMax = false;
            if (isset($collectiviteTerritoriale['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::COLLECTIVITE_TERRITORIALE, $collectiviteTerritoriale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectiviteTerritoriale['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::COLLECTIVITE_TERRITORIALE, $collectiviteTerritoriale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::COLLECTIVITE_TERRITORIALE, $collectiviteTerritoriale, $comparison);
    }

    /**
     * Filter the query on the office_regionale column
     *
     * Example usage:
     * <code>
     * $query->filterByOfficeRegionale(1234); // WHERE office_regionale = 1234
     * $query->filterByOfficeRegionale(array(12, 34)); // WHERE office_regionale IN (12, 34)
     * $query->filterByOfficeRegionale(array('min' => 12)); // WHERE office_regionale >= 12
     * $query->filterByOfficeRegionale(array('max' => 12)); // WHERE office_regionale <= 12
     * </code>
     *
     * @param     mixed $officeRegionale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByOfficeRegionale($officeRegionale = null, $comparison = null)
    {
        if (is_array($officeRegionale)) {
            $useMinMax = false;
            if (isset($officeRegionale['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::OFFICE_REGIONALE, $officeRegionale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($officeRegionale['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::OFFICE_REGIONALE, $officeRegionale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::OFFICE_REGIONALE, $officeRegionale, $comparison);
    }

    /**
     * Filter the query on the organisme_public column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganismePublic(1234); // WHERE organisme_public = 1234
     * $query->filterByOrganismePublic(array(12, 34)); // WHERE organisme_public IN (12, 34)
     * $query->filterByOrganismePublic(array('min' => 12)); // WHERE organisme_public >= 12
     * $query->filterByOrganismePublic(array('max' => 12)); // WHERE organisme_public <= 12
     * </code>
     *
     * @param     mixed $organismePublic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByOrganismePublic($organismePublic = null, $comparison = null)
    {
        if (is_array($organismePublic)) {
            $useMinMax = false;
            if (isset($organismePublic['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::ORGANISME_PUBLIC, $organismePublic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($organismePublic['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::ORGANISME_PUBLIC, $organismePublic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::ORGANISME_PUBLIC, $organismePublic, $comparison);
    }

    /**
     * Filter the query on the organisation_europenne column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisationEuropenne(1234); // WHERE organisation_europenne = 1234
     * $query->filterByOrganisationEuropenne(array(12, 34)); // WHERE organisation_europenne IN (12, 34)
     * $query->filterByOrganisationEuropenne(array('min' => 12)); // WHERE organisation_europenne >= 12
     * $query->filterByOrganisationEuropenne(array('max' => 12)); // WHERE organisation_europenne <= 12
     * </code>
     *
     * @param     mixed $organisationEuropenne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByOrganisationEuropenne($organisationEuropenne = null, $comparison = null)
    {
        if (is_array($organisationEuropenne)) {
            $useMinMax = false;
            if (isset($organisationEuropenne['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::ORGANISATION_EUROPENNE, $organisationEuropenne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($organisationEuropenne['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::ORGANISATION_EUROPENNE, $organisationEuropenne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::ORGANISATION_EUROPENNE, $organisationEuropenne, $comparison);
    }

    /**
     * Filter the query on the autre_type_pouvoir_adjudicateur column
     *
     * Example usage:
     * <code>
     * $query->filterByAutreTypePouvoirAdjudicateur(1234); // WHERE autre_type_pouvoir_adjudicateur = 1234
     * $query->filterByAutreTypePouvoirAdjudicateur(array(12, 34)); // WHERE autre_type_pouvoir_adjudicateur IN (12, 34)
     * $query->filterByAutreTypePouvoirAdjudicateur(array('min' => 12)); // WHERE autre_type_pouvoir_adjudicateur >= 12
     * $query->filterByAutreTypePouvoirAdjudicateur(array('max' => 12)); // WHERE autre_type_pouvoir_adjudicateur <= 12
     * </code>
     *
     * @param     mixed $autreTypePouvoirAdjudicateur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByAutreTypePouvoirAdjudicateur($autreTypePouvoirAdjudicateur = null, $comparison = null)
    {
        if (is_array($autreTypePouvoirAdjudicateur)) {
            $useMinMax = false;
            if (isset($autreTypePouvoirAdjudicateur['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::AUTRE_TYPE_POUVOIR_ADJUDICATEUR, $autreTypePouvoirAdjudicateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autreTypePouvoirAdjudicateur['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::AUTRE_TYPE_POUVOIR_ADJUDICATEUR, $autreTypePouvoirAdjudicateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::AUTRE_TYPE_POUVOIR_ADJUDICATEUR, $autreTypePouvoirAdjudicateur, $comparison);
    }

    /**
     * Filter the query on the autre_libelle_type_pouvoir_adjudicateur column
     *
     * Example usage:
     * <code>
     * $query->filterByAutreLibelleTypePouvoirAdjudicateur('fooValue');   // WHERE autre_libelle_type_pouvoir_adjudicateur = 'fooValue'
     * $query->filterByAutreLibelleTypePouvoirAdjudicateur('%fooValue%'); // WHERE autre_libelle_type_pouvoir_adjudicateur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autreLibelleTypePouvoirAdjudicateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByAutreLibelleTypePouvoirAdjudicateur($autreLibelleTypePouvoirAdjudicateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autreLibelleTypePouvoirAdjudicateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autreLibelleTypePouvoirAdjudicateur)) {
                $autreLibelleTypePouvoirAdjudicateur = str_replace('*', '%', $autreLibelleTypePouvoirAdjudicateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::AUTRE_LIBELLE_TYPE_POUVOIR_ADJUDICATEUR, $autreLibelleTypePouvoirAdjudicateur, $comparison);
    }

    /**
     * Filter the query on the services_generaux column
     *
     * Example usage:
     * <code>
     * $query->filterByServicesGeneraux(1234); // WHERE services_generaux = 1234
     * $query->filterByServicesGeneraux(array(12, 34)); // WHERE services_generaux IN (12, 34)
     * $query->filterByServicesGeneraux(array('min' => 12)); // WHERE services_generaux >= 12
     * $query->filterByServicesGeneraux(array('max' => 12)); // WHERE services_generaux <= 12
     * </code>
     *
     * @param     mixed $servicesGeneraux The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByServicesGeneraux($servicesGeneraux = null, $comparison = null)
    {
        if (is_array($servicesGeneraux)) {
            $useMinMax = false;
            if (isset($servicesGeneraux['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::SERVICES_GENERAUX, $servicesGeneraux['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($servicesGeneraux['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::SERVICES_GENERAUX, $servicesGeneraux['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::SERVICES_GENERAUX, $servicesGeneraux, $comparison);
    }

    /**
     * Filter the query on the defense column
     *
     * Example usage:
     * <code>
     * $query->filterByDefense(1234); // WHERE defense = 1234
     * $query->filterByDefense(array(12, 34)); // WHERE defense IN (12, 34)
     * $query->filterByDefense(array('min' => 12)); // WHERE defense >= 12
     * $query->filterByDefense(array('max' => 12)); // WHERE defense <= 12
     * </code>
     *
     * @param     mixed $defense The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByDefense($defense = null, $comparison = null)
    {
        if (is_array($defense)) {
            $useMinMax = false;
            if (isset($defense['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::DEFENSE, $defense['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($defense['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::DEFENSE, $defense['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::DEFENSE, $defense, $comparison);
    }

    /**
     * Filter the query on the securite_public column
     *
     * Example usage:
     * <code>
     * $query->filterBySecuritePublic(1234); // WHERE securite_public = 1234
     * $query->filterBySecuritePublic(array(12, 34)); // WHERE securite_public IN (12, 34)
     * $query->filterBySecuritePublic(array('min' => 12)); // WHERE securite_public >= 12
     * $query->filterBySecuritePublic(array('max' => 12)); // WHERE securite_public <= 12
     * </code>
     *
     * @param     mixed $securitePublic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterBySecuritePublic($securitePublic = null, $comparison = null)
    {
        if (is_array($securitePublic)) {
            $useMinMax = false;
            if (isset($securitePublic['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::SECURITE_PUBLIC, $securitePublic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($securitePublic['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::SECURITE_PUBLIC, $securitePublic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::SECURITE_PUBLIC, $securitePublic, $comparison);
    }

    /**
     * Filter the query on the environnement column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvironnement(1234); // WHERE environnement = 1234
     * $query->filterByEnvironnement(array(12, 34)); // WHERE environnement IN (12, 34)
     * $query->filterByEnvironnement(array('min' => 12)); // WHERE environnement >= 12
     * $query->filterByEnvironnement(array('max' => 12)); // WHERE environnement <= 12
     * </code>
     *
     * @param     mixed $environnement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByEnvironnement($environnement = null, $comparison = null)
    {
        if (is_array($environnement)) {
            $useMinMax = false;
            if (isset($environnement['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::ENVIRONNEMENT, $environnement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($environnement['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::ENVIRONNEMENT, $environnement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::ENVIRONNEMENT, $environnement, $comparison);
    }

    /**
     * Filter the query on the affaires_economiques column
     *
     * Example usage:
     * <code>
     * $query->filterByAffairesEconomiques(1234); // WHERE affaires_economiques = 1234
     * $query->filterByAffairesEconomiques(array(12, 34)); // WHERE affaires_economiques IN (12, 34)
     * $query->filterByAffairesEconomiques(array('min' => 12)); // WHERE affaires_economiques >= 12
     * $query->filterByAffairesEconomiques(array('max' => 12)); // WHERE affaires_economiques <= 12
     * </code>
     *
     * @param     mixed $affairesEconomiques The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByAffairesEconomiques($affairesEconomiques = null, $comparison = null)
    {
        if (is_array($affairesEconomiques)) {
            $useMinMax = false;
            if (isset($affairesEconomiques['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::AFFAIRES_ECONOMIQUES, $affairesEconomiques['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($affairesEconomiques['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::AFFAIRES_ECONOMIQUES, $affairesEconomiques['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::AFFAIRES_ECONOMIQUES, $affairesEconomiques, $comparison);
    }

    /**
     * Filter the query on the sante column
     *
     * Example usage:
     * <code>
     * $query->filterBySante(1234); // WHERE sante = 1234
     * $query->filterBySante(array(12, 34)); // WHERE sante IN (12, 34)
     * $query->filterBySante(array('min' => 12)); // WHERE sante >= 12
     * $query->filterBySante(array('max' => 12)); // WHERE sante <= 12
     * </code>
     *
     * @param     mixed $sante The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterBySante($sante = null, $comparison = null)
    {
        if (is_array($sante)) {
            $useMinMax = false;
            if (isset($sante['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::SANTE, $sante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sante['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::SANTE, $sante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::SANTE, $sante, $comparison);
    }

    /**
     * Filter the query on the developpement_collectif column
     *
     * Example usage:
     * <code>
     * $query->filterByDeveloppementCollectif(1234); // WHERE developpement_collectif = 1234
     * $query->filterByDeveloppementCollectif(array(12, 34)); // WHERE developpement_collectif IN (12, 34)
     * $query->filterByDeveloppementCollectif(array('min' => 12)); // WHERE developpement_collectif >= 12
     * $query->filterByDeveloppementCollectif(array('max' => 12)); // WHERE developpement_collectif <= 12
     * </code>
     *
     * @param     mixed $developpementCollectif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByDeveloppementCollectif($developpementCollectif = null, $comparison = null)
    {
        if (is_array($developpementCollectif)) {
            $useMinMax = false;
            if (isset($developpementCollectif['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::DEVELOPPEMENT_COLLECTIF, $developpementCollectif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($developpementCollectif['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::DEVELOPPEMENT_COLLECTIF, $developpementCollectif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::DEVELOPPEMENT_COLLECTIF, $developpementCollectif, $comparison);
    }

    /**
     * Filter the query on the protection_sociale column
     *
     * Example usage:
     * <code>
     * $query->filterByProtectionSociale(1234); // WHERE protection_sociale = 1234
     * $query->filterByProtectionSociale(array(12, 34)); // WHERE protection_sociale IN (12, 34)
     * $query->filterByProtectionSociale(array('min' => 12)); // WHERE protection_sociale >= 12
     * $query->filterByProtectionSociale(array('max' => 12)); // WHERE protection_sociale <= 12
     * </code>
     *
     * @param     mixed $protectionSociale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByProtectionSociale($protectionSociale = null, $comparison = null)
    {
        if (is_array($protectionSociale)) {
            $useMinMax = false;
            if (isset($protectionSociale['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::PROTECTION_SOCIALE, $protectionSociale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($protectionSociale['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::PROTECTION_SOCIALE, $protectionSociale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::PROTECTION_SOCIALE, $protectionSociale, $comparison);
    }

    /**
     * Filter the query on the loisirs column
     *
     * Example usage:
     * <code>
     * $query->filterByLoisirs(1234); // WHERE loisirs = 1234
     * $query->filterByLoisirs(array(12, 34)); // WHERE loisirs IN (12, 34)
     * $query->filterByLoisirs(array('min' => 12)); // WHERE loisirs >= 12
     * $query->filterByLoisirs(array('max' => 12)); // WHERE loisirs <= 12
     * </code>
     *
     * @param     mixed $loisirs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByLoisirs($loisirs = null, $comparison = null)
    {
        if (is_array($loisirs)) {
            $useMinMax = false;
            if (isset($loisirs['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::LOISIRS, $loisirs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loisirs['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::LOISIRS, $loisirs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::LOISIRS, $loisirs, $comparison);
    }

    /**
     * Filter the query on the eduction column
     *
     * Example usage:
     * <code>
     * $query->filterByEduction(1234); // WHERE eduction = 1234
     * $query->filterByEduction(array(12, 34)); // WHERE eduction IN (12, 34)
     * $query->filterByEduction(array('min' => 12)); // WHERE eduction >= 12
     * $query->filterByEduction(array('max' => 12)); // WHERE eduction <= 12
     * </code>
     *
     * @param     mixed $eduction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByEduction($eduction = null, $comparison = null)
    {
        if (is_array($eduction)) {
            $useMinMax = false;
            if (isset($eduction['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::EDUCTION, $eduction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eduction['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::EDUCTION, $eduction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::EDUCTION, $eduction, $comparison);
    }

    /**
     * Filter the query on the autre_activites_principales column
     *
     * Example usage:
     * <code>
     * $query->filterByAutreActivitesPrincipales(1234); // WHERE autre_activites_principales = 1234
     * $query->filterByAutreActivitesPrincipales(array(12, 34)); // WHERE autre_activites_principales IN (12, 34)
     * $query->filterByAutreActivitesPrincipales(array('min' => 12)); // WHERE autre_activites_principales >= 12
     * $query->filterByAutreActivitesPrincipales(array('max' => 12)); // WHERE autre_activites_principales <= 12
     * </code>
     *
     * @param     mixed $autreActivitesPrincipales The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByAutreActivitesPrincipales($autreActivitesPrincipales = null, $comparison = null)
    {
        if (is_array($autreActivitesPrincipales)) {
            $useMinMax = false;
            if (isset($autreActivitesPrincipales['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::AUTRE_ACTIVITES_PRINCIPALES, $autreActivitesPrincipales['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autreActivitesPrincipales['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::AUTRE_ACTIVITES_PRINCIPALES, $autreActivitesPrincipales['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::AUTRE_ACTIVITES_PRINCIPALES, $autreActivitesPrincipales, $comparison);
    }

    /**
     * Filter the query on the autre_libelle_activites_principales column
     *
     * Example usage:
     * <code>
     * $query->filterByAutreLibelleActivitesPrincipales('fooValue');   // WHERE autre_libelle_activites_principales = 'fooValue'
     * $query->filterByAutreLibelleActivitesPrincipales('%fooValue%'); // WHERE autre_libelle_activites_principales LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autreLibelleActivitesPrincipales The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByAutreLibelleActivitesPrincipales($autreLibelleActivitesPrincipales = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autreLibelleActivitesPrincipales)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autreLibelleActivitesPrincipales)) {
                $autreLibelleActivitesPrincipales = str_replace('*', '%', $autreLibelleActivitesPrincipales);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::AUTRE_LIBELLE_ACTIVITES_PRINCIPALES, $autreLibelleActivitesPrincipales, $comparison);
    }

    /**
     * Filter the query on the pouvoir_adjudicateur_agit column
     *
     * Example usage:
     * <code>
     * $query->filterByPouvoirAdjudicateurAgit(1234); // WHERE pouvoir_adjudicateur_agit = 1234
     * $query->filterByPouvoirAdjudicateurAgit(array(12, 34)); // WHERE pouvoir_adjudicateur_agit IN (12, 34)
     * $query->filterByPouvoirAdjudicateurAgit(array('min' => 12)); // WHERE pouvoir_adjudicateur_agit >= 12
     * $query->filterByPouvoirAdjudicateurAgit(array('max' => 12)); // WHERE pouvoir_adjudicateur_agit <= 12
     * </code>
     *
     * @param     mixed $pouvoirAdjudicateurAgit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByPouvoirAdjudicateurAgit($pouvoirAdjudicateurAgit = null, $comparison = null)
    {
        if (is_array($pouvoirAdjudicateurAgit)) {
            $useMinMax = false;
            if (isset($pouvoirAdjudicateurAgit['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_AGIT, $pouvoirAdjudicateurAgit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pouvoirAdjudicateurAgit['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_AGIT, $pouvoirAdjudicateurAgit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_AGIT, $pouvoirAdjudicateurAgit, $comparison);
    }

    /**
     * Filter the query on the pouvoir_adjudicateur_marche_couvert column
     *
     * Example usage:
     * <code>
     * $query->filterByPouvoirAdjudicateurMarcheCouvert(1234); // WHERE pouvoir_adjudicateur_marche_couvert = 1234
     * $query->filterByPouvoirAdjudicateurMarcheCouvert(array(12, 34)); // WHERE pouvoir_adjudicateur_marche_couvert IN (12, 34)
     * $query->filterByPouvoirAdjudicateurMarcheCouvert(array('min' => 12)); // WHERE pouvoir_adjudicateur_marche_couvert >= 12
     * $query->filterByPouvoirAdjudicateurMarcheCouvert(array('max' => 12)); // WHERE pouvoir_adjudicateur_marche_couvert <= 12
     * </code>
     *
     * @param     mixed $pouvoirAdjudicateurMarcheCouvert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByPouvoirAdjudicateurMarcheCouvert($pouvoirAdjudicateurMarcheCouvert = null, $comparison = null)
    {
        if (is_array($pouvoirAdjudicateurMarcheCouvert)) {
            $useMinMax = false;
            if (isset($pouvoirAdjudicateurMarcheCouvert['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_MARCHE_COUVERT, $pouvoirAdjudicateurMarcheCouvert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pouvoirAdjudicateurMarcheCouvert['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_MARCHE_COUVERT, $pouvoirAdjudicateurMarcheCouvert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::POUVOIR_ADJUDICATEUR_MARCHE_COUVERT, $pouvoirAdjudicateurMarcheCouvert, $comparison);
    }

    /**
     * Filter the query on the entite_adjudicatrice_marche_couvert column
     *
     * Example usage:
     * <code>
     * $query->filterByEntiteAdjudicatriceMarcheCouvert(1234); // WHERE entite_adjudicatrice_marche_couvert = 1234
     * $query->filterByEntiteAdjudicatriceMarcheCouvert(array(12, 34)); // WHERE entite_adjudicatrice_marche_couvert IN (12, 34)
     * $query->filterByEntiteAdjudicatriceMarcheCouvert(array('min' => 12)); // WHERE entite_adjudicatrice_marche_couvert >= 12
     * $query->filterByEntiteAdjudicatriceMarcheCouvert(array('max' => 12)); // WHERE entite_adjudicatrice_marche_couvert <= 12
     * </code>
     *
     * @param     mixed $entiteAdjudicatriceMarcheCouvert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function filterByEntiteAdjudicatriceMarcheCouvert($entiteAdjudicatriceMarcheCouvert = null, $comparison = null)
    {
        if (is_array($entiteAdjudicatriceMarcheCouvert)) {
            $useMinMax = false;
            if (isset($entiteAdjudicatriceMarcheCouvert['min'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::ENTITE_ADJUDICATRICE_MARCHE_COUVERT, $entiteAdjudicatriceMarcheCouvert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entiteAdjudicatriceMarcheCouvert['max'])) {
                $this->addUsingAlias(CommonTProfilJouePeer::ENTITE_ADJUDICATRICE_MARCHE_COUVERT, $entiteAdjudicatriceMarcheCouvert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTProfilJouePeer::ENTITE_ADJUDICATRICE_MARCHE_COUVERT, $entiteAdjudicatriceMarcheCouvert, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTProfilJoue $commonTProfilJoue Object to remove from the list of results
     *
     * @return CommonTProfilJoueQuery The current query, for fluid interface
     */
    public function prune($commonTProfilJoue = null)
    {
        if ($commonTProfilJoue) {
            $this->addUsingAlias(CommonTProfilJouePeer::ID, $commonTProfilJoue->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
