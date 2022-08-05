<?php


/**
 * Base class that represents a query for the 'Helios_cosignature' table.
 *
 * 
 *
 * @method CommonHeliosCosignatureQuery orderByIdFichier($order = Criteria::ASC) Order by the id_fichier column
 * @method CommonHeliosCosignatureQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonHeliosCosignatureQuery orderBySignatureActe($order = Criteria::ASC) Order by the signature_acte column
 * @method CommonHeliosCosignatureQuery orderByHorodatageActe($order = Criteria::ASC) Order by the horodatage_acte column
 * @method CommonHeliosCosignatureQuery orderByUntrusteddateActe($order = Criteria::ASC) Order by the untrusteddate_acte column
 * @method CommonHeliosCosignatureQuery orderByTailleActe($order = Criteria::ASC) Order by the taille_acte column
 * @method CommonHeliosCosignatureQuery orderByIdBlob($order = Criteria::ASC) Order by the id_Blob column
 * @method CommonHeliosCosignatureQuery orderByIdenveloppe($order = Criteria::ASC) Order by the idEnveloppe column
 *
 * @method CommonHeliosCosignatureQuery groupByIdFichier() Group by the id_fichier column
 * @method CommonHeliosCosignatureQuery groupByOrganisme() Group by the organisme column
 * @method CommonHeliosCosignatureQuery groupBySignatureActe() Group by the signature_acte column
 * @method CommonHeliosCosignatureQuery groupByHorodatageActe() Group by the horodatage_acte column
 * @method CommonHeliosCosignatureQuery groupByUntrusteddateActe() Group by the untrusteddate_acte column
 * @method CommonHeliosCosignatureQuery groupByTailleActe() Group by the taille_acte column
 * @method CommonHeliosCosignatureQuery groupByIdBlob() Group by the id_Blob column
 * @method CommonHeliosCosignatureQuery groupByIdenveloppe() Group by the idEnveloppe column
 *
 * @method CommonHeliosCosignatureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonHeliosCosignatureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonHeliosCosignatureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonHeliosCosignature findOne(PropelPDO $con = null) Return the first CommonHeliosCosignature matching the query
 * @method CommonHeliosCosignature findOneOrCreate(PropelPDO $con = null) Return the first CommonHeliosCosignature matching the query, or a new CommonHeliosCosignature object populated from the query conditions when no match is found
 *
 * @method CommonHeliosCosignature findOneByIdFichier(int $id_fichier) Return the first CommonHeliosCosignature filtered by the id_fichier column
 * @method CommonHeliosCosignature findOneByOrganisme(string $organisme) Return the first CommonHeliosCosignature filtered by the organisme column
 * @method CommonHeliosCosignature findOneBySignatureActe(string $signature_acte) Return the first CommonHeliosCosignature filtered by the signature_acte column
 * @method CommonHeliosCosignature findOneByHorodatageActe(resource $horodatage_acte) Return the first CommonHeliosCosignature filtered by the horodatage_acte column
 * @method CommonHeliosCosignature findOneByUntrusteddateActe(string $untrusteddate_acte) Return the first CommonHeliosCosignature filtered by the untrusteddate_acte column
 * @method CommonHeliosCosignature findOneByTailleActe(string $taille_acte) Return the first CommonHeliosCosignature filtered by the taille_acte column
 * @method CommonHeliosCosignature findOneByIdBlob(string $id_Blob) Return the first CommonHeliosCosignature filtered by the id_Blob column
 * @method CommonHeliosCosignature findOneByIdenveloppe(int $idEnveloppe) Return the first CommonHeliosCosignature filtered by the idEnveloppe column
 *
 * @method array findByIdFichier(int $id_fichier) Return CommonHeliosCosignature objects filtered by the id_fichier column
 * @method array findByOrganisme(string $organisme) Return CommonHeliosCosignature objects filtered by the organisme column
 * @method array findBySignatureActe(string $signature_acte) Return CommonHeliosCosignature objects filtered by the signature_acte column
 * @method array findByHorodatageActe(resource $horodatage_acte) Return CommonHeliosCosignature objects filtered by the horodatage_acte column
 * @method array findByUntrusteddateActe(string $untrusteddate_acte) Return CommonHeliosCosignature objects filtered by the untrusteddate_acte column
 * @method array findByTailleActe(string $taille_acte) Return CommonHeliosCosignature objects filtered by the taille_acte column
 * @method array findByIdBlob(string $id_Blob) Return CommonHeliosCosignature objects filtered by the id_Blob column
 * @method array findByIdenveloppe(int $idEnveloppe) Return CommonHeliosCosignature objects filtered by the idEnveloppe column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonHeliosCosignatureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonHeliosCosignatureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonHeliosCosignature', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonHeliosCosignatureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonHeliosCosignatureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonHeliosCosignatureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonHeliosCosignatureQuery) {
            return $criteria;
        }
        $query = new CommonHeliosCosignatureQuery();
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
                         A Primary key composition: [$id_fichier, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonHeliosCosignature|CommonHeliosCosignature[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonHeliosCosignaturePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosCosignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonHeliosCosignature A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_fichier`, `organisme`, `signature_acte`, `horodatage_acte`, `untrusteddate_acte`, `taille_acte`, `id_Blob`, `idEnveloppe` FROM `Helios_cosignature` WHERE `id_fichier` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonHeliosCosignature();
            $obj->hydrate($row);
            CommonHeliosCosignaturePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonHeliosCosignature|CommonHeliosCosignature[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonHeliosCosignature[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonHeliosCosignatureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonHeliosCosignaturePeer::ID_FICHIER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonHeliosCosignaturePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonHeliosCosignatureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonHeliosCosignaturePeer::ID_FICHIER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonHeliosCosignaturePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonHeliosCosignatureQuery The current query, for fluid interface
     */
    public function filterByIdFichier($idFichier = null, $comparison = null)
    {
        if (is_array($idFichier)) {
            $useMinMax = false;
            if (isset($idFichier['min'])) {
                $this->addUsingAlias(CommonHeliosCosignaturePeer::ID_FICHIER, $idFichier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFichier['max'])) {
                $this->addUsingAlias(CommonHeliosCosignaturePeer::ID_FICHIER, $idFichier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosCosignaturePeer::ID_FICHIER, $idFichier, $comparison);
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
     * @return CommonHeliosCosignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHeliosCosignaturePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the signature_acte column
     *
     * Example usage:
     * <code>
     * $query->filterBySignatureActe('fooValue');   // WHERE signature_acte = 'fooValue'
     * $query->filterBySignatureActe('%fooValue%'); // WHERE signature_acte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signatureActe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosCosignatureQuery The current query, for fluid interface
     */
    public function filterBySignatureActe($signatureActe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signatureActe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signatureActe)) {
                $signatureActe = str_replace('*', '%', $signatureActe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosCosignaturePeer::SIGNATURE_ACTE, $signatureActe, $comparison);
    }

    /**
     * Filter the query on the horodatage_acte column
     *
     * @param     mixed $horodatageActe The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosCosignatureQuery The current query, for fluid interface
     */
    public function filterByHorodatageActe($horodatageActe = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonHeliosCosignaturePeer::HORODATAGE_ACTE, $horodatageActe, $comparison);
    }

    /**
     * Filter the query on the untrusteddate_acte column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddateActe('fooValue');   // WHERE untrusteddate_acte = 'fooValue'
     * $query->filterByUntrusteddateActe('%fooValue%'); // WHERE untrusteddate_acte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $untrusteddateActe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosCosignatureQuery The current query, for fluid interface
     */
    public function filterByUntrusteddateActe($untrusteddateActe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($untrusteddateActe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $untrusteddateActe)) {
                $untrusteddateActe = str_replace('*', '%', $untrusteddateActe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosCosignaturePeer::UNTRUSTEDDATE_ACTE, $untrusteddateActe, $comparison);
    }

    /**
     * Filter the query on the taille_acte column
     *
     * Example usage:
     * <code>
     * $query->filterByTailleActe('fooValue');   // WHERE taille_acte = 'fooValue'
     * $query->filterByTailleActe('%fooValue%'); // WHERE taille_acte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tailleActe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosCosignatureQuery The current query, for fluid interface
     */
    public function filterByTailleActe($tailleActe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tailleActe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tailleActe)) {
                $tailleActe = str_replace('*', '%', $tailleActe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosCosignaturePeer::TAILLE_ACTE, $tailleActe, $comparison);
    }

    /**
     * Filter the query on the id_Blob column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlob('fooValue');   // WHERE id_Blob = 'fooValue'
     * $query->filterByIdBlob('%fooValue%'); // WHERE id_Blob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idBlob The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosCosignatureQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idBlob)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idBlob)) {
                $idBlob = str_replace('*', '%', $idBlob);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosCosignaturePeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the idEnveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdenveloppe(1234); // WHERE idEnveloppe = 1234
     * $query->filterByIdenveloppe(array(12, 34)); // WHERE idEnveloppe IN (12, 34)
     * $query->filterByIdenveloppe(array('min' => 12)); // WHERE idEnveloppe >= 12
     * $query->filterByIdenveloppe(array('max' => 12)); // WHERE idEnveloppe <= 12
     * </code>
     *
     * @param     mixed $idenveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosCosignatureQuery The current query, for fluid interface
     */
    public function filterByIdenveloppe($idenveloppe = null, $comparison = null)
    {
        if (is_array($idenveloppe)) {
            $useMinMax = false;
            if (isset($idenveloppe['min'])) {
                $this->addUsingAlias(CommonHeliosCosignaturePeer::IDENVELOPPE, $idenveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idenveloppe['max'])) {
                $this->addUsingAlias(CommonHeliosCosignaturePeer::IDENVELOPPE, $idenveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosCosignaturePeer::IDENVELOPPE, $idenveloppe, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonHeliosCosignature $commonHeliosCosignature Object to remove from the list of results
     *
     * @return CommonHeliosCosignatureQuery The current query, for fluid interface
     */
    public function prune($commonHeliosCosignature = null)
    {
        if ($commonHeliosCosignature) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonHeliosCosignaturePeer::ID_FICHIER), $commonHeliosCosignature->getIdFichier(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonHeliosCosignaturePeer::ORGANISME), $commonHeliosCosignature->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
