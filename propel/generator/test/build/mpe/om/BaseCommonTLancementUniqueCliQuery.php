<?php


/**
 * Base class that represents a query for the 't_lancement_unique_cli' table.
 *
 * 
 *
 * @method CommonTLancementUniqueCliQuery orderByIdLancementUniqueCli($order = Criteria::ASC) Order by the id_lancement_unique_cli column
 * @method CommonTLancementUniqueCliQuery orderByNomCli($order = Criteria::ASC) Order by the nom_cli column
 * @method CommonTLancementUniqueCliQuery orderByEnCours($order = Criteria::ASC) Order by the en_cours column
 * @method CommonTLancementUniqueCliQuery orderByDateLancement($order = Criteria::ASC) Order by the date_lancement column
 * @method CommonTLancementUniqueCliQuery orderByDateFin($order = Criteria::ASC) Order by the date_fin column
 *
 * @method CommonTLancementUniqueCliQuery groupByIdLancementUniqueCli() Group by the id_lancement_unique_cli column
 * @method CommonTLancementUniqueCliQuery groupByNomCli() Group by the nom_cli column
 * @method CommonTLancementUniqueCliQuery groupByEnCours() Group by the en_cours column
 * @method CommonTLancementUniqueCliQuery groupByDateLancement() Group by the date_lancement column
 * @method CommonTLancementUniqueCliQuery groupByDateFin() Group by the date_fin column
 *
 * @method CommonTLancementUniqueCliQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTLancementUniqueCliQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTLancementUniqueCliQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTLancementUniqueCli findOne(PropelPDO $con = null) Return the first CommonTLancementUniqueCli matching the query
 * @method CommonTLancementUniqueCli findOneOrCreate(PropelPDO $con = null) Return the first CommonTLancementUniqueCli matching the query, or a new CommonTLancementUniqueCli object populated from the query conditions when no match is found
 *
 * @method CommonTLancementUniqueCli findOneByNomCli(string $nom_cli) Return the first CommonTLancementUniqueCli filtered by the nom_cli column
 * @method CommonTLancementUniqueCli findOneByEnCours(string $en_cours) Return the first CommonTLancementUniqueCli filtered by the en_cours column
 * @method CommonTLancementUniqueCli findOneByDateLancement(string $date_lancement) Return the first CommonTLancementUniqueCli filtered by the date_lancement column
 * @method CommonTLancementUniqueCli findOneByDateFin(string $date_fin) Return the first CommonTLancementUniqueCli filtered by the date_fin column
 *
 * @method array findByIdLancementUniqueCli(int $id_lancement_unique_cli) Return CommonTLancementUniqueCli objects filtered by the id_lancement_unique_cli column
 * @method array findByNomCli(string $nom_cli) Return CommonTLancementUniqueCli objects filtered by the nom_cli column
 * @method array findByEnCours(string $en_cours) Return CommonTLancementUniqueCli objects filtered by the en_cours column
 * @method array findByDateLancement(string $date_lancement) Return CommonTLancementUniqueCli objects filtered by the date_lancement column
 * @method array findByDateFin(string $date_fin) Return CommonTLancementUniqueCli objects filtered by the date_fin column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTLancementUniqueCliQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTLancementUniqueCliQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTLancementUniqueCli', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTLancementUniqueCliQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTLancementUniqueCliQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTLancementUniqueCliQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTLancementUniqueCliQuery) {
            return $criteria;
        }
        $query = new CommonTLancementUniqueCliQuery();
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
     * @return   CommonTLancementUniqueCli|CommonTLancementUniqueCli[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTLancementUniqueCliPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTLancementUniqueCliPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTLancementUniqueCli A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdLancementUniqueCli($key, $con = null)
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
     * @return                 CommonTLancementUniqueCli A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_lancement_unique_cli`, `nom_cli`, `en_cours`, `date_lancement`, `date_fin` FROM `t_lancement_unique_cli` WHERE `id_lancement_unique_cli` = :p0';
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
            $obj = new CommonTLancementUniqueCli();
            $obj->hydrate($row);
            CommonTLancementUniqueCliPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTLancementUniqueCli|CommonTLancementUniqueCli[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTLancementUniqueCli[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTLancementUniqueCliQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTLancementUniqueCliPeer::ID_LANCEMENT_UNIQUE_CLI, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTLancementUniqueCliQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTLancementUniqueCliPeer::ID_LANCEMENT_UNIQUE_CLI, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_lancement_unique_cli column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLancementUniqueCli(1234); // WHERE id_lancement_unique_cli = 1234
     * $query->filterByIdLancementUniqueCli(array(12, 34)); // WHERE id_lancement_unique_cli IN (12, 34)
     * $query->filterByIdLancementUniqueCli(array('min' => 12)); // WHERE id_lancement_unique_cli >= 12
     * $query->filterByIdLancementUniqueCli(array('max' => 12)); // WHERE id_lancement_unique_cli <= 12
     * </code>
     *
     * @param     mixed $idLancementUniqueCli The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTLancementUniqueCliQuery The current query, for fluid interface
     */
    public function filterByIdLancementUniqueCli($idLancementUniqueCli = null, $comparison = null)
    {
        if (is_array($idLancementUniqueCli)) {
            $useMinMax = false;
            if (isset($idLancementUniqueCli['min'])) {
                $this->addUsingAlias(CommonTLancementUniqueCliPeer::ID_LANCEMENT_UNIQUE_CLI, $idLancementUniqueCli['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLancementUniqueCli['max'])) {
                $this->addUsingAlias(CommonTLancementUniqueCliPeer::ID_LANCEMENT_UNIQUE_CLI, $idLancementUniqueCli['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTLancementUniqueCliPeer::ID_LANCEMENT_UNIQUE_CLI, $idLancementUniqueCli, $comparison);
    }

    /**
     * Filter the query on the nom_cli column
     *
     * Example usage:
     * <code>
     * $query->filterByNomCli('fooValue');   // WHERE nom_cli = 'fooValue'
     * $query->filterByNomCli('%fooValue%'); // WHERE nom_cli LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomCli The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTLancementUniqueCliQuery The current query, for fluid interface
     */
    public function filterByNomCli($nomCli = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomCli)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomCli)) {
                $nomCli = str_replace('*', '%', $nomCli);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTLancementUniqueCliPeer::NOM_CLI, $nomCli, $comparison);
    }

    /**
     * Filter the query on the en_cours column
     *
     * Example usage:
     * <code>
     * $query->filterByEnCours('fooValue');   // WHERE en_cours = 'fooValue'
     * $query->filterByEnCours('%fooValue%'); // WHERE en_cours LIKE '%fooValue%'
     * </code>
     *
     * @param     string $enCours The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTLancementUniqueCliQuery The current query, for fluid interface
     */
    public function filterByEnCours($enCours = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($enCours)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $enCours)) {
                $enCours = str_replace('*', '%', $enCours);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTLancementUniqueCliPeer::EN_COURS, $enCours, $comparison);
    }

    /**
     * Filter the query on the date_lancement column
     *
     * Example usage:
     * <code>
     * $query->filterByDateLancement('fooValue');   // WHERE date_lancement = 'fooValue'
     * $query->filterByDateLancement('%fooValue%'); // WHERE date_lancement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateLancement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTLancementUniqueCliQuery The current query, for fluid interface
     */
    public function filterByDateLancement($dateLancement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateLancement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateLancement)) {
                $dateLancement = str_replace('*', '%', $dateLancement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTLancementUniqueCliPeer::DATE_LANCEMENT, $dateLancement, $comparison);
    }

    /**
     * Filter the query on the date_fin column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFin('fooValue');   // WHERE date_fin = 'fooValue'
     * $query->filterByDateFin('%fooValue%'); // WHERE date_fin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTLancementUniqueCliQuery The current query, for fluid interface
     */
    public function filterByDateFin($dateFin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFin)) {
                $dateFin = str_replace('*', '%', $dateFin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTLancementUniqueCliPeer::DATE_FIN, $dateFin, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTLancementUniqueCli $commonTLancementUniqueCli Object to remove from the list of results
     *
     * @return CommonTLancementUniqueCliQuery The current query, for fluid interface
     */
    public function prune($commonTLancementUniqueCli = null)
    {
        if ($commonTLancementUniqueCli) {
            $this->addUsingAlias(CommonTLancementUniqueCliPeer::ID_LANCEMENT_UNIQUE_CLI, $commonTLancementUniqueCli->getIdLancementUniqueCli(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
