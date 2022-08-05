<?php


/**
 * Base class that represents a query for the 't_etape_circuit_validation' table.
 *
 * 
 *
 * @method TEtapeCircuitValidationQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TEtapeCircuitValidationQuery orderByLibelleEtapeFr($order = Criteria::ASC) Order by the LIBELLE_ETAPE_FR column
 * @method TEtapeCircuitValidationQuery orderByLibelleEtapeAr($order = Criteria::ASC) Order by the LIBELLE_ETAPE_AR column
 * @method TEtapeCircuitValidationQuery orderByNumeroEtape($order = Criteria::ASC) Order by the NUMERO_ETAPE column
 * @method TEtapeCircuitValidationQuery orderByIdTypeEtape($order = Criteria::ASC) Order by the ID_TYPE_ETAPE column
 * @method TEtapeCircuitValidationQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method TEtapeCircuitValidationQuery orderByIdCircuitValidation($order = Criteria::ASC) Order by the ID_CIRCUIT_VALIDATION column
 * @method TEtapeCircuitValidationQuery orderByNiveauDepart($order = Criteria::ASC) Order by the NIVEAU_DEPART column
 * @method TEtapeCircuitValidationQuery orderByNiveauFin($order = Criteria::ASC) Order by the NIVEAU_FIN column
 * @method TEtapeCircuitValidationQuery orderByIdSignataire($order = Criteria::ASC) Order by the ID_SIGNATAIRE column
 * @method TEtapeCircuitValidationQuery orderByVisaSignature($order = Criteria::ASC) Order by the VISA_SIGNATURE column
 * @method TEtapeCircuitValidationQuery orderByRegleValidation($order = Criteria::ASC) Order by the REGLE_VALIDATION column
 * @method TEtapeCircuitValidationQuery orderByRegleRefus($order = Criteria::ASC) Order by the REGLE_REFUS column
 * @method TEtapeCircuitValidationQuery orderByDelaiEtape($order = Criteria::ASC) Order by the DELAI_ETAPE column
 * @method TEtapeCircuitValidationQuery orderByDelaiHeure($order = Criteria::ASC) Order by the DELAI_HEURE column
 * @method TEtapeCircuitValidationQuery orderByIdEntiteRelance($order = Criteria::ASC) Order by the ID_ENTITE_RELANCE column
 * @method TEtapeCircuitValidationQuery orderByIdAgentRelance($order = Criteria::ASC) Order by the ID_AGENT_RELANCE column
 * @method TEtapeCircuitValidationQuery orderByCloture($order = Criteria::ASC) Order by the CLOTURE column
 * @method TEtapeCircuitValidationQuery orderByCalculHierarchie($order = Criteria::ASC) Order by the CALCUL_HIERARCHIE column
 *
 * @method TEtapeCircuitValidationQuery groupById() Group by the ID column
 * @method TEtapeCircuitValidationQuery groupByLibelleEtapeFr() Group by the LIBELLE_ETAPE_FR column
 * @method TEtapeCircuitValidationQuery groupByLibelleEtapeAr() Group by the LIBELLE_ETAPE_AR column
 * @method TEtapeCircuitValidationQuery groupByNumeroEtape() Group by the NUMERO_ETAPE column
 * @method TEtapeCircuitValidationQuery groupByIdTypeEtape() Group by the ID_TYPE_ETAPE column
 * @method TEtapeCircuitValidationQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method TEtapeCircuitValidationQuery groupByIdCircuitValidation() Group by the ID_CIRCUIT_VALIDATION column
 * @method TEtapeCircuitValidationQuery groupByNiveauDepart() Group by the NIVEAU_DEPART column
 * @method TEtapeCircuitValidationQuery groupByNiveauFin() Group by the NIVEAU_FIN column
 * @method TEtapeCircuitValidationQuery groupByIdSignataire() Group by the ID_SIGNATAIRE column
 * @method TEtapeCircuitValidationQuery groupByVisaSignature() Group by the VISA_SIGNATURE column
 * @method TEtapeCircuitValidationQuery groupByRegleValidation() Group by the REGLE_VALIDATION column
 * @method TEtapeCircuitValidationQuery groupByRegleRefus() Group by the REGLE_REFUS column
 * @method TEtapeCircuitValidationQuery groupByDelaiEtape() Group by the DELAI_ETAPE column
 * @method TEtapeCircuitValidationQuery groupByDelaiHeure() Group by the DELAI_HEURE column
 * @method TEtapeCircuitValidationQuery groupByIdEntiteRelance() Group by the ID_ENTITE_RELANCE column
 * @method TEtapeCircuitValidationQuery groupByIdAgentRelance() Group by the ID_AGENT_RELANCE column
 * @method TEtapeCircuitValidationQuery groupByCloture() Group by the CLOTURE column
 * @method TEtapeCircuitValidationQuery groupByCalculHierarchie() Group by the CALCUL_HIERARCHIE column
 *
 * @method TEtapeCircuitValidationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TEtapeCircuitValidationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TEtapeCircuitValidationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TEtapeCircuitValidation findOne(PropelPDO $con = null) Return the first TEtapeCircuitValidation matching the query
 * @method TEtapeCircuitValidation findOneOrCreate(PropelPDO $con = null) Return the first TEtapeCircuitValidation matching the query, or a new TEtapeCircuitValidation object populated from the query conditions when no match is found
 *
 * @method TEtapeCircuitValidation findOneByLibelleEtapeFr(string $LIBELLE_ETAPE_FR) Return the first TEtapeCircuitValidation filtered by the LIBELLE_ETAPE_FR column
 * @method TEtapeCircuitValidation findOneByLibelleEtapeAr(string $LIBELLE_ETAPE_AR) Return the first TEtapeCircuitValidation filtered by the LIBELLE_ETAPE_AR column
 * @method TEtapeCircuitValidation findOneByNumeroEtape(int $NUMERO_ETAPE) Return the first TEtapeCircuitValidation filtered by the NUMERO_ETAPE column
 * @method TEtapeCircuitValidation findOneByIdTypeEtape(int $ID_TYPE_ETAPE) Return the first TEtapeCircuitValidation filtered by the ID_TYPE_ETAPE column
 * @method TEtapeCircuitValidation findOneByIdEntite(int $ID_ENTITE) Return the first TEtapeCircuitValidation filtered by the ID_ENTITE column
 * @method TEtapeCircuitValidation findOneByIdCircuitValidation(int $ID_CIRCUIT_VALIDATION) Return the first TEtapeCircuitValidation filtered by the ID_CIRCUIT_VALIDATION column
 * @method TEtapeCircuitValidation findOneByNiveauDepart(int $NIVEAU_DEPART) Return the first TEtapeCircuitValidation filtered by the NIVEAU_DEPART column
 * @method TEtapeCircuitValidation findOneByNiveauFin(int $NIVEAU_FIN) Return the first TEtapeCircuitValidation filtered by the NIVEAU_FIN column
 * @method TEtapeCircuitValidation findOneByIdSignataire(int $ID_SIGNATAIRE) Return the first TEtapeCircuitValidation filtered by the ID_SIGNATAIRE column
 * @method TEtapeCircuitValidation findOneByVisaSignature(string $VISA_SIGNATURE) Return the first TEtapeCircuitValidation filtered by the VISA_SIGNATURE column
 * @method TEtapeCircuitValidation findOneByRegleValidation(string $REGLE_VALIDATION) Return the first TEtapeCircuitValidation filtered by the REGLE_VALIDATION column
 * @method TEtapeCircuitValidation findOneByRegleRefus(string $REGLE_REFUS) Return the first TEtapeCircuitValidation filtered by the REGLE_REFUS column
 * @method TEtapeCircuitValidation findOneByDelaiEtape(int $DELAI_ETAPE) Return the first TEtapeCircuitValidation filtered by the DELAI_ETAPE column
 * @method TEtapeCircuitValidation findOneByDelaiHeure(int $DELAI_HEURE) Return the first TEtapeCircuitValidation filtered by the DELAI_HEURE column
 * @method TEtapeCircuitValidation findOneByIdEntiteRelance(int $ID_ENTITE_RELANCE) Return the first TEtapeCircuitValidation filtered by the ID_ENTITE_RELANCE column
 * @method TEtapeCircuitValidation findOneByIdAgentRelance(int $ID_AGENT_RELANCE) Return the first TEtapeCircuitValidation filtered by the ID_AGENT_RELANCE column
 * @method TEtapeCircuitValidation findOneByCloture(string $CLOTURE) Return the first TEtapeCircuitValidation filtered by the CLOTURE column
 * @method TEtapeCircuitValidation findOneByCalculHierarchie(string $CALCUL_HIERARCHIE) Return the first TEtapeCircuitValidation filtered by the CALCUL_HIERARCHIE column
 *
 * @method array findById(int $ID) Return TEtapeCircuitValidation objects filtered by the ID column
 * @method array findByLibelleEtapeFr(string $LIBELLE_ETAPE_FR) Return TEtapeCircuitValidation objects filtered by the LIBELLE_ETAPE_FR column
 * @method array findByLibelleEtapeAr(string $LIBELLE_ETAPE_AR) Return TEtapeCircuitValidation objects filtered by the LIBELLE_ETAPE_AR column
 * @method array findByNumeroEtape(int $NUMERO_ETAPE) Return TEtapeCircuitValidation objects filtered by the NUMERO_ETAPE column
 * @method array findByIdTypeEtape(int $ID_TYPE_ETAPE) Return TEtapeCircuitValidation objects filtered by the ID_TYPE_ETAPE column
 * @method array findByIdEntite(int $ID_ENTITE) Return TEtapeCircuitValidation objects filtered by the ID_ENTITE column
 * @method array findByIdCircuitValidation(int $ID_CIRCUIT_VALIDATION) Return TEtapeCircuitValidation objects filtered by the ID_CIRCUIT_VALIDATION column
 * @method array findByNiveauDepart(int $NIVEAU_DEPART) Return TEtapeCircuitValidation objects filtered by the NIVEAU_DEPART column
 * @method array findByNiveauFin(int $NIVEAU_FIN) Return TEtapeCircuitValidation objects filtered by the NIVEAU_FIN column
 * @method array findByIdSignataire(int $ID_SIGNATAIRE) Return TEtapeCircuitValidation objects filtered by the ID_SIGNATAIRE column
 * @method array findByVisaSignature(string $VISA_SIGNATURE) Return TEtapeCircuitValidation objects filtered by the VISA_SIGNATURE column
 * @method array findByRegleValidation(string $REGLE_VALIDATION) Return TEtapeCircuitValidation objects filtered by the REGLE_VALIDATION column
 * @method array findByRegleRefus(string $REGLE_REFUS) Return TEtapeCircuitValidation objects filtered by the REGLE_REFUS column
 * @method array findByDelaiEtape(int $DELAI_ETAPE) Return TEtapeCircuitValidation objects filtered by the DELAI_ETAPE column
 * @method array findByDelaiHeure(int $DELAI_HEURE) Return TEtapeCircuitValidation objects filtered by the DELAI_HEURE column
 * @method array findByIdEntiteRelance(int $ID_ENTITE_RELANCE) Return TEtapeCircuitValidation objects filtered by the ID_ENTITE_RELANCE column
 * @method array findByIdAgentRelance(int $ID_AGENT_RELANCE) Return TEtapeCircuitValidation objects filtered by the ID_AGENT_RELANCE column
 * @method array findByCloture(string $CLOTURE) Return TEtapeCircuitValidation objects filtered by the CLOTURE column
 * @method array findByCalculHierarchie(string $CALCUL_HIERARCHIE) Return TEtapeCircuitValidation objects filtered by the CALCUL_HIERARCHIE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTEtapeCircuitValidationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTEtapeCircuitValidationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TEtapeCircuitValidation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TEtapeCircuitValidationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TEtapeCircuitValidationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TEtapeCircuitValidationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TEtapeCircuitValidationQuery) {
            return $criteria;
        }
        $query = new TEtapeCircuitValidationQuery();
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
     * @return   TEtapeCircuitValidation|TEtapeCircuitValidation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TEtapeCircuitValidationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TEtapeCircuitValidation A model object, or null if the key is not found
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
     * @return                 TEtapeCircuitValidation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `LIBELLE_ETAPE_FR`, `LIBELLE_ETAPE_AR`, `NUMERO_ETAPE`, `ID_TYPE_ETAPE`, `ID_ENTITE`, `ID_CIRCUIT_VALIDATION`, `NIVEAU_DEPART`, `NIVEAU_FIN`, `ID_SIGNATAIRE`, `VISA_SIGNATURE`, `REGLE_VALIDATION`, `REGLE_REFUS`, `DELAI_ETAPE`, `DELAI_HEURE`, `ID_ENTITE_RELANCE`, `ID_AGENT_RELANCE`, `CLOTURE`, `CALCUL_HIERARCHIE` FROM `t_etape_circuit_validation` WHERE `ID` = :p0';
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
            $obj = new TEtapeCircuitValidation();
            $obj->hydrate($row);
            TEtapeCircuitValidationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TEtapeCircuitValidation|TEtapeCircuitValidation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TEtapeCircuitValidation[]|mixed the list of results, formatted by the current formatter
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::ID, $keys, Criteria::IN);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_ETAPE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleEtapeFr('fooValue');   // WHERE LIBELLE_ETAPE_FR = 'fooValue'
     * $query->filterByLibelleEtapeFr('%fooValue%'); // WHERE LIBELLE_ETAPE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleEtapeFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByLibelleEtapeFr($libelleEtapeFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleEtapeFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleEtapeFr)) {
                $libelleEtapeFr = str_replace('*', '%', $libelleEtapeFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::LIBELLE_ETAPE_FR, $libelleEtapeFr, $comparison);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::LIBELLE_ETAPE_AR, $libelleEtapeAr, $comparison);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByNumeroEtape($numeroEtape = null, $comparison = null)
    {
        if (is_array($numeroEtape)) {
            $useMinMax = false;
            if (isset($numeroEtape['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::NUMERO_ETAPE, $numeroEtape['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroEtape['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::NUMERO_ETAPE, $numeroEtape['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::NUMERO_ETAPE, $numeroEtape, $comparison);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByIdTypeEtape($idTypeEtape = null, $comparison = null)
    {
        if (is_array($idTypeEtape)) {
            $useMinMax = false;
            if (isset($idTypeEtape['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_TYPE_ETAPE, $idTypeEtape['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeEtape['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_TYPE_ETAPE, $idTypeEtape['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_TYPE_ETAPE, $idTypeEtape, $comparison);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the ID_CIRCUIT_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCircuitValidation(1234); // WHERE ID_CIRCUIT_VALIDATION = 1234
     * $query->filterByIdCircuitValidation(array(12, 34)); // WHERE ID_CIRCUIT_VALIDATION IN (12, 34)
     * $query->filterByIdCircuitValidation(array('min' => 12)); // WHERE ID_CIRCUIT_VALIDATION >= 12
     * $query->filterByIdCircuitValidation(array('max' => 12)); // WHERE ID_CIRCUIT_VALIDATION <= 12
     * </code>
     *
     * @param     mixed $idCircuitValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByIdCircuitValidation($idCircuitValidation = null, $comparison = null)
    {
        if (is_array($idCircuitValidation)) {
            $useMinMax = false;
            if (isset($idCircuitValidation['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_CIRCUIT_VALIDATION, $idCircuitValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCircuitValidation['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_CIRCUIT_VALIDATION, $idCircuitValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_CIRCUIT_VALIDATION, $idCircuitValidation, $comparison);
    }

    /**
     * Filter the query on the NIVEAU_DEPART column
     *
     * Example usage:
     * <code>
     * $query->filterByNiveauDepart(1234); // WHERE NIVEAU_DEPART = 1234
     * $query->filterByNiveauDepart(array(12, 34)); // WHERE NIVEAU_DEPART IN (12, 34)
     * $query->filterByNiveauDepart(array('min' => 12)); // WHERE NIVEAU_DEPART >= 12
     * $query->filterByNiveauDepart(array('max' => 12)); // WHERE NIVEAU_DEPART <= 12
     * </code>
     *
     * @param     mixed $niveauDepart The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByNiveauDepart($niveauDepart = null, $comparison = null)
    {
        if (is_array($niveauDepart)) {
            $useMinMax = false;
            if (isset($niveauDepart['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::NIVEAU_DEPART, $niveauDepart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($niveauDepart['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::NIVEAU_DEPART, $niveauDepart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::NIVEAU_DEPART, $niveauDepart, $comparison);
    }

    /**
     * Filter the query on the NIVEAU_FIN column
     *
     * Example usage:
     * <code>
     * $query->filterByNiveauFin(1234); // WHERE NIVEAU_FIN = 1234
     * $query->filterByNiveauFin(array(12, 34)); // WHERE NIVEAU_FIN IN (12, 34)
     * $query->filterByNiveauFin(array('min' => 12)); // WHERE NIVEAU_FIN >= 12
     * $query->filterByNiveauFin(array('max' => 12)); // WHERE NIVEAU_FIN <= 12
     * </code>
     *
     * @param     mixed $niveauFin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByNiveauFin($niveauFin = null, $comparison = null)
    {
        if (is_array($niveauFin)) {
            $useMinMax = false;
            if (isset($niveauFin['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::NIVEAU_FIN, $niveauFin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($niveauFin['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::NIVEAU_FIN, $niveauFin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::NIVEAU_FIN, $niveauFin, $comparison);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByIdSignataire($idSignataire = null, $comparison = null)
    {
        if (is_array($idSignataire)) {
            $useMinMax = false;
            if (isset($idSignataire['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_SIGNATAIRE, $idSignataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSignataire['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_SIGNATAIRE, $idSignataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_SIGNATAIRE, $idSignataire, $comparison);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::VISA_SIGNATURE, $visaSignature, $comparison);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::REGLE_VALIDATION, $regleValidation, $comparison);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::REGLE_REFUS, $regleRefus, $comparison);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByDelaiEtape($delaiEtape = null, $comparison = null)
    {
        if (is_array($delaiEtape)) {
            $useMinMax = false;
            if (isset($delaiEtape['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::DELAI_ETAPE, $delaiEtape['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiEtape['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::DELAI_ETAPE, $delaiEtape['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::DELAI_ETAPE, $delaiEtape, $comparison);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByDelaiHeure($delaiHeure = null, $comparison = null)
    {
        if (is_array($delaiHeure)) {
            $useMinMax = false;
            if (isset($delaiHeure['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::DELAI_HEURE, $delaiHeure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiHeure['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::DELAI_HEURE, $delaiHeure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::DELAI_HEURE, $delaiHeure, $comparison);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByIdEntiteRelance($idEntiteRelance = null, $comparison = null)
    {
        if (is_array($idEntiteRelance)) {
            $useMinMax = false;
            if (isset($idEntiteRelance['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_ENTITE_RELANCE, $idEntiteRelance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteRelance['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_ENTITE_RELANCE, $idEntiteRelance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_ENTITE_RELANCE, $idEntiteRelance, $comparison);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByIdAgentRelance($idAgentRelance = null, $comparison = null)
    {
        if (is_array($idAgentRelance)) {
            $useMinMax = false;
            if (isset($idAgentRelance['min'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_AGENT_RELANCE, $idAgentRelance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentRelance['max'])) {
                $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_AGENT_RELANCE, $idAgentRelance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::ID_AGENT_RELANCE, $idAgentRelance, $comparison);
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
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::CLOTURE, $cloture, $comparison);
    }

    /**
     * Filter the query on the CALCUL_HIERARCHIE column
     *
     * Example usage:
     * <code>
     * $query->filterByCalculHierarchie('fooValue');   // WHERE CALCUL_HIERARCHIE = 'fooValue'
     * $query->filterByCalculHierarchie('%fooValue%'); // WHERE CALCUL_HIERARCHIE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calculHierarchie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByCalculHierarchie($calculHierarchie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calculHierarchie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calculHierarchie)) {
                $calculHierarchie = str_replace('*', '%', $calculHierarchie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEtapeCircuitValidationPeer::CALCUL_HIERARCHIE, $calculHierarchie, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TEtapeCircuitValidation $tEtapeCircuitValidation Object to remove from the list of results
     *
     * @return TEtapeCircuitValidationQuery The current query, for fluid interface
     */
    public function prune($tEtapeCircuitValidation = null)
    {
        if ($tEtapeCircuitValidation) {
            $this->addUsingAlias(TEtapeCircuitValidationPeer::ID, $tEtapeCircuitValidation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
