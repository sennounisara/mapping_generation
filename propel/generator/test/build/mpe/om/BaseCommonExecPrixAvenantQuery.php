<?php


/**
 * Base class that represents a query for the 'exec_prix_avenant' table.
 *
 * 
 *
 * @method CommonExecPrixAvenantQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecPrixAvenantQuery orderByIdAvenant($order = Criteria::ASC) Order by the id_avenant column
 * @method CommonExecPrixAvenantQuery orderByIdPrix($order = Criteria::ASC) Order by the id_prix column
 * @method CommonExecPrixAvenantQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecPrixAvenantQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method CommonExecPrixAvenantQuery orderByIntitule($order = Criteria::ASC) Order by the intitule column
 * @method CommonExecPrixAvenantQuery orderByUnite($order = Criteria::ASC) Order by the unite column
 * @method CommonExecPrixAvenantQuery orderByEcartQuantite($order = Criteria::ASC) Order by the ecart_quantite column
 * @method CommonExecPrixAvenantQuery orderByQuantiteAv($order = Criteria::ASC) Order by the quantite_av column
 * @method CommonExecPrixAvenantQuery orderByQuantiteAp($order = Criteria::ASC) Order by the quantite_ap column
 * @method CommonExecPrixAvenantQuery orderByPrixUnitaire($order = Criteria::ASC) Order by the prix_unitaire column
 * @method CommonExecPrixAvenantQuery orderByPrixHtAv($order = Criteria::ASC) Order by the prix_ht_av column
 * @method CommonExecPrixAvenantQuery orderByPrixHtAp($order = Criteria::ASC) Order by the prix_ht_ap column
 * @method CommonExecPrixAvenantQuery orderByTauxTva($order = Criteria::ASC) Order by the taux_tva column
 * @method CommonExecPrixAvenantQuery orderByPrixTtcAv($order = Criteria::ASC) Order by the prix_ttc_av column
 * @method CommonExecPrixAvenantQuery orderByPrixTtcAp($order = Criteria::ASC) Order by the prix_ttc_ap column
 * @method CommonExecPrixAvenantQuery orderByQuantiteMax($order = Criteria::ASC) Order by the quantite_max column
 * @method CommonExecPrixAvenantQuery orderByPrixHtMin($order = Criteria::ASC) Order by the prix_ht_min column
 * @method CommonExecPrixAvenantQuery orderByPrixHtMax($order = Criteria::ASC) Order by the prix_ht_max column
 * @method CommonExecPrixAvenantQuery orderByPrixTtcMin($order = Criteria::ASC) Order by the prix_ttc_min column
 * @method CommonExecPrixAvenantQuery orderByPrixTtcMax($order = Criteria::ASC) Order by the prix_ttc_max column
 *
 * @method CommonExecPrixAvenantQuery groupById() Group by the id column
 * @method CommonExecPrixAvenantQuery groupByIdAvenant() Group by the id_avenant column
 * @method CommonExecPrixAvenantQuery groupByIdPrix() Group by the id_prix column
 * @method CommonExecPrixAvenantQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecPrixAvenantQuery groupByNumero() Group by the numero column
 * @method CommonExecPrixAvenantQuery groupByIntitule() Group by the intitule column
 * @method CommonExecPrixAvenantQuery groupByUnite() Group by the unite column
 * @method CommonExecPrixAvenantQuery groupByEcartQuantite() Group by the ecart_quantite column
 * @method CommonExecPrixAvenantQuery groupByQuantiteAv() Group by the quantite_av column
 * @method CommonExecPrixAvenantQuery groupByQuantiteAp() Group by the quantite_ap column
 * @method CommonExecPrixAvenantQuery groupByPrixUnitaire() Group by the prix_unitaire column
 * @method CommonExecPrixAvenantQuery groupByPrixHtAv() Group by the prix_ht_av column
 * @method CommonExecPrixAvenantQuery groupByPrixHtAp() Group by the prix_ht_ap column
 * @method CommonExecPrixAvenantQuery groupByTauxTva() Group by the taux_tva column
 * @method CommonExecPrixAvenantQuery groupByPrixTtcAv() Group by the prix_ttc_av column
 * @method CommonExecPrixAvenantQuery groupByPrixTtcAp() Group by the prix_ttc_ap column
 * @method CommonExecPrixAvenantQuery groupByQuantiteMax() Group by the quantite_max column
 * @method CommonExecPrixAvenantQuery groupByPrixHtMin() Group by the prix_ht_min column
 * @method CommonExecPrixAvenantQuery groupByPrixHtMax() Group by the prix_ht_max column
 * @method CommonExecPrixAvenantQuery groupByPrixTtcMin() Group by the prix_ttc_min column
 * @method CommonExecPrixAvenantQuery groupByPrixTtcMax() Group by the prix_ttc_max column
 *
 * @method CommonExecPrixAvenantQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecPrixAvenantQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecPrixAvenantQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecPrixAvenantQuery leftJoinCommonExecAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecAvenant relation
 * @method CommonExecPrixAvenantQuery rightJoinCommonExecAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecAvenant relation
 * @method CommonExecPrixAvenantQuery innerJoinCommonExecAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecAvenant relation
 *
 * @method CommonExecPrixAvenantQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecPrixAvenantQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecPrixAvenantQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecPrixAvenantQuery leftJoinCommonExecPrix($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPrix relation
 * @method CommonExecPrixAvenantQuery rightJoinCommonExecPrix($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPrix relation
 * @method CommonExecPrixAvenantQuery innerJoinCommonExecPrix($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPrix relation
 *
 * @method CommonExecPrixAvenant findOne(PropelPDO $con = null) Return the first CommonExecPrixAvenant matching the query
 * @method CommonExecPrixAvenant findOneOrCreate(PropelPDO $con = null) Return the first CommonExecPrixAvenant matching the query, or a new CommonExecPrixAvenant object populated from the query conditions when no match is found
 *
 * @method CommonExecPrixAvenant findOneByIdAvenant(int $id_avenant) Return the first CommonExecPrixAvenant filtered by the id_avenant column
 * @method CommonExecPrixAvenant findOneByIdPrix(int $id_prix) Return the first CommonExecPrixAvenant filtered by the id_prix column
 * @method CommonExecPrixAvenant findOneByIdContrat(int $id_contrat) Return the first CommonExecPrixAvenant filtered by the id_contrat column
 * @method CommonExecPrixAvenant findOneByNumero(string $numero) Return the first CommonExecPrixAvenant filtered by the numero column
 * @method CommonExecPrixAvenant findOneByIntitule(string $intitule) Return the first CommonExecPrixAvenant filtered by the intitule column
 * @method CommonExecPrixAvenant findOneByUnite(string $unite) Return the first CommonExecPrixAvenant filtered by the unite column
 * @method CommonExecPrixAvenant findOneByEcartQuantite(double $ecart_quantite) Return the first CommonExecPrixAvenant filtered by the ecart_quantite column
 * @method CommonExecPrixAvenant findOneByQuantiteAv(double $quantite_av) Return the first CommonExecPrixAvenant filtered by the quantite_av column
 * @method CommonExecPrixAvenant findOneByQuantiteAp(double $quantite_ap) Return the first CommonExecPrixAvenant filtered by the quantite_ap column
 * @method CommonExecPrixAvenant findOneByPrixUnitaire(double $prix_unitaire) Return the first CommonExecPrixAvenant filtered by the prix_unitaire column
 * @method CommonExecPrixAvenant findOneByPrixHtAv(double $prix_ht_av) Return the first CommonExecPrixAvenant filtered by the prix_ht_av column
 * @method CommonExecPrixAvenant findOneByPrixHtAp(double $prix_ht_ap) Return the first CommonExecPrixAvenant filtered by the prix_ht_ap column
 * @method CommonExecPrixAvenant findOneByTauxTva(double $taux_tva) Return the first CommonExecPrixAvenant filtered by the taux_tva column
 * @method CommonExecPrixAvenant findOneByPrixTtcAv(double $prix_ttc_av) Return the first CommonExecPrixAvenant filtered by the prix_ttc_av column
 * @method CommonExecPrixAvenant findOneByPrixTtcAp(double $prix_ttc_ap) Return the first CommonExecPrixAvenant filtered by the prix_ttc_ap column
 * @method CommonExecPrixAvenant findOneByQuantiteMax(double $quantite_max) Return the first CommonExecPrixAvenant filtered by the quantite_max column
 * @method CommonExecPrixAvenant findOneByPrixHtMin(double $prix_ht_min) Return the first CommonExecPrixAvenant filtered by the prix_ht_min column
 * @method CommonExecPrixAvenant findOneByPrixHtMax(double $prix_ht_max) Return the first CommonExecPrixAvenant filtered by the prix_ht_max column
 * @method CommonExecPrixAvenant findOneByPrixTtcMin(double $prix_ttc_min) Return the first CommonExecPrixAvenant filtered by the prix_ttc_min column
 * @method CommonExecPrixAvenant findOneByPrixTtcMax(double $prix_ttc_max) Return the first CommonExecPrixAvenant filtered by the prix_ttc_max column
 *
 * @method array findById(int $id) Return CommonExecPrixAvenant objects filtered by the id column
 * @method array findByIdAvenant(int $id_avenant) Return CommonExecPrixAvenant objects filtered by the id_avenant column
 * @method array findByIdPrix(int $id_prix) Return CommonExecPrixAvenant objects filtered by the id_prix column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecPrixAvenant objects filtered by the id_contrat column
 * @method array findByNumero(string $numero) Return CommonExecPrixAvenant objects filtered by the numero column
 * @method array findByIntitule(string $intitule) Return CommonExecPrixAvenant objects filtered by the intitule column
 * @method array findByUnite(string $unite) Return CommonExecPrixAvenant objects filtered by the unite column
 * @method array findByEcartQuantite(double $ecart_quantite) Return CommonExecPrixAvenant objects filtered by the ecart_quantite column
 * @method array findByQuantiteAv(double $quantite_av) Return CommonExecPrixAvenant objects filtered by the quantite_av column
 * @method array findByQuantiteAp(double $quantite_ap) Return CommonExecPrixAvenant objects filtered by the quantite_ap column
 * @method array findByPrixUnitaire(double $prix_unitaire) Return CommonExecPrixAvenant objects filtered by the prix_unitaire column
 * @method array findByPrixHtAv(double $prix_ht_av) Return CommonExecPrixAvenant objects filtered by the prix_ht_av column
 * @method array findByPrixHtAp(double $prix_ht_ap) Return CommonExecPrixAvenant objects filtered by the prix_ht_ap column
 * @method array findByTauxTva(double $taux_tva) Return CommonExecPrixAvenant objects filtered by the taux_tva column
 * @method array findByPrixTtcAv(double $prix_ttc_av) Return CommonExecPrixAvenant objects filtered by the prix_ttc_av column
 * @method array findByPrixTtcAp(double $prix_ttc_ap) Return CommonExecPrixAvenant objects filtered by the prix_ttc_ap column
 * @method array findByQuantiteMax(double $quantite_max) Return CommonExecPrixAvenant objects filtered by the quantite_max column
 * @method array findByPrixHtMin(double $prix_ht_min) Return CommonExecPrixAvenant objects filtered by the prix_ht_min column
 * @method array findByPrixHtMax(double $prix_ht_max) Return CommonExecPrixAvenant objects filtered by the prix_ht_max column
 * @method array findByPrixTtcMin(double $prix_ttc_min) Return CommonExecPrixAvenant objects filtered by the prix_ttc_min column
 * @method array findByPrixTtcMax(double $prix_ttc_max) Return CommonExecPrixAvenant objects filtered by the prix_ttc_max column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecPrixAvenantQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecPrixAvenantQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecPrixAvenant', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecPrixAvenantQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecPrixAvenantQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecPrixAvenantQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecPrixAvenantQuery) {
            return $criteria;
        }
        $query = new CommonExecPrixAvenantQuery();
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
     * @return   CommonExecPrixAvenant|CommonExecPrixAvenant[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecPrixAvenantPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecPrixAvenant A model object, or null if the key is not found
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
     * @return                 CommonExecPrixAvenant A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_avenant`, `id_prix`, `id_contrat`, `numero`, `intitule`, `unite`, `ecart_quantite`, `quantite_av`, `quantite_ap`, `prix_unitaire`, `prix_ht_av`, `prix_ht_ap`, `taux_tva`, `prix_ttc_av`, `prix_ttc_ap`, `quantite_max`, `prix_ht_min`, `prix_ht_max`, `prix_ttc_min`, `prix_ttc_max` FROM `exec_prix_avenant` WHERE `id` = :p0';
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
            $obj = new CommonExecPrixAvenant();
            $obj->hydrate($row);
            CommonExecPrixAvenantPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecPrixAvenant|CommonExecPrixAvenant[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecPrixAvenant[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_avenant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAvenant(1234); // WHERE id_avenant = 1234
     * $query->filterByIdAvenant(array(12, 34)); // WHERE id_avenant IN (12, 34)
     * $query->filterByIdAvenant(array('min' => 12)); // WHERE id_avenant >= 12
     * $query->filterByIdAvenant(array('max' => 12)); // WHERE id_avenant <= 12
     * </code>
     *
     * @see       filterByCommonExecAvenant()
     *
     * @param     mixed $idAvenant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByIdAvenant($idAvenant = null, $comparison = null)
    {
        if (is_array($idAvenant)) {
            $useMinMax = false;
            if (isset($idAvenant['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::ID_AVENANT, $idAvenant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAvenant['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::ID_AVENANT, $idAvenant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::ID_AVENANT, $idAvenant, $comparison);
    }

    /**
     * Filter the query on the id_prix column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPrix(1234); // WHERE id_prix = 1234
     * $query->filterByIdPrix(array(12, 34)); // WHERE id_prix IN (12, 34)
     * $query->filterByIdPrix(array('min' => 12)); // WHERE id_prix >= 12
     * $query->filterByIdPrix(array('max' => 12)); // WHERE id_prix <= 12
     * </code>
     *
     * @see       filterByCommonExecPrix()
     *
     * @param     mixed $idPrix The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByIdPrix($idPrix = null, $comparison = null)
    {
        if (is_array($idPrix)) {
            $useMinMax = false;
            if (isset($idPrix['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::ID_PRIX, $idPrix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPrix['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::ID_PRIX, $idPrix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::ID_PRIX, $idPrix, $comparison);
    }

    /**
     * Filter the query on the id_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContrat(1234); // WHERE id_contrat = 1234
     * $query->filterByIdContrat(array(12, 34)); // WHERE id_contrat IN (12, 34)
     * $query->filterByIdContrat(array('min' => 12)); // WHERE id_contrat >= 12
     * $query->filterByIdContrat(array('max' => 12)); // WHERE id_contrat <= 12
     * </code>
     *
     * @see       filterByCommonExecContrat()
     *
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the numero column
     *
     * Example usage:
     * <code>
     * $query->filterByNumero('fooValue');   // WHERE numero = 'fooValue'
     * $query->filterByNumero('%fooValue%'); // WHERE numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByNumero($numero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numero)) {
                $numero = str_replace('*', '%', $numero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::NUMERO, $numero, $comparison);
    }

    /**
     * Filter the query on the intitule column
     *
     * Example usage:
     * <code>
     * $query->filterByIntitule('fooValue');   // WHERE intitule = 'fooValue'
     * $query->filterByIntitule('%fooValue%'); // WHERE intitule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intitule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByIntitule($intitule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intitule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intitule)) {
                $intitule = str_replace('*', '%', $intitule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::INTITULE, $intitule, $comparison);
    }

    /**
     * Filter the query on the unite column
     *
     * Example usage:
     * <code>
     * $query->filterByUnite('fooValue');   // WHERE unite = 'fooValue'
     * $query->filterByUnite('%fooValue%'); // WHERE unite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByUnite($unite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unite)) {
                $unite = str_replace('*', '%', $unite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::UNITE, $unite, $comparison);
    }

    /**
     * Filter the query on the ecart_quantite column
     *
     * Example usage:
     * <code>
     * $query->filterByEcartQuantite(1234); // WHERE ecart_quantite = 1234
     * $query->filterByEcartQuantite(array(12, 34)); // WHERE ecart_quantite IN (12, 34)
     * $query->filterByEcartQuantite(array('min' => 12)); // WHERE ecart_quantite >= 12
     * $query->filterByEcartQuantite(array('max' => 12)); // WHERE ecart_quantite <= 12
     * </code>
     *
     * @param     mixed $ecartQuantite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByEcartQuantite($ecartQuantite = null, $comparison = null)
    {
        if (is_array($ecartQuantite)) {
            $useMinMax = false;
            if (isset($ecartQuantite['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::ECART_QUANTITE, $ecartQuantite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecartQuantite['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::ECART_QUANTITE, $ecartQuantite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::ECART_QUANTITE, $ecartQuantite, $comparison);
    }

    /**
     * Filter the query on the quantite_av column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantiteAv(1234); // WHERE quantite_av = 1234
     * $query->filterByQuantiteAv(array(12, 34)); // WHERE quantite_av IN (12, 34)
     * $query->filterByQuantiteAv(array('min' => 12)); // WHERE quantite_av >= 12
     * $query->filterByQuantiteAv(array('max' => 12)); // WHERE quantite_av <= 12
     * </code>
     *
     * @param     mixed $quantiteAv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByQuantiteAv($quantiteAv = null, $comparison = null)
    {
        if (is_array($quantiteAv)) {
            $useMinMax = false;
            if (isset($quantiteAv['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::QUANTITE_AV, $quantiteAv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantiteAv['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::QUANTITE_AV, $quantiteAv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::QUANTITE_AV, $quantiteAv, $comparison);
    }

    /**
     * Filter the query on the quantite_ap column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantiteAp(1234); // WHERE quantite_ap = 1234
     * $query->filterByQuantiteAp(array(12, 34)); // WHERE quantite_ap IN (12, 34)
     * $query->filterByQuantiteAp(array('min' => 12)); // WHERE quantite_ap >= 12
     * $query->filterByQuantiteAp(array('max' => 12)); // WHERE quantite_ap <= 12
     * </code>
     *
     * @param     mixed $quantiteAp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByQuantiteAp($quantiteAp = null, $comparison = null)
    {
        if (is_array($quantiteAp)) {
            $useMinMax = false;
            if (isset($quantiteAp['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::QUANTITE_AP, $quantiteAp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantiteAp['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::QUANTITE_AP, $quantiteAp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::QUANTITE_AP, $quantiteAp, $comparison);
    }

    /**
     * Filter the query on the prix_unitaire column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixUnitaire(1234); // WHERE prix_unitaire = 1234
     * $query->filterByPrixUnitaire(array(12, 34)); // WHERE prix_unitaire IN (12, 34)
     * $query->filterByPrixUnitaire(array('min' => 12)); // WHERE prix_unitaire >= 12
     * $query->filterByPrixUnitaire(array('max' => 12)); // WHERE prix_unitaire <= 12
     * </code>
     *
     * @param     mixed $prixUnitaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByPrixUnitaire($prixUnitaire = null, $comparison = null)
    {
        if (is_array($prixUnitaire)) {
            $useMinMax = false;
            if (isset($prixUnitaire['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_UNITAIRE, $prixUnitaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixUnitaire['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_UNITAIRE, $prixUnitaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_UNITAIRE, $prixUnitaire, $comparison);
    }

    /**
     * Filter the query on the prix_ht_av column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixHtAv(1234); // WHERE prix_ht_av = 1234
     * $query->filterByPrixHtAv(array(12, 34)); // WHERE prix_ht_av IN (12, 34)
     * $query->filterByPrixHtAv(array('min' => 12)); // WHERE prix_ht_av >= 12
     * $query->filterByPrixHtAv(array('max' => 12)); // WHERE prix_ht_av <= 12
     * </code>
     *
     * @param     mixed $prixHtAv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByPrixHtAv($prixHtAv = null, $comparison = null)
    {
        if (is_array($prixHtAv)) {
            $useMinMax = false;
            if (isset($prixHtAv['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_HT_AV, $prixHtAv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixHtAv['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_HT_AV, $prixHtAv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_HT_AV, $prixHtAv, $comparison);
    }

    /**
     * Filter the query on the prix_ht_ap column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixHtAp(1234); // WHERE prix_ht_ap = 1234
     * $query->filterByPrixHtAp(array(12, 34)); // WHERE prix_ht_ap IN (12, 34)
     * $query->filterByPrixHtAp(array('min' => 12)); // WHERE prix_ht_ap >= 12
     * $query->filterByPrixHtAp(array('max' => 12)); // WHERE prix_ht_ap <= 12
     * </code>
     *
     * @param     mixed $prixHtAp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByPrixHtAp($prixHtAp = null, $comparison = null)
    {
        if (is_array($prixHtAp)) {
            $useMinMax = false;
            if (isset($prixHtAp['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_HT_AP, $prixHtAp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixHtAp['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_HT_AP, $prixHtAp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_HT_AP, $prixHtAp, $comparison);
    }

    /**
     * Filter the query on the taux_tva column
     *
     * Example usage:
     * <code>
     * $query->filterByTauxTva(1234); // WHERE taux_tva = 1234
     * $query->filterByTauxTva(array(12, 34)); // WHERE taux_tva IN (12, 34)
     * $query->filterByTauxTva(array('min' => 12)); // WHERE taux_tva >= 12
     * $query->filterByTauxTva(array('max' => 12)); // WHERE taux_tva <= 12
     * </code>
     *
     * @param     mixed $tauxTva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByTauxTva($tauxTva = null, $comparison = null)
    {
        if (is_array($tauxTva)) {
            $useMinMax = false;
            if (isset($tauxTva['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::TAUX_TVA, $tauxTva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tauxTva['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::TAUX_TVA, $tauxTva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::TAUX_TVA, $tauxTva, $comparison);
    }

    /**
     * Filter the query on the prix_ttc_av column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixTtcAv(1234); // WHERE prix_ttc_av = 1234
     * $query->filterByPrixTtcAv(array(12, 34)); // WHERE prix_ttc_av IN (12, 34)
     * $query->filterByPrixTtcAv(array('min' => 12)); // WHERE prix_ttc_av >= 12
     * $query->filterByPrixTtcAv(array('max' => 12)); // WHERE prix_ttc_av <= 12
     * </code>
     *
     * @param     mixed $prixTtcAv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByPrixTtcAv($prixTtcAv = null, $comparison = null)
    {
        if (is_array($prixTtcAv)) {
            $useMinMax = false;
            if (isset($prixTtcAv['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_TTC_AV, $prixTtcAv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixTtcAv['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_TTC_AV, $prixTtcAv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_TTC_AV, $prixTtcAv, $comparison);
    }

    /**
     * Filter the query on the prix_ttc_ap column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixTtcAp(1234); // WHERE prix_ttc_ap = 1234
     * $query->filterByPrixTtcAp(array(12, 34)); // WHERE prix_ttc_ap IN (12, 34)
     * $query->filterByPrixTtcAp(array('min' => 12)); // WHERE prix_ttc_ap >= 12
     * $query->filterByPrixTtcAp(array('max' => 12)); // WHERE prix_ttc_ap <= 12
     * </code>
     *
     * @param     mixed $prixTtcAp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByPrixTtcAp($prixTtcAp = null, $comparison = null)
    {
        if (is_array($prixTtcAp)) {
            $useMinMax = false;
            if (isset($prixTtcAp['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_TTC_AP, $prixTtcAp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixTtcAp['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_TTC_AP, $prixTtcAp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_TTC_AP, $prixTtcAp, $comparison);
    }

    /**
     * Filter the query on the quantite_max column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantiteMax(1234); // WHERE quantite_max = 1234
     * $query->filterByQuantiteMax(array(12, 34)); // WHERE quantite_max IN (12, 34)
     * $query->filterByQuantiteMax(array('min' => 12)); // WHERE quantite_max >= 12
     * $query->filterByQuantiteMax(array('max' => 12)); // WHERE quantite_max <= 12
     * </code>
     *
     * @param     mixed $quantiteMax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByQuantiteMax($quantiteMax = null, $comparison = null)
    {
        if (is_array($quantiteMax)) {
            $useMinMax = false;
            if (isset($quantiteMax['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::QUANTITE_MAX, $quantiteMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantiteMax['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::QUANTITE_MAX, $quantiteMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::QUANTITE_MAX, $quantiteMax, $comparison);
    }

    /**
     * Filter the query on the prix_ht_min column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixHtMin(1234); // WHERE prix_ht_min = 1234
     * $query->filterByPrixHtMin(array(12, 34)); // WHERE prix_ht_min IN (12, 34)
     * $query->filterByPrixHtMin(array('min' => 12)); // WHERE prix_ht_min >= 12
     * $query->filterByPrixHtMin(array('max' => 12)); // WHERE prix_ht_min <= 12
     * </code>
     *
     * @param     mixed $prixHtMin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByPrixHtMin($prixHtMin = null, $comparison = null)
    {
        if (is_array($prixHtMin)) {
            $useMinMax = false;
            if (isset($prixHtMin['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_HT_MIN, $prixHtMin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixHtMin['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_HT_MIN, $prixHtMin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_HT_MIN, $prixHtMin, $comparison);
    }

    /**
     * Filter the query on the prix_ht_max column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixHtMax(1234); // WHERE prix_ht_max = 1234
     * $query->filterByPrixHtMax(array(12, 34)); // WHERE prix_ht_max IN (12, 34)
     * $query->filterByPrixHtMax(array('min' => 12)); // WHERE prix_ht_max >= 12
     * $query->filterByPrixHtMax(array('max' => 12)); // WHERE prix_ht_max <= 12
     * </code>
     *
     * @param     mixed $prixHtMax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByPrixHtMax($prixHtMax = null, $comparison = null)
    {
        if (is_array($prixHtMax)) {
            $useMinMax = false;
            if (isset($prixHtMax['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_HT_MAX, $prixHtMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixHtMax['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_HT_MAX, $prixHtMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_HT_MAX, $prixHtMax, $comparison);
    }

    /**
     * Filter the query on the prix_ttc_min column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixTtcMin(1234); // WHERE prix_ttc_min = 1234
     * $query->filterByPrixTtcMin(array(12, 34)); // WHERE prix_ttc_min IN (12, 34)
     * $query->filterByPrixTtcMin(array('min' => 12)); // WHERE prix_ttc_min >= 12
     * $query->filterByPrixTtcMin(array('max' => 12)); // WHERE prix_ttc_min <= 12
     * </code>
     *
     * @param     mixed $prixTtcMin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByPrixTtcMin($prixTtcMin = null, $comparison = null)
    {
        if (is_array($prixTtcMin)) {
            $useMinMax = false;
            if (isset($prixTtcMin['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_TTC_MIN, $prixTtcMin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixTtcMin['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_TTC_MIN, $prixTtcMin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_TTC_MIN, $prixTtcMin, $comparison);
    }

    /**
     * Filter the query on the prix_ttc_max column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixTtcMax(1234); // WHERE prix_ttc_max = 1234
     * $query->filterByPrixTtcMax(array(12, 34)); // WHERE prix_ttc_max IN (12, 34)
     * $query->filterByPrixTtcMax(array('min' => 12)); // WHERE prix_ttc_max >= 12
     * $query->filterByPrixTtcMax(array('max' => 12)); // WHERE prix_ttc_max <= 12
     * </code>
     *
     * @param     mixed $prixTtcMax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function filterByPrixTtcMax($prixTtcMax = null, $comparison = null)
    {
        if (is_array($prixTtcMax)) {
            $useMinMax = false;
            if (isset($prixTtcMax['min'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_TTC_MAX, $prixTtcMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixTtcMax['max'])) {
                $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_TTC_MAX, $prixTtcMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPrixAvenantPeer::PRIX_TTC_MAX, $prixTtcMax, $comparison);
    }

    /**
     * Filter the query by a related CommonExecAvenant object
     *
     * @param   CommonExecAvenant|PropelObjectCollection $commonExecAvenant The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecPrixAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecAvenant($commonExecAvenant, $comparison = null)
    {
        if ($commonExecAvenant instanceof CommonExecAvenant) {
            return $this
                ->addUsingAlias(CommonExecPrixAvenantPeer::ID_AVENANT, $commonExecAvenant->getId(), $comparison);
        } elseif ($commonExecAvenant instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecPrixAvenantPeer::ID_AVENANT, $commonExecAvenant->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecAvenant() only accepts arguments of type CommonExecAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecAvenant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function joinCommonExecAvenant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecAvenant');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecAvenant');
        }

        return $this;
    }

    /**
     * Use the CommonExecAvenant relation CommonExecAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecAvenantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecAvenantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecAvenant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecAvenant', 'CommonExecAvenantQuery');
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecPrixAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecPrixAvenantPeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecPrixAvenantPeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecContrat() only accepts arguments of type CommonExecContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function joinCommonExecContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContrat');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecContrat relation CommonExecContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContrat', 'CommonExecContratQuery');
    }

    /**
     * Filter the query by a related CommonExecPrix object
     *
     * @param   CommonExecPrix|PropelObjectCollection $commonExecPrix The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecPrixAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPrix($commonExecPrix, $comparison = null)
    {
        if ($commonExecPrix instanceof CommonExecPrix) {
            return $this
                ->addUsingAlias(CommonExecPrixAvenantPeer::ID_PRIX, $commonExecPrix->getId(), $comparison);
        } elseif ($commonExecPrix instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecPrixAvenantPeer::ID_PRIX, $commonExecPrix->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecPrix() only accepts arguments of type CommonExecPrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPrix relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function joinCommonExecPrix($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPrix');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecPrix');
        }

        return $this;
    }

    /**
     * Use the CommonExecPrix relation CommonExecPrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPrixQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPrixQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecPrix($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPrix', 'CommonExecPrixQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecPrixAvenant $commonExecPrixAvenant Object to remove from the list of results
     *
     * @return CommonExecPrixAvenantQuery The current query, for fluid interface
     */
    public function prune($commonExecPrixAvenant = null)
    {
        if ($commonExecPrixAvenant) {
            $this->addUsingAlias(CommonExecPrixAvenantPeer::ID, $commonExecPrixAvenant->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
