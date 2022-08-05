<?php


/**
 * Base class that represents a query for the 'exec_prix' table.
 *
 * 
 *
 * @method ExecPrixQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ExecPrixQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method ExecPrixQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method ExecPrixQuery orderByIntitule($order = Criteria::ASC) Order by the intitule column
 * @method ExecPrixQuery orderByUnite($order = Criteria::ASC) Order by the unite column
 * @method ExecPrixQuery orderByQuantite($order = Criteria::ASC) Order by the quantite column
 * @method ExecPrixQuery orderByQuantiteMin($order = Criteria::ASC) Order by the quantite_min column
 * @method ExecPrixQuery orderByQuantiteMax($order = Criteria::ASC) Order by the quantite_max column
 * @method ExecPrixQuery orderByPrixUnitaire($order = Criteria::ASC) Order by the prix_unitaire column
 * @method ExecPrixQuery orderByPrixHt($order = Criteria::ASC) Order by the prix_ht column
 * @method ExecPrixQuery orderByPrixHtMin($order = Criteria::ASC) Order by the prix_ht_min column
 * @method ExecPrixQuery orderByPrixHtMax($order = Criteria::ASC) Order by the prix_ht_max column
 * @method ExecPrixQuery orderByTauxTva($order = Criteria::ASC) Order by the taux_tva column
 * @method ExecPrixQuery orderByPrixTtc($order = Criteria::ASC) Order by the prix_ttc column
 * @method ExecPrixQuery orderByPrixTtcMin($order = Criteria::ASC) Order by the prix_ttc_min column
 * @method ExecPrixQuery orderByPrixTtcMax($order = Criteria::ASC) Order by the prix_ttc_max column
 * @method ExecPrixQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method ExecPrixQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method ExecPrixQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 * @method ExecPrixQuery orderByIdAgentModif($order = Criteria::ASC) Order by the id_agent_modif column
 * @method ExecPrixQuery orderByNumChapeau($order = Criteria::ASC) Order by the num_chapeau column
 * @method ExecPrixQuery orderByPrixUnitaireMax($order = Criteria::ASC) Order by the prix_unitaire_max column
 * @method ExecPrixQuery orderByPrestation($order = Criteria::ASC) Order by the prestation column
 *
 * @method ExecPrixQuery groupById() Group by the id column
 * @method ExecPrixQuery groupByIdContrat() Group by the id_contrat column
 * @method ExecPrixQuery groupByNumero() Group by the numero column
 * @method ExecPrixQuery groupByIntitule() Group by the intitule column
 * @method ExecPrixQuery groupByUnite() Group by the unite column
 * @method ExecPrixQuery groupByQuantite() Group by the quantite column
 * @method ExecPrixQuery groupByQuantiteMin() Group by the quantite_min column
 * @method ExecPrixQuery groupByQuantiteMax() Group by the quantite_max column
 * @method ExecPrixQuery groupByPrixUnitaire() Group by the prix_unitaire column
 * @method ExecPrixQuery groupByPrixHt() Group by the prix_ht column
 * @method ExecPrixQuery groupByPrixHtMin() Group by the prix_ht_min column
 * @method ExecPrixQuery groupByPrixHtMax() Group by the prix_ht_max column
 * @method ExecPrixQuery groupByTauxTva() Group by the taux_tva column
 * @method ExecPrixQuery groupByPrixTtc() Group by the prix_ttc column
 * @method ExecPrixQuery groupByPrixTtcMin() Group by the prix_ttc_min column
 * @method ExecPrixQuery groupByPrixTtcMax() Group by the prix_ttc_max column
 * @method ExecPrixQuery groupByDateCrea() Group by the date_crea column
 * @method ExecPrixQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method ExecPrixQuery groupByDateModif() Group by the date_modif column
 * @method ExecPrixQuery groupByIdAgentModif() Group by the id_agent_modif column
 * @method ExecPrixQuery groupByNumChapeau() Group by the num_chapeau column
 * @method ExecPrixQuery groupByPrixUnitaireMax() Group by the prix_unitaire_max column
 * @method ExecPrixQuery groupByPrestation() Group by the prestation column
 *
 * @method ExecPrixQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ExecPrixQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ExecPrixQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ExecPrixQuery leftJoinExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecContrat relation
 * @method ExecPrixQuery rightJoinExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecContrat relation
 * @method ExecPrixQuery innerJoinExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecContrat relation
 *
 * @method ExecPrixQuery leftJoinExecHistoriquePrix($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecHistoriquePrix relation
 * @method ExecPrixQuery rightJoinExecHistoriquePrix($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecHistoriquePrix relation
 * @method ExecPrixQuery innerJoinExecHistoriquePrix($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecHistoriquePrix relation
 *
 * @method ExecPrixQuery leftJoinExecPrixAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecPrixAvenant relation
 * @method ExecPrixQuery rightJoinExecPrixAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecPrixAvenant relation
 * @method ExecPrixQuery innerJoinExecPrixAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecPrixAvenant relation
 *
 * @method ExecPrixQuery leftJoinExecReceptionPrix($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecReceptionPrix relation
 * @method ExecPrixQuery rightJoinExecReceptionPrix($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecReceptionPrix relation
 * @method ExecPrixQuery innerJoinExecReceptionPrix($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecReceptionPrix relation
 *
 * @method ExecPrixQuery leftJoinExecRepartition($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecRepartition relation
 * @method ExecPrixQuery rightJoinExecRepartition($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecRepartition relation
 * @method ExecPrixQuery innerJoinExecRepartition($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecRepartition relation
 *
 * @method ExecPrix findOne(PropelPDO $con = null) Return the first ExecPrix matching the query
 * @method ExecPrix findOneOrCreate(PropelPDO $con = null) Return the first ExecPrix matching the query, or a new ExecPrix object populated from the query conditions when no match is found
 *
 * @method ExecPrix findOneByIdContrat(int $id_contrat) Return the first ExecPrix filtered by the id_contrat column
 * @method ExecPrix findOneByNumero(string $numero) Return the first ExecPrix filtered by the numero column
 * @method ExecPrix findOneByIntitule(string $intitule) Return the first ExecPrix filtered by the intitule column
 * @method ExecPrix findOneByUnite(string $unite) Return the first ExecPrix filtered by the unite column
 * @method ExecPrix findOneByQuantite(double $quantite) Return the first ExecPrix filtered by the quantite column
 * @method ExecPrix findOneByQuantiteMin(double $quantite_min) Return the first ExecPrix filtered by the quantite_min column
 * @method ExecPrix findOneByQuantiteMax(double $quantite_max) Return the first ExecPrix filtered by the quantite_max column
 * @method ExecPrix findOneByPrixUnitaire(double $prix_unitaire) Return the first ExecPrix filtered by the prix_unitaire column
 * @method ExecPrix findOneByPrixHt(double $prix_ht) Return the first ExecPrix filtered by the prix_ht column
 * @method ExecPrix findOneByPrixHtMin(double $prix_ht_min) Return the first ExecPrix filtered by the prix_ht_min column
 * @method ExecPrix findOneByPrixHtMax(double $prix_ht_max) Return the first ExecPrix filtered by the prix_ht_max column
 * @method ExecPrix findOneByTauxTva(double $taux_tva) Return the first ExecPrix filtered by the taux_tva column
 * @method ExecPrix findOneByPrixTtc(double $prix_ttc) Return the first ExecPrix filtered by the prix_ttc column
 * @method ExecPrix findOneByPrixTtcMin(double $prix_ttc_min) Return the first ExecPrix filtered by the prix_ttc_min column
 * @method ExecPrix findOneByPrixTtcMax(double $prix_ttc_max) Return the first ExecPrix filtered by the prix_ttc_max column
 * @method ExecPrix findOneByDateCrea(string $date_crea) Return the first ExecPrix filtered by the date_crea column
 * @method ExecPrix findOneByIdAgentCrea(int $id_agent_crea) Return the first ExecPrix filtered by the id_agent_crea column
 * @method ExecPrix findOneByDateModif(string $date_modif) Return the first ExecPrix filtered by the date_modif column
 * @method ExecPrix findOneByIdAgentModif(int $id_agent_modif) Return the first ExecPrix filtered by the id_agent_modif column
 * @method ExecPrix findOneByNumChapeau(int $num_chapeau) Return the first ExecPrix filtered by the num_chapeau column
 * @method ExecPrix findOneByPrixUnitaireMax(double $prix_unitaire_max) Return the first ExecPrix filtered by the prix_unitaire_max column
 * @method ExecPrix findOneByPrestation(string $prestation) Return the first ExecPrix filtered by the prestation column
 *
 * @method array findById(int $id) Return ExecPrix objects filtered by the id column
 * @method array findByIdContrat(int $id_contrat) Return ExecPrix objects filtered by the id_contrat column
 * @method array findByNumero(string $numero) Return ExecPrix objects filtered by the numero column
 * @method array findByIntitule(string $intitule) Return ExecPrix objects filtered by the intitule column
 * @method array findByUnite(string $unite) Return ExecPrix objects filtered by the unite column
 * @method array findByQuantite(double $quantite) Return ExecPrix objects filtered by the quantite column
 * @method array findByQuantiteMin(double $quantite_min) Return ExecPrix objects filtered by the quantite_min column
 * @method array findByQuantiteMax(double $quantite_max) Return ExecPrix objects filtered by the quantite_max column
 * @method array findByPrixUnitaire(double $prix_unitaire) Return ExecPrix objects filtered by the prix_unitaire column
 * @method array findByPrixHt(double $prix_ht) Return ExecPrix objects filtered by the prix_ht column
 * @method array findByPrixHtMin(double $prix_ht_min) Return ExecPrix objects filtered by the prix_ht_min column
 * @method array findByPrixHtMax(double $prix_ht_max) Return ExecPrix objects filtered by the prix_ht_max column
 * @method array findByTauxTva(double $taux_tva) Return ExecPrix objects filtered by the taux_tva column
 * @method array findByPrixTtc(double $prix_ttc) Return ExecPrix objects filtered by the prix_ttc column
 * @method array findByPrixTtcMin(double $prix_ttc_min) Return ExecPrix objects filtered by the prix_ttc_min column
 * @method array findByPrixTtcMax(double $prix_ttc_max) Return ExecPrix objects filtered by the prix_ttc_max column
 * @method array findByDateCrea(string $date_crea) Return ExecPrix objects filtered by the date_crea column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return ExecPrix objects filtered by the id_agent_crea column
 * @method array findByDateModif(string $date_modif) Return ExecPrix objects filtered by the date_modif column
 * @method array findByIdAgentModif(int $id_agent_modif) Return ExecPrix objects filtered by the id_agent_modif column
 * @method array findByNumChapeau(int $num_chapeau) Return ExecPrix objects filtered by the num_chapeau column
 * @method array findByPrixUnitaireMax(double $prix_unitaire_max) Return ExecPrix objects filtered by the prix_unitaire_max column
 * @method array findByPrestation(string $prestation) Return ExecPrix objects filtered by the prestation column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseExecPrixQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseExecPrixQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'ExecPrix', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ExecPrixQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ExecPrixQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ExecPrixQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ExecPrixQuery) {
            return $criteria;
        }
        $query = new ExecPrixQuery();
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
     * @return   ExecPrix|ExecPrix[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExecPrixPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ExecPrix A model object, or null if the key is not found
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
     * @return                 ExecPrix A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_contrat`, `numero`, `intitule`, `unite`, `quantite`, `quantite_min`, `quantite_max`, `prix_unitaire`, `prix_ht`, `prix_ht_min`, `prix_ht_max`, `taux_tva`, `prix_ttc`, `prix_ttc_min`, `prix_ttc_max`, `date_crea`, `id_agent_crea`, `date_modif`, `id_agent_modif`, `num_chapeau`, `prix_unitaire_max`, `prestation` FROM `exec_prix` WHERE `id` = :p0';
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
            $obj = new ExecPrix();
            $obj->hydrate($row);
            ExecPrixPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ExecPrix|ExecPrix[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ExecPrix[]|mixed the list of results, formatted by the current formatter
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ExecPrixPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ExecPrixPeer::ID, $keys, Criteria::IN);
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ExecPrixPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ExecPrixPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::ID, $id, $comparison);
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
     * @see       filterByExecContrat()
     *
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(ExecPrixPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(ExecPrixPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::ID_CONTRAT, $idContrat, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecPrixPeer::NUMERO, $numero, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecPrixPeer::INTITULE, $intitule, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecPrixPeer::UNITE, $unite, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByQuantite($quantite = null, $comparison = null)
    {
        if (is_array($quantite)) {
            $useMinMax = false;
            if (isset($quantite['min'])) {
                $this->addUsingAlias(ExecPrixPeer::QUANTITE, $quantite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantite['max'])) {
                $this->addUsingAlias(ExecPrixPeer::QUANTITE, $quantite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::QUANTITE, $quantite, $comparison);
    }

    /**
     * Filter the query on the quantite_min column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantiteMin(1234); // WHERE quantite_min = 1234
     * $query->filterByQuantiteMin(array(12, 34)); // WHERE quantite_min IN (12, 34)
     * $query->filterByQuantiteMin(array('min' => 12)); // WHERE quantite_min >= 12
     * $query->filterByQuantiteMin(array('max' => 12)); // WHERE quantite_min <= 12
     * </code>
     *
     * @param     mixed $quantiteMin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByQuantiteMin($quantiteMin = null, $comparison = null)
    {
        if (is_array($quantiteMin)) {
            $useMinMax = false;
            if (isset($quantiteMin['min'])) {
                $this->addUsingAlias(ExecPrixPeer::QUANTITE_MIN, $quantiteMin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantiteMin['max'])) {
                $this->addUsingAlias(ExecPrixPeer::QUANTITE_MIN, $quantiteMin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::QUANTITE_MIN, $quantiteMin, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByQuantiteMax($quantiteMax = null, $comparison = null)
    {
        if (is_array($quantiteMax)) {
            $useMinMax = false;
            if (isset($quantiteMax['min'])) {
                $this->addUsingAlias(ExecPrixPeer::QUANTITE_MAX, $quantiteMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantiteMax['max'])) {
                $this->addUsingAlias(ExecPrixPeer::QUANTITE_MAX, $quantiteMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::QUANTITE_MAX, $quantiteMax, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByPrixUnitaire($prixUnitaire = null, $comparison = null)
    {
        if (is_array($prixUnitaire)) {
            $useMinMax = false;
            if (isset($prixUnitaire['min'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_UNITAIRE, $prixUnitaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixUnitaire['max'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_UNITAIRE, $prixUnitaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::PRIX_UNITAIRE, $prixUnitaire, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByPrixHt($prixHt = null, $comparison = null)
    {
        if (is_array($prixHt)) {
            $useMinMax = false;
            if (isset($prixHt['min'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_HT, $prixHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixHt['max'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_HT, $prixHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::PRIX_HT, $prixHt, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByPrixHtMin($prixHtMin = null, $comparison = null)
    {
        if (is_array($prixHtMin)) {
            $useMinMax = false;
            if (isset($prixHtMin['min'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_HT_MIN, $prixHtMin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixHtMin['max'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_HT_MIN, $prixHtMin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::PRIX_HT_MIN, $prixHtMin, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByPrixHtMax($prixHtMax = null, $comparison = null)
    {
        if (is_array($prixHtMax)) {
            $useMinMax = false;
            if (isset($prixHtMax['min'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_HT_MAX, $prixHtMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixHtMax['max'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_HT_MAX, $prixHtMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::PRIX_HT_MAX, $prixHtMax, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByTauxTva($tauxTva = null, $comparison = null)
    {
        if (is_array($tauxTva)) {
            $useMinMax = false;
            if (isset($tauxTva['min'])) {
                $this->addUsingAlias(ExecPrixPeer::TAUX_TVA, $tauxTva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tauxTva['max'])) {
                $this->addUsingAlias(ExecPrixPeer::TAUX_TVA, $tauxTva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::TAUX_TVA, $tauxTva, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByPrixTtc($prixTtc = null, $comparison = null)
    {
        if (is_array($prixTtc)) {
            $useMinMax = false;
            if (isset($prixTtc['min'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_TTC, $prixTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixTtc['max'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_TTC, $prixTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::PRIX_TTC, $prixTtc, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByPrixTtcMin($prixTtcMin = null, $comparison = null)
    {
        if (is_array($prixTtcMin)) {
            $useMinMax = false;
            if (isset($prixTtcMin['min'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_TTC_MIN, $prixTtcMin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixTtcMin['max'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_TTC_MIN, $prixTtcMin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::PRIX_TTC_MIN, $prixTtcMin, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByPrixTtcMax($prixTtcMax = null, $comparison = null)
    {
        if (is_array($prixTtcMax)) {
            $useMinMax = false;
            if (isset($prixTtcMax['min'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_TTC_MAX, $prixTtcMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixTtcMax['max'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_TTC_MAX, $prixTtcMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::PRIX_TTC_MAX, $prixTtcMax, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(ExecPrixPeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(ExecPrixPeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::DATE_CREA, $dateCrea, $comparison);
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
     * @param     mixed $idAgentCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(ExecPrixPeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(ExecPrixPeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
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
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(ExecPrixPeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(ExecPrixPeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::DATE_MODIF, $dateModif, $comparison);
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
     * @param     mixed $idAgentModif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByIdAgentModif($idAgentModif = null, $comparison = null)
    {
        if (is_array($idAgentModif)) {
            $useMinMax = false;
            if (isset($idAgentModif['min'])) {
                $this->addUsingAlias(ExecPrixPeer::ID_AGENT_MODIF, $idAgentModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentModif['max'])) {
                $this->addUsingAlias(ExecPrixPeer::ID_AGENT_MODIF, $idAgentModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::ID_AGENT_MODIF, $idAgentModif, $comparison);
    }

    /**
     * Filter the query on the num_chapeau column
     *
     * Example usage:
     * <code>
     * $query->filterByNumChapeau(1234); // WHERE num_chapeau = 1234
     * $query->filterByNumChapeau(array(12, 34)); // WHERE num_chapeau IN (12, 34)
     * $query->filterByNumChapeau(array('min' => 12)); // WHERE num_chapeau >= 12
     * $query->filterByNumChapeau(array('max' => 12)); // WHERE num_chapeau <= 12
     * </code>
     *
     * @param     mixed $numChapeau The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByNumChapeau($numChapeau = null, $comparison = null)
    {
        if (is_array($numChapeau)) {
            $useMinMax = false;
            if (isset($numChapeau['min'])) {
                $this->addUsingAlias(ExecPrixPeer::NUM_CHAPEAU, $numChapeau['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numChapeau['max'])) {
                $this->addUsingAlias(ExecPrixPeer::NUM_CHAPEAU, $numChapeau['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::NUM_CHAPEAU, $numChapeau, $comparison);
    }

    /**
     * Filter the query on the prix_unitaire_max column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixUnitaireMax(1234); // WHERE prix_unitaire_max = 1234
     * $query->filterByPrixUnitaireMax(array(12, 34)); // WHERE prix_unitaire_max IN (12, 34)
     * $query->filterByPrixUnitaireMax(array('min' => 12)); // WHERE prix_unitaire_max >= 12
     * $query->filterByPrixUnitaireMax(array('max' => 12)); // WHERE prix_unitaire_max <= 12
     * </code>
     *
     * @param     mixed $prixUnitaireMax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByPrixUnitaireMax($prixUnitaireMax = null, $comparison = null)
    {
        if (is_array($prixUnitaireMax)) {
            $useMinMax = false;
            if (isset($prixUnitaireMax['min'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_UNITAIRE_MAX, $prixUnitaireMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixUnitaireMax['max'])) {
                $this->addUsingAlias(ExecPrixPeer::PRIX_UNITAIRE_MAX, $prixUnitaireMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::PRIX_UNITAIRE_MAX, $prixUnitaireMax, $comparison);
    }

    /**
     * Filter the query on the prestation column
     *
     * Example usage:
     * <code>
     * $query->filterByPrestation('fooValue');   // WHERE prestation = 'fooValue'
     * $query->filterByPrestation('%fooValue%'); // WHERE prestation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prestation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function filterByPrestation($prestation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prestation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prestation)) {
                $prestation = str_replace('*', '%', $prestation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExecPrixPeer::PRESTATION, $prestation, $comparison);
    }

    /**
     * Filter the query by a related ExecContrat object
     *
     * @param   ExecContrat|PropelObjectCollection $ExecContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecPrixQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecContrat($ExecContrat, $comparison = null)
    {
        if ($ExecContrat instanceof ExecContrat) {
            return $this
                ->addUsingAlias(ExecPrixPeer::ID_CONTRAT, $ExecContrat->getIdContrat(), $comparison);
        } elseif ($ExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExecPrixPeer::ID_CONTRAT, $ExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
        } else {
            throw new PropelException('filterByExecContrat() only accepts arguments of type ExecContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function joinExecContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecContrat');

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
            $this->addJoinObject($join, 'ExecContrat');
        }

        return $this;
    }

    /**
     * Use the ExecContrat relation ExecContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecContratQuery A secondary query class using the current class as primary query
     */
    public function useExecContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecContrat', 'ExecContratQuery');
    }

    /**
     * Filter the query by a related ExecHistoriquePrix object
     *
     * @param   ExecHistoriquePrix|PropelObjectCollection $ExecHistoriquePrix  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecPrixQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecHistoriquePrix($ExecHistoriquePrix, $comparison = null)
    {
        if ($ExecHistoriquePrix instanceof ExecHistoriquePrix) {
            return $this
                ->addUsingAlias(ExecPrixPeer::ID, $ExecHistoriquePrix->getIdPrix(), $comparison);
        } elseif ($ExecHistoriquePrix instanceof PropelObjectCollection) {
            return $this
                ->useExecHistoriquePrixQuery()
                ->filterByPrimaryKeys($ExecHistoriquePrix->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecHistoriquePrix() only accepts arguments of type ExecHistoriquePrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecHistoriquePrix relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function joinExecHistoriquePrix($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecHistoriquePrix');

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
            $this->addJoinObject($join, 'ExecHistoriquePrix');
        }

        return $this;
    }

    /**
     * Use the ExecHistoriquePrix relation ExecHistoriquePrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecHistoriquePrixQuery A secondary query class using the current class as primary query
     */
    public function useExecHistoriquePrixQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecHistoriquePrix($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecHistoriquePrix', 'ExecHistoriquePrixQuery');
    }

    /**
     * Filter the query by a related ExecPrixAvenant object
     *
     * @param   ExecPrixAvenant|PropelObjectCollection $ExecPrixAvenant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecPrixQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecPrixAvenant($ExecPrixAvenant, $comparison = null)
    {
        if ($ExecPrixAvenant instanceof ExecPrixAvenant) {
            return $this
                ->addUsingAlias(ExecPrixPeer::ID, $ExecPrixAvenant->getIdPrix(), $comparison);
        } elseif ($ExecPrixAvenant instanceof PropelObjectCollection) {
            return $this
                ->useExecPrixAvenantQuery()
                ->filterByPrimaryKeys($ExecPrixAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecPrixAvenant() only accepts arguments of type ExecPrixAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecPrixAvenant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function joinExecPrixAvenant($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecPrixAvenant');

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
            $this->addJoinObject($join, 'ExecPrixAvenant');
        }

        return $this;
    }

    /**
     * Use the ExecPrixAvenant relation ExecPrixAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecPrixAvenantQuery A secondary query class using the current class as primary query
     */
    public function useExecPrixAvenantQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinExecPrixAvenant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecPrixAvenant', 'ExecPrixAvenantQuery');
    }

    /**
     * Filter the query by a related ExecReceptionPrix object
     *
     * @param   ExecReceptionPrix|PropelObjectCollection $ExecReceptionPrix  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecPrixQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecReceptionPrix($ExecReceptionPrix, $comparison = null)
    {
        if ($ExecReceptionPrix instanceof ExecReceptionPrix) {
            return $this
                ->addUsingAlias(ExecPrixPeer::ID, $ExecReceptionPrix->getIdPrix(), $comparison);
        } elseif ($ExecReceptionPrix instanceof PropelObjectCollection) {
            return $this
                ->useExecReceptionPrixQuery()
                ->filterByPrimaryKeys($ExecReceptionPrix->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecReceptionPrix() only accepts arguments of type ExecReceptionPrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecReceptionPrix relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function joinExecReceptionPrix($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecReceptionPrix');

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
            $this->addJoinObject($join, 'ExecReceptionPrix');
        }

        return $this;
    }

    /**
     * Use the ExecReceptionPrix relation ExecReceptionPrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecReceptionPrixQuery A secondary query class using the current class as primary query
     */
    public function useExecReceptionPrixQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecReceptionPrix($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecReceptionPrix', 'ExecReceptionPrixQuery');
    }

    /**
     * Filter the query by a related ExecRepartition object
     *
     * @param   ExecRepartition|PropelObjectCollection $ExecRepartition  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecPrixQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecRepartition($ExecRepartition, $comparison = null)
    {
        if ($ExecRepartition instanceof ExecRepartition) {
            return $this
                ->addUsingAlias(ExecPrixPeer::ID, $ExecRepartition->getIdPrix(), $comparison);
        } elseif ($ExecRepartition instanceof PropelObjectCollection) {
            return $this
                ->useExecRepartitionQuery()
                ->filterByPrimaryKeys($ExecRepartition->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecRepartition() only accepts arguments of type ExecRepartition or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecRepartition relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function joinExecRepartition($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecRepartition');

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
            $this->addJoinObject($join, 'ExecRepartition');
        }

        return $this;
    }

    /**
     * Use the ExecRepartition relation ExecRepartition object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecRepartitionQuery A secondary query class using the current class as primary query
     */
    public function useExecRepartitionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecRepartition($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecRepartition', 'ExecRepartitionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ExecPrix $ExecPrix Object to remove from the list of results
     *
     * @return ExecPrixQuery The current query, for fluid interface
     */
    public function prune($ExecPrix = null)
    {
        if ($ExecPrix) {
            $this->addUsingAlias(ExecPrixPeer::ID, $ExecPrix->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
