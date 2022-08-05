<?php


/**
 * Base class that represents a query for the 'exec_historique_prix' table.
 *
 * 
 *
 * @method CommonExecHistoriquePrixQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecHistoriquePrixQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecHistoriquePrixQuery orderByIdPrix($order = Criteria::ASC) Order by the id_prix column
 * @method CommonExecHistoriquePrixQuery orderByIdAvenant($order = Criteria::ASC) Order by the id_avenant column
 * @method CommonExecHistoriquePrixQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method CommonExecHistoriquePrixQuery orderByIntitule($order = Criteria::ASC) Order by the intitule column
 * @method CommonExecHistoriquePrixQuery orderByUnite($order = Criteria::ASC) Order by the unite column
 * @method CommonExecHistoriquePrixQuery orderByQuantite($order = Criteria::ASC) Order by the quantite column
 * @method CommonExecHistoriquePrixQuery orderByPrixUnitaire($order = Criteria::ASC) Order by the prix_unitaire column
 * @method CommonExecHistoriquePrixQuery orderByPrixHt($order = Criteria::ASC) Order by the prix_ht column
 * @method CommonExecHistoriquePrixQuery orderByTauxTva($order = Criteria::ASC) Order by the taux_tva column
 * @method CommonExecHistoriquePrixQuery orderByPrixTtc($order = Criteria::ASC) Order by the prix_ttc column
 * @method CommonExecHistoriquePrixQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method CommonExecHistoriquePrixQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecHistoriquePrixQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 * @method CommonExecHistoriquePrixQuery orderByIdAgentModif($order = Criteria::ASC) Order by the id_agent_modif column
 *
 * @method CommonExecHistoriquePrixQuery groupById() Group by the id column
 * @method CommonExecHistoriquePrixQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecHistoriquePrixQuery groupByIdPrix() Group by the id_prix column
 * @method CommonExecHistoriquePrixQuery groupByIdAvenant() Group by the id_avenant column
 * @method CommonExecHistoriquePrixQuery groupByNumero() Group by the numero column
 * @method CommonExecHistoriquePrixQuery groupByIntitule() Group by the intitule column
 * @method CommonExecHistoriquePrixQuery groupByUnite() Group by the unite column
 * @method CommonExecHistoriquePrixQuery groupByQuantite() Group by the quantite column
 * @method CommonExecHistoriquePrixQuery groupByPrixUnitaire() Group by the prix_unitaire column
 * @method CommonExecHistoriquePrixQuery groupByPrixHt() Group by the prix_ht column
 * @method CommonExecHistoriquePrixQuery groupByTauxTva() Group by the taux_tva column
 * @method CommonExecHistoriquePrixQuery groupByPrixTtc() Group by the prix_ttc column
 * @method CommonExecHistoriquePrixQuery groupByDateCrea() Group by the date_crea column
 * @method CommonExecHistoriquePrixQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecHistoriquePrixQuery groupByDateModif() Group by the date_modif column
 * @method CommonExecHistoriquePrixQuery groupByIdAgentModif() Group by the id_agent_modif column
 *
 * @method CommonExecHistoriquePrixQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecHistoriquePrixQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecHistoriquePrixQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecHistoriquePrixQuery leftJoinCommonAgentRelatedByIdAgentCrea($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgentRelatedByIdAgentCrea relation
 * @method CommonExecHistoriquePrixQuery rightJoinCommonAgentRelatedByIdAgentCrea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgentRelatedByIdAgentCrea relation
 * @method CommonExecHistoriquePrixQuery innerJoinCommonAgentRelatedByIdAgentCrea($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgentRelatedByIdAgentCrea relation
 *
 * @method CommonExecHistoriquePrixQuery leftJoinCommonAgentRelatedByIdAgentModif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgentRelatedByIdAgentModif relation
 * @method CommonExecHistoriquePrixQuery rightJoinCommonAgentRelatedByIdAgentModif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgentRelatedByIdAgentModif relation
 * @method CommonExecHistoriquePrixQuery innerJoinCommonAgentRelatedByIdAgentModif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgentRelatedByIdAgentModif relation
 *
 * @method CommonExecHistoriquePrixQuery leftJoinCommonExecAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecAvenant relation
 * @method CommonExecHistoriquePrixQuery rightJoinCommonExecAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecAvenant relation
 * @method CommonExecHistoriquePrixQuery innerJoinCommonExecAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecAvenant relation
 *
 * @method CommonExecHistoriquePrixQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecHistoriquePrixQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecHistoriquePrixQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecHistoriquePrixQuery leftJoinCommonExecPrix($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPrix relation
 * @method CommonExecHistoriquePrixQuery rightJoinCommonExecPrix($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPrix relation
 * @method CommonExecHistoriquePrixQuery innerJoinCommonExecPrix($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPrix relation
 *
 * @method CommonExecHistoriquePrix findOne(PropelPDO $con = null) Return the first CommonExecHistoriquePrix matching the query
 * @method CommonExecHistoriquePrix findOneOrCreate(PropelPDO $con = null) Return the first CommonExecHistoriquePrix matching the query, or a new CommonExecHistoriquePrix object populated from the query conditions when no match is found
 *
 * @method CommonExecHistoriquePrix findOneByIdContrat(int $id_contrat) Return the first CommonExecHistoriquePrix filtered by the id_contrat column
 * @method CommonExecHistoriquePrix findOneByIdPrix(int $id_prix) Return the first CommonExecHistoriquePrix filtered by the id_prix column
 * @method CommonExecHistoriquePrix findOneByIdAvenant(int $id_avenant) Return the first CommonExecHistoriquePrix filtered by the id_avenant column
 * @method CommonExecHistoriquePrix findOneByNumero(string $numero) Return the first CommonExecHistoriquePrix filtered by the numero column
 * @method CommonExecHistoriquePrix findOneByIntitule(string $intitule) Return the first CommonExecHistoriquePrix filtered by the intitule column
 * @method CommonExecHistoriquePrix findOneByUnite(string $unite) Return the first CommonExecHistoriquePrix filtered by the unite column
 * @method CommonExecHistoriquePrix findOneByQuantite(double $quantite) Return the first CommonExecHistoriquePrix filtered by the quantite column
 * @method CommonExecHistoriquePrix findOneByPrixUnitaire(double $prix_unitaire) Return the first CommonExecHistoriquePrix filtered by the prix_unitaire column
 * @method CommonExecHistoriquePrix findOneByPrixHt(double $prix_ht) Return the first CommonExecHistoriquePrix filtered by the prix_ht column
 * @method CommonExecHistoriquePrix findOneByTauxTva(double $taux_tva) Return the first CommonExecHistoriquePrix filtered by the taux_tva column
 * @method CommonExecHistoriquePrix findOneByPrixTtc(double $prix_ttc) Return the first CommonExecHistoriquePrix filtered by the prix_ttc column
 * @method CommonExecHistoriquePrix findOneByDateCrea(string $date_crea) Return the first CommonExecHistoriquePrix filtered by the date_crea column
 * @method CommonExecHistoriquePrix findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecHistoriquePrix filtered by the id_agent_crea column
 * @method CommonExecHistoriquePrix findOneByDateModif(string $date_modif) Return the first CommonExecHistoriquePrix filtered by the date_modif column
 * @method CommonExecHistoriquePrix findOneByIdAgentModif(int $id_agent_modif) Return the first CommonExecHistoriquePrix filtered by the id_agent_modif column
 *
 * @method array findById(int $id) Return CommonExecHistoriquePrix objects filtered by the id column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecHistoriquePrix objects filtered by the id_contrat column
 * @method array findByIdPrix(int $id_prix) Return CommonExecHistoriquePrix objects filtered by the id_prix column
 * @method array findByIdAvenant(int $id_avenant) Return CommonExecHistoriquePrix objects filtered by the id_avenant column
 * @method array findByNumero(string $numero) Return CommonExecHistoriquePrix objects filtered by the numero column
 * @method array findByIntitule(string $intitule) Return CommonExecHistoriquePrix objects filtered by the intitule column
 * @method array findByUnite(string $unite) Return CommonExecHistoriquePrix objects filtered by the unite column
 * @method array findByQuantite(double $quantite) Return CommonExecHistoriquePrix objects filtered by the quantite column
 * @method array findByPrixUnitaire(double $prix_unitaire) Return CommonExecHistoriquePrix objects filtered by the prix_unitaire column
 * @method array findByPrixHt(double $prix_ht) Return CommonExecHistoriquePrix objects filtered by the prix_ht column
 * @method array findByTauxTva(double $taux_tva) Return CommonExecHistoriquePrix objects filtered by the taux_tva column
 * @method array findByPrixTtc(double $prix_ttc) Return CommonExecHistoriquePrix objects filtered by the prix_ttc column
 * @method array findByDateCrea(string $date_crea) Return CommonExecHistoriquePrix objects filtered by the date_crea column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecHistoriquePrix objects filtered by the id_agent_crea column
 * @method array findByDateModif(string $date_modif) Return CommonExecHistoriquePrix objects filtered by the date_modif column
 * @method array findByIdAgentModif(int $id_agent_modif) Return CommonExecHistoriquePrix objects filtered by the id_agent_modif column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecHistoriquePrixQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecHistoriquePrixQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecHistoriquePrix', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecHistoriquePrixQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecHistoriquePrixQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecHistoriquePrixQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecHistoriquePrixQuery) {
            return $criteria;
        }
        $query = new CommonExecHistoriquePrixQuery();
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
     * @return   CommonExecHistoriquePrix|CommonExecHistoriquePrix[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecHistoriquePrixPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecHistoriquePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecHistoriquePrix A model object, or null if the key is not found
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
     * @return                 CommonExecHistoriquePrix A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_contrat`, `id_prix`, `id_avenant`, `numero`, `intitule`, `unite`, `quantite`, `prix_unitaire`, `prix_ht`, `taux_tva`, `prix_ttc`, `date_crea`, `id_agent_crea`, `date_modif`, `id_agent_modif` FROM `exec_historique_prix` WHERE `id` = :p0';
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
            $obj = new CommonExecHistoriquePrix();
            $obj->hydrate($row);
            CommonExecHistoriquePrixPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecHistoriquePrix|CommonExecHistoriquePrix[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecHistoriquePrix[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID, $id, $comparison);
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
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_CONTRAT, $idContrat, $comparison);
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
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByIdPrix($idPrix = null, $comparison = null)
    {
        if (is_array($idPrix)) {
            $useMinMax = false;
            if (isset($idPrix['min'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_PRIX, $idPrix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPrix['max'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_PRIX, $idPrix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_PRIX, $idPrix, $comparison);
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
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByIdAvenant($idAvenant = null, $comparison = null)
    {
        if (is_array($idAvenant)) {
            $useMinMax = false;
            if (isset($idAvenant['min'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AVENANT, $idAvenant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAvenant['max'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AVENANT, $idAvenant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AVENANT, $idAvenant, $comparison);
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
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::NUMERO, $numero, $comparison);
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
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::INTITULE, $intitule, $comparison);
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
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::UNITE, $unite, $comparison);
    }

    /**
     * Filter the query on the quantite column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantite(1234); // WHERE quantite = 1234
     * $query->filterByQuantite(array(12, 34)); // WHERE quantite IN (12, 34)
     * $query->filterByQuantite(array('min' => 12)); // WHERE quantite >= 12
     * $query->filterByQuantite(array('max' => 12)); // WHERE quantite <= 12
     * </code>
     *
     * @param     mixed $quantite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByQuantite($quantite = null, $comparison = null)
    {
        if (is_array($quantite)) {
            $useMinMax = false;
            if (isset($quantite['min'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::QUANTITE, $quantite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantite['max'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::QUANTITE, $quantite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::QUANTITE, $quantite, $comparison);
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
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByPrixUnitaire($prixUnitaire = null, $comparison = null)
    {
        if (is_array($prixUnitaire)) {
            $useMinMax = false;
            if (isset($prixUnitaire['min'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::PRIX_UNITAIRE, $prixUnitaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixUnitaire['max'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::PRIX_UNITAIRE, $prixUnitaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::PRIX_UNITAIRE, $prixUnitaire, $comparison);
    }

    /**
     * Filter the query on the prix_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixHt(1234); // WHERE prix_ht = 1234
     * $query->filterByPrixHt(array(12, 34)); // WHERE prix_ht IN (12, 34)
     * $query->filterByPrixHt(array('min' => 12)); // WHERE prix_ht >= 12
     * $query->filterByPrixHt(array('max' => 12)); // WHERE prix_ht <= 12
     * </code>
     *
     * @param     mixed $prixHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByPrixHt($prixHt = null, $comparison = null)
    {
        if (is_array($prixHt)) {
            $useMinMax = false;
            if (isset($prixHt['min'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::PRIX_HT, $prixHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixHt['max'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::PRIX_HT, $prixHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::PRIX_HT, $prixHt, $comparison);
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
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByTauxTva($tauxTva = null, $comparison = null)
    {
        if (is_array($tauxTva)) {
            $useMinMax = false;
            if (isset($tauxTva['min'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::TAUX_TVA, $tauxTva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tauxTva['max'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::TAUX_TVA, $tauxTva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::TAUX_TVA, $tauxTva, $comparison);
    }

    /**
     * Filter the query on the prix_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixTtc(1234); // WHERE prix_ttc = 1234
     * $query->filterByPrixTtc(array(12, 34)); // WHERE prix_ttc IN (12, 34)
     * $query->filterByPrixTtc(array('min' => 12)); // WHERE prix_ttc >= 12
     * $query->filterByPrixTtc(array('max' => 12)); // WHERE prix_ttc <= 12
     * </code>
     *
     * @param     mixed $prixTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByPrixTtc($prixTtc = null, $comparison = null)
    {
        if (is_array($prixTtc)) {
            $useMinMax = false;
            if (isset($prixTtc['min'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::PRIX_TTC, $prixTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixTtc['max'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::PRIX_TTC, $prixTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::PRIX_TTC, $prixTtc, $comparison);
    }

    /**
     * Filter the query on the date_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCrea('2011-03-14'); // WHERE date_crea = '2011-03-14'
     * $query->filterByDateCrea('now'); // WHERE date_crea = '2011-03-14'
     * $query->filterByDateCrea(array('max' => 'yesterday')); // WHERE date_crea > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCrea The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::DATE_CREA, $dateCrea, $comparison);
    }

    /**
     * Filter the query on the id_agent_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentCrea(1234); // WHERE id_agent_crea = 1234
     * $query->filterByIdAgentCrea(array(12, 34)); // WHERE id_agent_crea IN (12, 34)
     * $query->filterByIdAgentCrea(array('min' => 12)); // WHERE id_agent_crea >= 12
     * $query->filterByIdAgentCrea(array('max' => 12)); // WHERE id_agent_crea <= 12
     * </code>
     *
     * @see       filterByCommonAgentRelatedByIdAgentCrea()
     *
     * @param     mixed $idAgentCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
    }

    /**
     * Filter the query on the date_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModif('2011-03-14'); // WHERE date_modif = '2011-03-14'
     * $query->filterByDateModif('now'); // WHERE date_modif = '2011-03-14'
     * $query->filterByDateModif(array('max' => 'yesterday')); // WHERE date_modif > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModif The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::DATE_MODIF, $dateModif, $comparison);
    }

    /**
     * Filter the query on the id_agent_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentModif(1234); // WHERE id_agent_modif = 1234
     * $query->filterByIdAgentModif(array(12, 34)); // WHERE id_agent_modif IN (12, 34)
     * $query->filterByIdAgentModif(array('min' => 12)); // WHERE id_agent_modif >= 12
     * $query->filterByIdAgentModif(array('max' => 12)); // WHERE id_agent_modif <= 12
     * </code>
     *
     * @see       filterByCommonAgentRelatedByIdAgentModif()
     *
     * @param     mixed $idAgentModif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function filterByIdAgentModif($idAgentModif = null, $comparison = null)
    {
        if (is_array($idAgentModif)) {
            $useMinMax = false;
            if (isset($idAgentModif['min'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, $idAgentModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentModif['max'])) {
                $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, $idAgentModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, $idAgentModif, $comparison);
    }

    /**
     * Filter the query by a related CommonAgent object
     *
     * @param   CommonAgent|PropelObjectCollection $commonAgent The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecHistoriquePrixQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgentRelatedByIdAgentCrea($commonAgent, $comparison = null)
    {
        if ($commonAgent instanceof CommonAgent) {
            return $this
                ->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, $commonAgent->getId(), $comparison);
        } elseif ($commonAgent instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AGENT_CREA, $commonAgent->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonAgentRelatedByIdAgentCrea() only accepts arguments of type CommonAgent or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAgentRelatedByIdAgentCrea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function joinCommonAgentRelatedByIdAgentCrea($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAgentRelatedByIdAgentCrea');

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
            $this->addJoinObject($join, 'CommonAgentRelatedByIdAgentCrea');
        }

        return $this;
    }

    /**
     * Use the CommonAgentRelatedByIdAgentCrea relation CommonAgent object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAgentQuery A secondary query class using the current class as primary query
     */
    public function useCommonAgentRelatedByIdAgentCreaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonAgentRelatedByIdAgentCrea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAgentRelatedByIdAgentCrea', 'CommonAgentQuery');
    }

    /**
     * Filter the query by a related CommonAgent object
     *
     * @param   CommonAgent|PropelObjectCollection $commonAgent The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecHistoriquePrixQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgentRelatedByIdAgentModif($commonAgent, $comparison = null)
    {
        if ($commonAgent instanceof CommonAgent) {
            return $this
                ->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, $commonAgent->getId(), $comparison);
        } elseif ($commonAgent instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AGENT_MODIF, $commonAgent->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonAgentRelatedByIdAgentModif() only accepts arguments of type CommonAgent or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAgentRelatedByIdAgentModif relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function joinCommonAgentRelatedByIdAgentModif($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAgentRelatedByIdAgentModif');

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
            $this->addJoinObject($join, 'CommonAgentRelatedByIdAgentModif');
        }

        return $this;
    }

    /**
     * Use the CommonAgentRelatedByIdAgentModif relation CommonAgent object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAgentQuery A secondary query class using the current class as primary query
     */
    public function useCommonAgentRelatedByIdAgentModifQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonAgentRelatedByIdAgentModif($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAgentRelatedByIdAgentModif', 'CommonAgentQuery');
    }

    /**
     * Filter the query by a related CommonExecAvenant object
     *
     * @param   CommonExecAvenant|PropelObjectCollection $commonExecAvenant The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecHistoriquePrixQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecAvenant($commonExecAvenant, $comparison = null)
    {
        if ($commonExecAvenant instanceof CommonExecAvenant) {
            return $this
                ->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AVENANT, $commonExecAvenant->getId(), $comparison);
        } elseif ($commonExecAvenant instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecHistoriquePrixPeer::ID_AVENANT, $commonExecAvenant->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function joinCommonExecAvenant($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCommonExecAvenantQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @return                 CommonExecHistoriquePrixQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecHistoriquePrixPeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecHistoriquePrixPeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
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
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
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
     * @return                 CommonExecHistoriquePrixQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPrix($commonExecPrix, $comparison = null)
    {
        if ($commonExecPrix instanceof CommonExecPrix) {
            return $this
                ->addUsingAlias(CommonExecHistoriquePrixPeer::ID_PRIX, $commonExecPrix->getId(), $comparison);
        } elseif ($commonExecPrix instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecHistoriquePrixPeer::ID_PRIX, $commonExecPrix->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function joinCommonExecPrix($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useCommonExecPrixQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPrix($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPrix', 'CommonExecPrixQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecHistoriquePrix $commonExecHistoriquePrix Object to remove from the list of results
     *
     * @return CommonExecHistoriquePrixQuery The current query, for fluid interface
     */
    public function prune($commonExecHistoriquePrix = null)
    {
        if ($commonExecHistoriquePrix) {
            $this->addUsingAlias(CommonExecHistoriquePrixPeer::ID, $commonExecHistoriquePrix->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
