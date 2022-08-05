<?php


/**
 * Base class that represents a query for the 't_etape_circuit_validation_demande' table.
 *
 * 
 *
 * @method TEtapeCircuitValidationDemandeQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TEtapeCircuitValidationDemandeQuery orderByLibelleEtape($order = Criteria::ASC) Order by the LIBELLE_ETAPE column
 * @method TEtapeCircuitValidationDemandeQuery orderByLibelleEtapeAr($order = Criteria::ASC) Order by the LIBELLE_ETAPE_AR column
 * @method TEtapeCircuitValidationDemandeQuery orderByDetail($order = Criteria::ASC) Order by the DETAIL column
 * @method TEtapeCircuitValidationDemandeQuery orderByNumeroEtape($order = Criteria::ASC) Order by the NUMERO_ETAPE column
 * @method TEtapeCircuitValidationDemandeQuery orderByIdTypeEtape($order = Criteria::ASC) Order by the ID_TYPE_ETAPE column
 * @method TEtapeCircuitValidationDemandeQuery orderByVisaSignature($order = Criteria::ASC) Order by the VISA_SIGNATURE column
 * @method TEtapeCircuitValidationDemandeQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method TEtapeCircuitValidationDemandeQuery orderByIdSignataire($order = Criteria::ASC) Order by the ID_SIGNATAIRE column
 * @method TEtapeCircuitValidationDemandeQuery orderByAcheve($order = Criteria::ASC) Order by the ACHEVE column
 * @method TEtapeCircuitValidationDemandeQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method TEtapeCircuitValidationDemandeQuery orderByRegleValidation($order = Criteria::ASC) Order by the REGLE_VALIDATION column
 * @method TEtapeCircuitValidationDemandeQuery orderByRegleRefus($order = Criteria::ASC) Order by the REGLE_REFUS column
 * @method TEtapeCircuitValidationDemandeQuery orderBySupprime($order = Criteria::ASC) Order by the SUPPRIME column
 * @method TEtapeCircuitValidationDemandeQuery orderByDelaiEtape($order = Criteria::ASC) Order by the DELAI_ETAPE column
 * @method TEtapeCircuitValidationDemandeQuery orderByDelaiHeure($order = Criteria::ASC) Order by the DELAI_HEURE column
 * @method TEtapeCircuitValidationDemandeQuery orderByDateFin($order = Criteria::ASC) Order by the DATE_FIN column
 * @method TEtapeCircuitValidationDemandeQuery orderByIdEntiteRelance($order = Criteria::ASC) Order by the ID_ENTITE_RELANCE column
 * @method TEtapeCircuitValidationDemandeQuery orderByIdAgentRelance($order = Criteria::ASC) Order by the ID_AGENT_RELANCE column
 * @method TEtapeCircuitValidationDemandeQuery orderByDureeReelleTraitement($order = Criteria::ASC) Order by the DUREE_REELLE_TRAITEMENT column
 * @method TEtapeCircuitValidationDemandeQuery orderByHeuresReelleTraitement($order = Criteria::ASC) Order by the HEURES_REELLE_TRAITEMENT column
 * @method TEtapeCircuitValidationDemandeQuery orderByCheckListTab($order = Criteria::ASC) Order by the CHECK_LIST_TAB column
 * @method TEtapeCircuitValidationDemandeQuery orderByCloture($order = Criteria::ASC) Order by the CLOTURE column
 * @method TEtapeCircuitValidationDemandeQuery orderByNiveauHierarchie($order = Criteria::ASC) Order by the NIVEAU_HIERARCHIE column
 * @method TEtapeCircuitValidationDemandeQuery orderByCalcul($order = Criteria::ASC) Order by the CALCUL column
 * @method TEtapeCircuitValidationDemandeQuery orderByIdEtapeHierarchie($order = Criteria::ASC) Order by the ID_ETAPE_HIERARCHIE column
 *
 * @method TEtapeCircuitValidationDemandeQuery groupById() Group by the ID column
 * @method TEtapeCircuitValidationDemandeQuery groupByLibelleEtape() Group by the LIBELLE_ETAPE column
 * @method TEtapeCircuitValidationDemandeQuery groupByLibelleEtapeAr() Group by the LIBELLE_ETAPE_AR column
 * @method TEtapeCircuitValidationDemandeQuery groupByDetail() Group by the DETAIL column
 * @method TEtapeCircuitValidationDemandeQuery groupByNumeroEtape() Group by the NUMERO_ETAPE column
 * @method TEtapeCircuitValidationDemandeQuery groupByIdTypeEtape() Group by the ID_TYPE_ETAPE column
 * @method TEtapeCircuitValidationDemandeQuery groupByVisaSignature() Group by the VISA_SIGNATURE column
 * @method TEtapeCircuitValidationDemandeQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method TEtapeCircuitValidationDemandeQuery groupByIdSignataire() Group by the ID_SIGNATAIRE column
 * @method TEtapeCircuitValidationDemandeQuery groupByAcheve() Group by the ACHEVE column
 * @method TEtapeCircuitValidationDemandeQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method TEtapeCircuitValidationDemandeQuery groupByRegleValidation() Group by the REGLE_VALIDATION column
 * @method TEtapeCircuitValidationDemandeQuery groupByRegleRefus() Group by the REGLE_REFUS column
 * @method TEtapeCircuitValidationDemandeQuery groupBySupprime() Group by the SUPPRIME column
 * @method TEtapeCircuitValidationDemandeQuery groupByDelaiEtape() Group by the DELAI_ETAPE column
 * @method TEtapeCircuitValidationDemandeQuery groupByDelaiHeure() Group by the DELAI_HEURE column
 * @method TEtapeCircuitValidationDemandeQuery groupByDateFin() Group by the DATE_FIN column
 * @method TEtapeCircuitValidationDemandeQuery groupByIdEntiteRelance() Group by the ID_ENTITE_RELANCE column
 * @method TEtapeCircuitValidationDemandeQuery groupByIdAgentRelance() Group by the ID_AGENT_RELANCE column
 * @method TEtapeCircuitValidationDemandeQuery groupByDureeReelleTraitement() Group by the DUREE_REELLE_TRAITEMENT column
 * @method TEtapeCircuitValidationDemandeQuery groupByHeuresReelleTraitement() Group by the HEURES_REELLE_TRAITEMENT column
 * @method TEtapeCircuitValidationDemandeQuery groupByCheckListTab() Group by the CHECK_LIST_TAB column
 * @method TEtapeCircuitValidationDemandeQuery groupByCloture() Group by the CLOTURE column
 * @method TEtapeCircuitValidationDemandeQuery groupByNiveauHierarchie() Group by the NIVEAU_HIERARCHIE column
 * @method TEtapeCircuitValidationDemandeQuery groupByCalcul() Group by the CALCUL column
 * @method TEtapeCircuitValidationDemandeQuery groupByIdEtapeHierarchie() Group by the ID_ETAPE_HIERARCHIE column
 *
 * @method TEtapeCircuitValidationDemandeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TEtapeCircuitValidationDemandeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TEtapeCircuitValidationDemandeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TEtapeCircuitValidationDemande findOne(PropelPDO $con = null) Return the first TEtapeCircuitValidationDemande matching the query
 * @method TEtapeCircuitValidationDemande findOneOrCreate(PropelPDO $con = null) Return the first TEtapeCircuitValidationDemande matching the query, or a new TEtapeCircuitValidationDemande object populated from the query conditions when no match is found
 *
 * @method TEtapeCircuitValidationDemande findOneByLibelleEtape(string $LIBELLE_ETAPE) Return the first TEtapeCircuitValidationDemande filtered by the LIBELLE_ETAPE column
 * @method TEtapeCircuitValidationDemande findOneByLibelleEtapeAr(string $LIBELLE_ETAPE_AR) Return the first TEtapeCircuitValidationDemande filtered by the LIBELLE_ETAPE_AR column
 * @method TEtapeCircuitValidationDemande findOneByDetail(string $DETAIL) Return the first TEtapeCircuitValidationDemande filtered by the DETAIL column
 * @method TEtapeCircuitValidationDemande findOneByNumeroEtape(int $NUMERO_ETAPE) Return the first TEtapeCircuitValidationDemande filtered by the NUMERO_ETAPE column
 * @method TEtapeCircuitValidationDemande findOneByIdTypeEtape(int $ID_TYPE_ETAPE) Return the first TEtapeCircuitValidationDemande filtered by the ID_TYPE_ETAPE column
 * @method TEtapeCircuitValidationDemande findOneByVisaSignature(string $VISA_SIGNATURE) Return the first TEtapeCircuitValidationDemande filtered by the VISA_SIGNATURE column
 * @method TEtapeCircuitValidationDemande findOneByIdEntite(int $ID_ENTITE) Return the first TEtapeCircuitValidationDemande filtered by the ID_ENTITE column
 * @method TEtapeCircuitValidationDemande findOneByIdSignataire(int $ID_SIGNATAIRE) Return the first TEtapeCircuitValidationDemande filtered by the ID_SIGNATAIRE column
 * @method TEtapeCircuitValidationDemande findOneByAcheve(string $ACHEVE) Return the first TEtapeCircuitValidationDemande filtered by the ACHEVE column
 * @method TEtapeCircuitValidationDemande findOneByIdDemande(int $ID_DEMANDE) Return the first TEtapeCircuitValidationDemande filtered by the ID_DEMANDE column
 * @method TEtapeCircuitValidationDemande findOneByRegleValidation(string $REGLE_VALIDATION) Return the first TEtapeCircuitValidationDemande filtered by the REGLE_VALIDATION column
 * @method TEtapeCircuitValidationDemande findOneByRegleRefus(string $REGLE_REFUS) Return the first TEtapeCircuitValidationDemande filtered by the REGLE_REFUS column
 * @method TEtapeCircuitValidationDemande findOneBySupprime(string $SUPPRIME) Return the first TEtapeCircuitValidationDemande filtered by the SUPPRIME column
 * @method TEtapeCircuitValidationDemande findOneByDelaiEtape(int $DELAI_ETAPE) Return the first TEtapeCircuitValidationDemande filtered by the DELAI_ETAPE column
 * @method TEtapeCircuitValidationDemande findOneByDelaiHeure(int $DELAI_HEURE) Return the first TEtapeCircuitValidationDemande filtered by the DELAI_HEURE column
 * @method TEtapeCircuitValidationDemande findOneByDateFin(string $DATE_FIN) Return the first TEtapeCircuitValidationDemande filtered by the DATE_FIN column
 * @method TEtapeCircuitValidationDemande findOneByIdEntiteRelance(int $ID_ENTITE_RELANCE) Return the first TEtapeCircuitValidationDemande filtered by the ID_ENTITE_RELANCE column
 * @method TEtapeCircuitValidationDemande findOneByIdAgentRelance(int $ID_AGENT_RELANCE) Return the first TEtapeCircuitValidationDemande filtered by the ID_AGENT_RELANCE column
 * @method TEtapeCircuitValidationDemande findOneByDureeReelleTraitement(int $DUREE_REELLE_TRAITEMENT) Return the first TEtapeCircuitValidationDemande filtered by the DUREE_REELLE_TRAITEMENT column
 * @method TEtapeCircuitValidationDemande findOneByHeuresReelleTraitement(double $HEURES_REELLE_TRAITEMENT) Return the first TEtapeCircuitValidationDemande filtered by the HEURES_REELLE_TRAITEMENT column
 * @method TEtapeCircuitValidationDemande findOneByCheckListTab(string $CHECK_LIST_TAB) Return the first TEtapeCircuitValidationDemande filtered by the CHECK_LIST_TAB column
 * @method TEtapeCircuitValidationDemande findOneByCloture(string $CLOTURE) Return the first TEtapeCircuitValidationDemande filtered by the CLOTURE column
 * @method TEtapeCircuitValidationDemande findOneByNiveauHierarchie(int $NIVEAU_HIERARCHIE) Return the first TEtapeCircuitValidationDemande filtered by the NIVEAU_HIERARCHIE column
 * @method TEtapeCircuitValidationDemande findOneByCalcul(string $CALCUL) Return the first TEtapeCircuitValidationDemande filtered by the CALCUL column
 * @method TEtapeCircuitValidationDemande findOneByIdEtapeHierarchie(int $ID_ETAPE_HIERARCHIE) Return the first TEtapeCircuitValidationDemande filtered by the ID_ETAPE_HIERARCHIE column
 *
 * @method array findById(int $ID) Return TEtapeCircuitValidationDemande objects filtered by the ID column
 * @method array findByLibelleEtape(string $LIBELLE_ETAPE) Return TEtapeCircuitValidationDemande objects filtered by the LIBELLE_ETAPE column
 * @method array findByLibelleEtapeAr(string $LIBELLE_ETAPE_AR) Return TEtapeCircuitValidationDemande objects filtered by the LIBELLE_ETAPE_AR column
 * @method array findByDetail(string $DETAIL) Return TEtapeCircuitValidationDemande objects filtered by the DETAIL column
 * @method array findByNumeroEtape(int $NUMERO_ETAPE) Return TEtapeCircuitValidationDemande objects filtered by the NUMERO_ETAPE column
 * @method array findByIdTypeEtape(int $ID_TYPE_ETAPE) Return TEtapeCircuitValidationDemande objects filtered by the ID_TYPE_ETAPE column
 * @method array findByVisaSignature(string $VISA_SIGNATURE) Return TEtapeCircuitValidationDemande objects filtered by the VISA_SIGNATURE column
 * @method array findByIdEntite(int $ID_ENTITE) Return TEtapeCircuitValidationDemande objects filtered by the ID_ENTITE column
 * @method array findByIdSignataire(int $ID_SIGNATAIRE) Return TEtapeCircuitValidationDemande objects filtered by the ID_SIGNATAIRE column
 * @method array findByAcheve(string $ACHEVE) Return TEtapeCircuitValidationDemande objects filtered by the ACHEVE column
 * @method array findByIdDemande(int $ID_DEMANDE) Return TEtapeCircuitValidationDemande objects filtered by the ID_DEMANDE column
 * @method array findByRegleValidation(string $REGLE_VALIDATION) Return TEtapeCircuitValidationDemande objects filtered by the REGLE_VALIDATION column
 * @method array findByRegleRefus(string $REGLE_REFUS) Return TEtapeCircuitValidationDemande objects filtered by the REGLE_REFUS column
 * @method array findBySupprime(string $SUPPRIME) Return TEtapeCircuitValidationDemande objects filtered by the SUPPRIME column
 * @method array findByDelaiEtape(int $DELAI_ETAPE) Return TEtapeCircuitValidationDemande objects filtered by the DELAI_ETAPE column
 * @method array findByDelaiHeure(int $DELAI_HEURE) Return TEtapeCircuitValidationDemande objects filtered by the DELAI_HEURE column
 * @method array findByDateFin(string $DATE_FIN) Return TEtapeCircuitValidationDemande objects filtered by the DATE_FIN column
 * @method array findByIdEntiteRelance(int $ID_ENTITE_RELANCE) Return TEtapeCircuitValidationDemande objects filtered by the ID_ENTITE_RELANCE column
 * @method array findByIdAgentRelance(int $ID_AGENT_RELANCE) Return TEtapeCircuitValidationDemande objects filtered by the ID_AGENT_RELANCE column
 * @method array findByDureeReelleTraitement(int $DUREE_REELLE_TRAITEMENT) Return TEtapeCircuitValidationDemande objects filtered by the DUREE_REELLE_TRAITEMENT column
 * @method array findByHeuresReelleTraitement(double $HEURES_REELLE_TRAITEMENT) Return TEtapeCircuitValidationDemande objects filtered by the HEURES_REELLE_TRAITEMENT column
 * @method array findByCheckListTab(string $CHECK_LIST_TAB) Return TEtapeCircuitValidationDemande objects filtered by the CHECK_LIST_TAB column
 * @method array findByCloture(string $CLOTURE) Return TEtapeCircuitValidationDemande objects filtered by the CLOTURE column
 * @method array findByNiveauHierarchie(int $NIVEAU_HIERARCHIE) Return TEtapeCircuitValidationDemande objects filtered by the NIVEAU_HIERARCHIE column
 * @method array findByCalcul(string $CALCUL) Return TEtapeCircuitValidationDemande objects filtered by the CALCUL column
 * @method array findByIdEtapeHierarchie(int $ID_ETAPE_HIERARCHIE) Return TEtapeCircuitValidationDemande objects filtered by the ID_ETAPE_HIERARCHIE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTEtapeCircuitValidationDemandeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTEtapeCircuitValidationDemandeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TEtapeCircuitValidationDemande', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TEtapeCircuitValidationDemandeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TEtapeCircuitValidationDemandeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TEtapeCircuitValidationDemandeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TEtapeCircuitValidationDemandeQuery) {
            return $criteria;
        }
        $query = new TEtapeCircuitValidationDemandeQuery();
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
     * @return   TEtapeCircuitValidationDemande|TEtapeCircuitValidationDemande[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TEtapeCircuitValidationDemandePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TEtapeCircuitValidationDemande A model object, or null if the key is not found
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
     * @return                 TEtapeCircuitValidationDemande A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `LIBELLE_ETAPE`, `LIBELLE_ETAPE_AR`, `DETAIL`, `NUMERO_ETAPE`, `ID_TYPE_ETAPE`, `VISA_SIGNATURE`, `ID_ENTITE`, `ID_SIGNATAIRE`, `ACHEVE`, `ID_DEMANDE`, `REGLE_VALIDATION`, `REGLE_REFUS`, `SUPPRIME`, `DELAI_ETAPE`, `DELAI_HEURE`, `DATE_FIN`, `ID_ENTITE_RELANCE`, `ID_AGENT_RELANCE`, `DUREE_REELLE_TRAITEMENT`, `HEURES_REELLE_TRAITEMENT`, `CHECK_LIST_TAB`, `CLOTURE`, `NIVEAU_HIERARCHIE`, `CALCUL`, `ID_ETAPE_HIERARCHIE` FROM `t_etape_circuit_validation_demande` WHERE `ID` = :p0';
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
            $obj = new TEtapeCircuitValidationDemande();
            $obj->hydrate($row);
            TEtapeCircuitValidationDemandePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TEtapeCircuitValidationDemande|TEtapeCircuitValidationDemande[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TEtapeCircuitValidationDemande[]|mixed the list of results, formatted by the current formatter
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
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_ETAPE column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleEtape('fooValue');   // WHERE LIBELLE_ETAPE = 'fooValue'
     * $query->filterByLibelleEtape('%fooValue%'); // WHERE LIBELLE_ETAPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleEtape The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByLibelleEtape($libelleEtape = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleEtape)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleEtape)) {
                $libelleEtape = str_replace('*', '%', $libelleEtape);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::LIBELLE_ETAPE, $libelleEtape, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_ETAPE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleEtapeAr('fooValue');   // WHERE LIBELLE_ETAPE_AR = 'fooValue'
     * $query->filterByLibelleEtapeAr('%fooValue%'); // WHERE LIBELLE_ETAPE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleEtapeAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByLibelleEtapeAr($libelleEtapeAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleEtapeAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleEtapeAr)) {
                $libelleEtapeAr = str_replace('*', '%', $libelleEtapeAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::LIBELLE_ETAPE_AR, $libelleEtapeAr, $comparison);
    }

    /**
     * Filter the query on the DETAIL column
     *
     * Example usage:
     * <code>
     * $query->filterByDetail('fooValue');   // WHERE DETAIL = 'fooValue'
     * $query->filterByDetail('%fooValue%'); // WHERE DETAIL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByDetail($detail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detail)) {
                $detail = str_replace('*', '%', $detail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::DETAIL, $detail, $comparison);
    }

    /**
     * Filter the query on the NUMERO_ETAPE column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroEtape(1234); // WHERE NUMERO_ETAPE = 1234
     * $query->filterByNumeroEtape(array(12, 34)); // WHERE NUMERO_ETAPE IN (12, 34)
     * $query->filterByNumeroEtape(array('min' => 12)); // WHERE NUMERO_ETAPE >= 12
     * $query->filterByNumeroEtape(array('max' => 12)); // WHERE NUMERO_ETAPE <= 12
     * </code>
     *
     * @param     mixed $numeroEtape The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByNumeroEtape($numeroEtape = null, $comparison = null)
    {
        if (is_array($numeroEtape)) {
            $useMinMax = false;
            if (isset($numeroEtape['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::NUMERO_ETAPE, $numeroEtape['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroEtape['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::NUMERO_ETAPE, $numeroEtape['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::NUMERO_ETAPE, $numeroEtape, $comparison);
    }

    /**
     * Filter the query on the ID_TYPE_ETAPE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeEtape(1234); // WHERE ID_TYPE_ETAPE = 1234
     * $query->filterByIdTypeEtape(array(12, 34)); // WHERE ID_TYPE_ETAPE IN (12, 34)
     * $query->filterByIdTypeEtape(array('min' => 12)); // WHERE ID_TYPE_ETAPE >= 12
     * $query->filterByIdTypeEtape(array('max' => 12)); // WHERE ID_TYPE_ETAPE <= 12
     * </code>
     *
     * @param     mixed $idTypeEtape The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByIdTypeEtape($idTypeEtape = null, $comparison = null)
    {
        if (is_array($idTypeEtape)) {
            $useMinMax = false;
            if (isset($idTypeEtape['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_TYPE_ETAPE, $idTypeEtape['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeEtape['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_TYPE_ETAPE, $idTypeEtape['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_TYPE_ETAPE, $idTypeEtape, $comparison);
    }

    /**
     * Filter the query on the VISA_SIGNATURE column
     *
     * Example usage:
     * <code>
     * $query->filterByVisaSignature('fooValue');   // WHERE VISA_SIGNATURE = 'fooValue'
     * $query->filterByVisaSignature('%fooValue%'); // WHERE VISA_SIGNATURE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visaSignature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByVisaSignature($visaSignature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visaSignature)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visaSignature)) {
                $visaSignature = str_replace('*', '%', $visaSignature);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::VISA_SIGNATURE, $visaSignature, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE ID_ENTITE = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE ID_ENTITE IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE ID_ENTITE >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE ID_ENTITE <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the ID_SIGNATAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSignataire(1234); // WHERE ID_SIGNATAIRE = 1234
     * $query->filterByIdSignataire(array(12, 34)); // WHERE ID_SIGNATAIRE IN (12, 34)
     * $query->filterByIdSignataire(array('min' => 12)); // WHERE ID_SIGNATAIRE >= 12
     * $query->filterByIdSignataire(array('max' => 12)); // WHERE ID_SIGNATAIRE <= 12
     * </code>
     *
     * @param     mixed $idSignataire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByIdSignataire($idSignataire = null, $comparison = null)
    {
        if (is_array($idSignataire)) {
            $useMinMax = false;
            if (isset($idSignataire['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_SIGNATAIRE, $idSignataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSignataire['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_SIGNATAIRE, $idSignataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_SIGNATAIRE, $idSignataire, $comparison);
    }

    /**
     * Filter the query on the ACHEVE column
     *
     * Example usage:
     * <code>
     * $query->filterByAcheve('fooValue');   // WHERE ACHEVE = 'fooValue'
     * $query->filterByAcheve('%fooValue%'); // WHERE ACHEVE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acheve The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByAcheve($acheve = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acheve)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acheve)) {
                $acheve = str_replace('*', '%', $acheve);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ACHEVE, $acheve, $comparison);
    }

    /**
     * Filter the query on the ID_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemande(1234); // WHERE ID_DEMANDE = 1234
     * $query->filterByIdDemande(array(12, 34)); // WHERE ID_DEMANDE IN (12, 34)
     * $query->filterByIdDemande(array('min' => 12)); // WHERE ID_DEMANDE >= 12
     * $query->filterByIdDemande(array('max' => 12)); // WHERE ID_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $idDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the REGLE_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByRegleValidation('fooValue');   // WHERE REGLE_VALIDATION = 'fooValue'
     * $query->filterByRegleValidation('%fooValue%'); // WHERE REGLE_VALIDATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regleValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByRegleValidation($regleValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regleValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $regleValidation)) {
                $regleValidation = str_replace('*', '%', $regleValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::REGLE_VALIDATION, $regleValidation, $comparison);
    }

    /**
     * Filter the query on the REGLE_REFUS column
     *
     * Example usage:
     * <code>
     * $query->filterByRegleRefus('fooValue');   // WHERE REGLE_REFUS = 'fooValue'
     * $query->filterByRegleRefus('%fooValue%'); // WHERE REGLE_REFUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regleRefus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByRegleRefus($regleRefus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regleRefus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $regleRefus)) {
                $regleRefus = str_replace('*', '%', $regleRefus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::REGLE_REFUS, $regleRefus, $comparison);
    }

    /**
     * Filter the query on the SUPPRIME column
     *
     * Example usage:
     * <code>
     * $query->filterBySupprime('fooValue');   // WHERE SUPPRIME = 'fooValue'
     * $query->filterBySupprime('%fooValue%'); // WHERE SUPPRIME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supprime The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterBySupprime($supprime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supprime)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supprime)) {
                $supprime = str_replace('*', '%', $supprime);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::SUPPRIME, $supprime, $comparison);
    }

    /**
     * Filter the query on the DELAI_ETAPE column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiEtape(1234); // WHERE DELAI_ETAPE = 1234
     * $query->filterByDelaiEtape(array(12, 34)); // WHERE DELAI_ETAPE IN (12, 34)
     * $query->filterByDelaiEtape(array('min' => 12)); // WHERE DELAI_ETAPE >= 12
     * $query->filterByDelaiEtape(array('max' => 12)); // WHERE DELAI_ETAPE <= 12
     * </code>
     *
     * @param     mixed $delaiEtape The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByDelaiEtape($delaiEtape = null, $comparison = null)
    {
        if (is_array($delaiEtape)) {
            $useMinMax = false;
            if (isset($delaiEtape['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::DELAI_ETAPE, $delaiEtape['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiEtape['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::DELAI_ETAPE, $delaiEtape['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::DELAI_ETAPE, $delaiEtape, $comparison);
    }

    /**
     * Filter the query on the DELAI_HEURE column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiHeure(1234); // WHERE DELAI_HEURE = 1234
     * $query->filterByDelaiHeure(array(12, 34)); // WHERE DELAI_HEURE IN (12, 34)
     * $query->filterByDelaiHeure(array('min' => 12)); // WHERE DELAI_HEURE >= 12
     * $query->filterByDelaiHeure(array('max' => 12)); // WHERE DELAI_HEURE <= 12
     * </code>
     *
     * @param     mixed $delaiHeure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByDelaiHeure($delaiHeure = null, $comparison = null)
    {
        if (is_array($delaiHeure)) {
            $useMinMax = false;
            if (isset($delaiHeure['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::DELAI_HEURE, $delaiHeure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiHeure['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::DELAI_HEURE, $delaiHeure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::DELAI_HEURE, $delaiHeure, $comparison);
    }

    /**
     * Filter the query on the DATE_FIN column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFin('2011-03-14'); // WHERE DATE_FIN = '2011-03-14'
     * $query->filterByDateFin('now'); // WHERE DATE_FIN = '2011-03-14'
     * $query->filterByDateFin(array('max' => 'yesterday')); // WHERE DATE_FIN > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateFin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByDateFin($dateFin = null, $comparison = null)
    {
        if (is_array($dateFin)) {
            $useMinMax = false;
            if (isset($dateFin['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::DATE_FIN, $dateFin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateFin['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::DATE_FIN, $dateFin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::DATE_FIN, $dateFin, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_RELANCE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteRelance(1234); // WHERE ID_ENTITE_RELANCE = 1234
     * $query->filterByIdEntiteRelance(array(12, 34)); // WHERE ID_ENTITE_RELANCE IN (12, 34)
     * $query->filterByIdEntiteRelance(array('min' => 12)); // WHERE ID_ENTITE_RELANCE >= 12
     * $query->filterByIdEntiteRelance(array('max' => 12)); // WHERE ID_ENTITE_RELANCE <= 12
     * </code>
     *
     * @param     mixed $idEntiteRelance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByIdEntiteRelance($idEntiteRelance = null, $comparison = null)
    {
        if (is_array($idEntiteRelance)) {
            $useMinMax = false;
            if (isset($idEntiteRelance['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_ENTITE_RELANCE, $idEntiteRelance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteRelance['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_ENTITE_RELANCE, $idEntiteRelance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_ENTITE_RELANCE, $idEntiteRelance, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_RELANCE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentRelance(1234); // WHERE ID_AGENT_RELANCE = 1234
     * $query->filterByIdAgentRelance(array(12, 34)); // WHERE ID_AGENT_RELANCE IN (12, 34)
     * $query->filterByIdAgentRelance(array('min' => 12)); // WHERE ID_AGENT_RELANCE >= 12
     * $query->filterByIdAgentRelance(array('max' => 12)); // WHERE ID_AGENT_RELANCE <= 12
     * </code>
     *
     * @param     mixed $idAgentRelance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgentRelance($idAgentRelance = null, $comparison = null)
    {
        if (is_array($idAgentRelance)) {
            $useMinMax = false;
            if (isset($idAgentRelance['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_AGENT_RELANCE, $idAgentRelance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentRelance['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_AGENT_RELANCE, $idAgentRelance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_AGENT_RELANCE, $idAgentRelance, $comparison);
    }

    /**
     * Filter the query on the DUREE_REELLE_TRAITEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByDureeReelleTraitement(1234); // WHERE DUREE_REELLE_TRAITEMENT = 1234
     * $query->filterByDureeReelleTraitement(array(12, 34)); // WHERE DUREE_REELLE_TRAITEMENT IN (12, 34)
     * $query->filterByDureeReelleTraitement(array('min' => 12)); // WHERE DUREE_REELLE_TRAITEMENT >= 12
     * $query->filterByDureeReelleTraitement(array('max' => 12)); // WHERE DUREE_REELLE_TRAITEMENT <= 12
     * </code>
     *
     * @param     mixed $dureeReelleTraitement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByDureeReelleTraitement($dureeReelleTraitement = null, $comparison = null)
    {
        if (is_array($dureeReelleTraitement)) {
            $useMinMax = false;
            if (isset($dureeReelleTraitement['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::DUREE_REELLE_TRAITEMENT, $dureeReelleTraitement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeReelleTraitement['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::DUREE_REELLE_TRAITEMENT, $dureeReelleTraitement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::DUREE_REELLE_TRAITEMENT, $dureeReelleTraitement, $comparison);
    }

    /**
     * Filter the query on the HEURES_REELLE_TRAITEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByHeuresReelleTraitement(1234); // WHERE HEURES_REELLE_TRAITEMENT = 1234
     * $query->filterByHeuresReelleTraitement(array(12, 34)); // WHERE HEURES_REELLE_TRAITEMENT IN (12, 34)
     * $query->filterByHeuresReelleTraitement(array('min' => 12)); // WHERE HEURES_REELLE_TRAITEMENT >= 12
     * $query->filterByHeuresReelleTraitement(array('max' => 12)); // WHERE HEURES_REELLE_TRAITEMENT <= 12
     * </code>
     *
     * @param     mixed $heuresReelleTraitement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByHeuresReelleTraitement($heuresReelleTraitement = null, $comparison = null)
    {
        if (is_array($heuresReelleTraitement)) {
            $useMinMax = false;
            if (isset($heuresReelleTraitement['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::HEURES_REELLE_TRAITEMENT, $heuresReelleTraitement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($heuresReelleTraitement['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::HEURES_REELLE_TRAITEMENT, $heuresReelleTraitement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::HEURES_REELLE_TRAITEMENT, $heuresReelleTraitement, $comparison);
    }

    /**
     * Filter the query on the CHECK_LIST_TAB column
     *
     * Example usage:
     * <code>
     * $query->filterByCheckListTab('fooValue');   // WHERE CHECK_LIST_TAB = 'fooValue'
     * $query->filterByCheckListTab('%fooValue%'); // WHERE CHECK_LIST_TAB LIKE '%fooValue%'
     * </code>
     *
     * @param     string $checkListTab The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByCheckListTab($checkListTab = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($checkListTab)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $checkListTab)) {
                $checkListTab = str_replace('*', '%', $checkListTab);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::CHECK_LIST_TAB, $checkListTab, $comparison);
    }

    /**
     * Filter the query on the CLOTURE column
     *
     * Example usage:
     * <code>
     * $query->filterByCloture('fooValue');   // WHERE CLOTURE = 'fooValue'
     * $query->filterByCloture('%fooValue%'); // WHERE CLOTURE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cloture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByCloture($cloture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cloture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cloture)) {
                $cloture = str_replace('*', '%', $cloture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::CLOTURE, $cloture, $comparison);
    }

    /**
     * Filter the query on the NIVEAU_HIERARCHIE column
     *
     * Example usage:
     * <code>
     * $query->filterByNiveauHierarchie(1234); // WHERE NIVEAU_HIERARCHIE = 1234
     * $query->filterByNiveauHierarchie(array(12, 34)); // WHERE NIVEAU_HIERARCHIE IN (12, 34)
     * $query->filterByNiveauHierarchie(array('min' => 12)); // WHERE NIVEAU_HIERARCHIE >= 12
     * $query->filterByNiveauHierarchie(array('max' => 12)); // WHERE NIVEAU_HIERARCHIE <= 12
     * </code>
     *
     * @param     mixed $niveauHierarchie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByNiveauHierarchie($niveauHierarchie = null, $comparison = null)
    {
        if (is_array($niveauHierarchie)) {
            $useMinMax = false;
            if (isset($niveauHierarchie['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::NIVEAU_HIERARCHIE, $niveauHierarchie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($niveauHierarchie['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::NIVEAU_HIERARCHIE, $niveauHierarchie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::NIVEAU_HIERARCHIE, $niveauHierarchie, $comparison);
    }

    /**
     * Filter the query on the CALCUL column
     *
     * Example usage:
     * <code>
     * $query->filterByCalcul('fooValue');   // WHERE CALCUL = 'fooValue'
     * $query->filterByCalcul('%fooValue%'); // WHERE CALCUL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calcul The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByCalcul($calcul = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calcul)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calcul)) {
                $calcul = str_replace('*', '%', $calcul);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::CALCUL, $calcul, $comparison);
    }

    /**
     * Filter the query on the ID_ETAPE_HIERARCHIE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEtapeHierarchie(1234); // WHERE ID_ETAPE_HIERARCHIE = 1234
     * $query->filterByIdEtapeHierarchie(array(12, 34)); // WHERE ID_ETAPE_HIERARCHIE IN (12, 34)
     * $query->filterByIdEtapeHierarchie(array('min' => 12)); // WHERE ID_ETAPE_HIERARCHIE >= 12
     * $query->filterByIdEtapeHierarchie(array('max' => 12)); // WHERE ID_ETAPE_HIERARCHIE <= 12
     * </code>
     *
     * @param     mixed $idEtapeHierarchie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function filterByIdEtapeHierarchie($idEtapeHierarchie = null, $comparison = null)
    {
        if (is_array($idEtapeHierarchie)) {
            $useMinMax = false;
            if (isset($idEtapeHierarchie['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_ETAPE_HIERARCHIE, $idEtapeHierarchie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEtapeHierarchie['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_ETAPE_HIERARCHIE, $idEtapeHierarchie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID_ETAPE_HIERARCHIE, $idEtapeHierarchie, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TEtapeCircuitValidationDemande $tEtapeCircuitValidationDemande Object to remove from the list of results
     *
     * @return TEtapeCircuitValidationDemandeQuery The current query, for fluid interface
     */
    public function prune($tEtapeCircuitValidationDemande = null)
    {
        if ($tEtapeCircuitValidationDemande) {
            $this->addUsingAlias(TEtapeCircuitValidationDemandePeer::ID, $tEtapeCircuitValidationDemande->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
