<?php


/**
 * Base class that represents a query for the 'blocFichierEnveloppe' table.
 *
 * 
 *
 * @method CommonBlocFichierEnveloppeQuery orderByIdBlocFichier($order = Criteria::ASC) Order by the id_bloc_fichier column
 * @method CommonBlocFichierEnveloppeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonBlocFichierEnveloppeQuery orderByIdFichier($order = Criteria::ASC) Order by the id_fichier column
 * @method CommonBlocFichierEnveloppeQuery orderByNumeroOrdreBloc($order = Criteria::ASC) Order by the numero_ordre_bloc column
 * @method CommonBlocFichierEnveloppeQuery orderByIdBlobChiffre($order = Criteria::ASC) Order by the id_blob_chiffre column
 * @method CommonBlocFichierEnveloppeQuery orderByIdBlobDechiffre($order = Criteria::ASC) Order by the id_blob_dechiffre column
 *
 * @method CommonBlocFichierEnveloppeQuery groupByIdBlocFichier() Group by the id_bloc_fichier column
 * @method CommonBlocFichierEnveloppeQuery groupByOrganisme() Group by the organisme column
 * @method CommonBlocFichierEnveloppeQuery groupByIdFichier() Group by the id_fichier column
 * @method CommonBlocFichierEnveloppeQuery groupByNumeroOrdreBloc() Group by the numero_ordre_bloc column
 * @method CommonBlocFichierEnveloppeQuery groupByIdBlobChiffre() Group by the id_blob_chiffre column
 * @method CommonBlocFichierEnveloppeQuery groupByIdBlobDechiffre() Group by the id_blob_dechiffre column
 *
 * @method CommonBlocFichierEnveloppeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonBlocFichierEnveloppeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonBlocFichierEnveloppeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonBlocFichierEnveloppe findOne(PropelPDO $con = null) Return the first CommonBlocFichierEnveloppe matching the query
 * @method CommonBlocFichierEnveloppe findOneOrCreate(PropelPDO $con = null) Return the first CommonBlocFichierEnveloppe matching the query, or a new CommonBlocFichierEnveloppe object populated from the query conditions when no match is found
 *
 * @method CommonBlocFichierEnveloppe findOneByIdBlocFichier(int $id_bloc_fichier) Return the first CommonBlocFichierEnveloppe filtered by the id_bloc_fichier column
 * @method CommonBlocFichierEnveloppe findOneByOrganisme(string $organisme) Return the first CommonBlocFichierEnveloppe filtered by the organisme column
 * @method CommonBlocFichierEnveloppe findOneByIdFichier(int $id_fichier) Return the first CommonBlocFichierEnveloppe filtered by the id_fichier column
 * @method CommonBlocFichierEnveloppe findOneByNumeroOrdreBloc(int $numero_ordre_bloc) Return the first CommonBlocFichierEnveloppe filtered by the numero_ordre_bloc column
 * @method CommonBlocFichierEnveloppe findOneByIdBlobChiffre(int $id_blob_chiffre) Return the first CommonBlocFichierEnveloppe filtered by the id_blob_chiffre column
 * @method CommonBlocFichierEnveloppe findOneByIdBlobDechiffre(int $id_blob_dechiffre) Return the first CommonBlocFichierEnveloppe filtered by the id_blob_dechiffre column
 *
 * @method array findByIdBlocFichier(int $id_bloc_fichier) Return CommonBlocFichierEnveloppe objects filtered by the id_bloc_fichier column
 * @method array findByOrganisme(string $organisme) Return CommonBlocFichierEnveloppe objects filtered by the organisme column
 * @method array findByIdFichier(int $id_fichier) Return CommonBlocFichierEnveloppe objects filtered by the id_fichier column
 * @method array findByNumeroOrdreBloc(int $numero_ordre_bloc) Return CommonBlocFichierEnveloppe objects filtered by the numero_ordre_bloc column
 * @method array findByIdBlobChiffre(int $id_blob_chiffre) Return CommonBlocFichierEnveloppe objects filtered by the id_blob_chiffre column
 * @method array findByIdBlobDechiffre(int $id_blob_dechiffre) Return CommonBlocFichierEnveloppe objects filtered by the id_blob_dechiffre column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonBlocFichierEnveloppeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonBlocFichierEnveloppeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonBlocFichierEnveloppe', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonBlocFichierEnveloppeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonBlocFichierEnveloppeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonBlocFichierEnveloppeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonBlocFichierEnveloppeQuery) {
            return $criteria;
        }
        $query = new CommonBlocFichierEnveloppeQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id_bloc_fichier, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonBlocFichierEnveloppe|CommonBlocFichierEnveloppe[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonBlocFichierEnveloppePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonBlocFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonBlocFichierEnveloppe A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_bloc_fichier`, `organisme`, `id_fichier`, `numero_ordre_bloc`, `id_blob_chiffre`, `id_blob_dechiffre` FROM `blocFichierEnveloppe` WHERE `id_bloc_fichier` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonBlocFichierEnveloppe();
            $obj->hydrate($row);
            CommonBlocFichierEnveloppePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonBlocFichierEnveloppe|CommonBlocFichierEnveloppe[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonBlocFichierEnveloppe[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonBlocFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonBlocFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonBlocFichierEnveloppePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_bloc_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlocFichier(1234); // WHERE id_bloc_fichier = 1234
     * $query->filterByIdBlocFichier(array(12, 34)); // WHERE id_bloc_fichier IN (12, 34)
     * $query->filterByIdBlocFichier(array('min' => 12)); // WHERE id_bloc_fichier >= 12
     * $query->filterByIdBlocFichier(array('max' => 12)); // WHERE id_bloc_fichier <= 12
     * </code>
     *
     * @param     mixed $idBlocFichier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlocFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdBlocFichier($idBlocFichier = null, $comparison = null)
    {
        if (is_array($idBlocFichier)) {
            $useMinMax = false;
            if (isset($idBlocFichier['min'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER, $idBlocFichier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlocFichier['max'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER, $idBlocFichier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER, $idBlocFichier, $comparison);
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
     * @return CommonBlocFichierEnveloppeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFichier(1234); // WHERE id_fichier = 1234
     * $query->filterByIdFichier(array(12, 34)); // WHERE id_fichier IN (12, 34)
     * $query->filterByIdFichier(array('min' => 12)); // WHERE id_fichier >= 12
     * $query->filterByIdFichier(array('max' => 12)); // WHERE id_fichier <= 12
     * </code>
     *
     * @param     mixed $idFichier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlocFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdFichier($idFichier = null, $comparison = null)
    {
        if (is_array($idFichier)) {
            $useMinMax = false;
            if (isset($idFichier['min'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ID_FICHIER, $idFichier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFichier['max'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ID_FICHIER, $idFichier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ID_FICHIER, $idFichier, $comparison);
    }

    /**
     * Filter the query on the numero_ordre_bloc column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroOrdreBloc(1234); // WHERE numero_ordre_bloc = 1234
     * $query->filterByNumeroOrdreBloc(array(12, 34)); // WHERE numero_ordre_bloc IN (12, 34)
     * $query->filterByNumeroOrdreBloc(array('min' => 12)); // WHERE numero_ordre_bloc >= 12
     * $query->filterByNumeroOrdreBloc(array('max' => 12)); // WHERE numero_ordre_bloc <= 12
     * </code>
     *
     * @param     mixed $numeroOrdreBloc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlocFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByNumeroOrdreBloc($numeroOrdreBloc = null, $comparison = null)
    {
        if (is_array($numeroOrdreBloc)) {
            $useMinMax = false;
            if (isset($numeroOrdreBloc['min'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppePeer::NUMERO_ORDRE_BLOC, $numeroOrdreBloc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroOrdreBloc['max'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppePeer::NUMERO_ORDRE_BLOC, $numeroOrdreBloc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlocFichierEnveloppePeer::NUMERO_ORDRE_BLOC, $numeroOrdreBloc, $comparison);
    }

    /**
     * Filter the query on the id_blob_chiffre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobChiffre(1234); // WHERE id_blob_chiffre = 1234
     * $query->filterByIdBlobChiffre(array(12, 34)); // WHERE id_blob_chiffre IN (12, 34)
     * $query->filterByIdBlobChiffre(array('min' => 12)); // WHERE id_blob_chiffre >= 12
     * $query->filterByIdBlobChiffre(array('max' => 12)); // WHERE id_blob_chiffre <= 12
     * </code>
     *
     * @param     mixed $idBlobChiffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlocFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdBlobChiffre($idBlobChiffre = null, $comparison = null)
    {
        if (is_array($idBlobChiffre)) {
            $useMinMax = false;
            if (isset($idBlobChiffre['min'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ID_BLOB_CHIFFRE, $idBlobChiffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobChiffre['max'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ID_BLOB_CHIFFRE, $idBlobChiffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ID_BLOB_CHIFFRE, $idBlobChiffre, $comparison);
    }

    /**
     * Filter the query on the id_blob_dechiffre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobDechiffre(1234); // WHERE id_blob_dechiffre = 1234
     * $query->filterByIdBlobDechiffre(array(12, 34)); // WHERE id_blob_dechiffre IN (12, 34)
     * $query->filterByIdBlobDechiffre(array('min' => 12)); // WHERE id_blob_dechiffre >= 12
     * $query->filterByIdBlobDechiffre(array('max' => 12)); // WHERE id_blob_dechiffre <= 12
     * </code>
     *
     * @param     mixed $idBlobDechiffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlocFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdBlobDechiffre($idBlobDechiffre = null, $comparison = null)
    {
        if (is_array($idBlobDechiffre)) {
            $useMinMax = false;
            if (isset($idBlobDechiffre['min'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ID_BLOB_DECHIFFRE, $idBlobDechiffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobDechiffre['max'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ID_BLOB_DECHIFFRE, $idBlobDechiffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlocFichierEnveloppePeer::ID_BLOB_DECHIFFRE, $idBlobDechiffre, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonBlocFichierEnveloppe $commonBlocFichierEnveloppe Object to remove from the list of results
     *
     * @return CommonBlocFichierEnveloppeQuery The current query, for fluid interface
     */
    public function prune($commonBlocFichierEnveloppe = null)
    {
        if ($commonBlocFichierEnveloppe) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER), $commonBlocFichierEnveloppe->getIdBlocFichier(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonBlocFichierEnveloppePeer::ORGANISME), $commonBlocFichierEnveloppe->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
