<?php


/**
 * Base class that represents a query for the 'chorus_noms_fichiers' table.
 *
 * 
 *
 * @method CommonChorusNomsFichiersQuery orderByIdEchange($order = Criteria::ASC) Order by the id_echange column
 * @method CommonChorusNomsFichiersQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonChorusNomsFichiersQuery orderByAcronymeOrganisme($order = Criteria::ASC) Order by the acronyme_organisme column
 * @method CommonChorusNomsFichiersQuery orderByTypeFichier($order = Criteria::ASC) Order by the type_fichier column
 * @method CommonChorusNomsFichiersQuery orderByDateAjout($order = Criteria::ASC) Order by the date_ajout column
 *
 * @method CommonChorusNomsFichiersQuery groupByIdEchange() Group by the id_echange column
 * @method CommonChorusNomsFichiersQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonChorusNomsFichiersQuery groupByAcronymeOrganisme() Group by the acronyme_organisme column
 * @method CommonChorusNomsFichiersQuery groupByTypeFichier() Group by the type_fichier column
 * @method CommonChorusNomsFichiersQuery groupByDateAjout() Group by the date_ajout column
 *
 * @method CommonChorusNomsFichiersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonChorusNomsFichiersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonChorusNomsFichiersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonChorusNomsFichiers findOne(PropelPDO $con = null) Return the first CommonChorusNomsFichiers matching the query
 * @method CommonChorusNomsFichiers findOneOrCreate(PropelPDO $con = null) Return the first CommonChorusNomsFichiers matching the query, or a new CommonChorusNomsFichiers object populated from the query conditions when no match is found
 *
 * @method CommonChorusNomsFichiers findOneByIdEchange(int $id_echange) Return the first CommonChorusNomsFichiers filtered by the id_echange column
 * @method CommonChorusNomsFichiers findOneByNomFichier(string $nom_fichier) Return the first CommonChorusNomsFichiers filtered by the nom_fichier column
 * @method CommonChorusNomsFichiers findOneByAcronymeOrganisme(string $acronyme_organisme) Return the first CommonChorusNomsFichiers filtered by the acronyme_organisme column
 * @method CommonChorusNomsFichiers findOneByTypeFichier(string $type_fichier) Return the first CommonChorusNomsFichiers filtered by the type_fichier column
 * @method CommonChorusNomsFichiers findOneByDateAjout(string $date_ajout) Return the first CommonChorusNomsFichiers filtered by the date_ajout column
 *
 * @method array findByIdEchange(int $id_echange) Return CommonChorusNomsFichiers objects filtered by the id_echange column
 * @method array findByNomFichier(string $nom_fichier) Return CommonChorusNomsFichiers objects filtered by the nom_fichier column
 * @method array findByAcronymeOrganisme(string $acronyme_organisme) Return CommonChorusNomsFichiers objects filtered by the acronyme_organisme column
 * @method array findByTypeFichier(string $type_fichier) Return CommonChorusNomsFichiers objects filtered by the type_fichier column
 * @method array findByDateAjout(string $date_ajout) Return CommonChorusNomsFichiers objects filtered by the date_ajout column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonChorusNomsFichiersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonChorusNomsFichiersQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonChorusNomsFichiers', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonChorusNomsFichiersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonChorusNomsFichiersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonChorusNomsFichiersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonChorusNomsFichiersQuery) {
            return $criteria;
        }
        $query = new CommonChorusNomsFichiersQuery();
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
                         A Primary key composition: [$id_echange, $nom_fichier]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonChorusNomsFichiers|CommonChorusNomsFichiers[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonChorusNomsFichiersPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusNomsFichiersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonChorusNomsFichiers A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_echange`, `nom_fichier`, `acronyme_organisme`, `type_fichier`, `date_ajout` FROM `chorus_noms_fichiers` WHERE `id_echange` = :p0 AND `nom_fichier` = :p1';
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
            $obj = new CommonChorusNomsFichiers();
            $obj->hydrate($row);
            CommonChorusNomsFichiersPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonChorusNomsFichiers|CommonChorusNomsFichiers[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonChorusNomsFichiers[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonChorusNomsFichiersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonChorusNomsFichiersPeer::ID_ECHANGE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonChorusNomsFichiersPeer::NOM_FICHIER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonChorusNomsFichiersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonChorusNomsFichiersPeer::ID_ECHANGE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonChorusNomsFichiersPeer::NOM_FICHIER, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_echange column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEchange(1234); // WHERE id_echange = 1234
     * $query->filterByIdEchange(array(12, 34)); // WHERE id_echange IN (12, 34)
     * $query->filterByIdEchange(array('min' => 12)); // WHERE id_echange >= 12
     * $query->filterByIdEchange(array('max' => 12)); // WHERE id_echange <= 12
     * </code>
     *
     * @param     mixed $idEchange The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusNomsFichiersQuery The current query, for fluid interface
     */
    public function filterByIdEchange($idEchange = null, $comparison = null)
    {
        if (is_array($idEchange)) {
            $useMinMax = false;
            if (isset($idEchange['min'])) {
                $this->addUsingAlias(CommonChorusNomsFichiersPeer::ID_ECHANGE, $idEchange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEchange['max'])) {
                $this->addUsingAlias(CommonChorusNomsFichiersPeer::ID_ECHANGE, $idEchange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusNomsFichiersPeer::ID_ECHANGE, $idEchange, $comparison);
    }

    /**
     * Filter the query on the nom_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE nom_fichier = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE nom_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusNomsFichiersQuery The current query, for fluid interface
     */
    public function filterByNomFichier($nomFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichier)) {
                $nomFichier = str_replace('*', '%', $nomFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusNomsFichiersPeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the acronyme_organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronymeOrganisme('fooValue');   // WHERE acronyme_organisme = 'fooValue'
     * $query->filterByAcronymeOrganisme('%fooValue%'); // WHERE acronyme_organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronymeOrganisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusNomsFichiersQuery The current query, for fluid interface
     */
    public function filterByAcronymeOrganisme($acronymeOrganisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronymeOrganisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronymeOrganisme)) {
                $acronymeOrganisme = str_replace('*', '%', $acronymeOrganisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusNomsFichiersPeer::ACRONYME_ORGANISME, $acronymeOrganisme, $comparison);
    }

    /**
     * Filter the query on the type_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeFichier('fooValue');   // WHERE type_fichier = 'fooValue'
     * $query->filterByTypeFichier('%fooValue%'); // WHERE type_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusNomsFichiersQuery The current query, for fluid interface
     */
    public function filterByTypeFichier($typeFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeFichier)) {
                $typeFichier = str_replace('*', '%', $typeFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusNomsFichiersPeer::TYPE_FICHIER, $typeFichier, $comparison);
    }

    /**
     * Filter the query on the date_ajout column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAjout('fooValue');   // WHERE date_ajout = 'fooValue'
     * $query->filterByDateAjout('%fooValue%'); // WHERE date_ajout LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateAjout The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusNomsFichiersQuery The current query, for fluid interface
     */
    public function filterByDateAjout($dateAjout = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateAjout)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateAjout)) {
                $dateAjout = str_replace('*', '%', $dateAjout);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusNomsFichiersPeer::DATE_AJOUT, $dateAjout, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonChorusNomsFichiers $commonChorusNomsFichiers Object to remove from the list of results
     *
     * @return CommonChorusNomsFichiersQuery The current query, for fluid interface
     */
    public function prune($commonChorusNomsFichiers = null)
    {
        if ($commonChorusNomsFichiers) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonChorusNomsFichiersPeer::ID_ECHANGE), $commonChorusNomsFichiers->getIdEchange(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonChorusNomsFichiersPeer::NOM_FICHIER), $commonChorusNomsFichiers->getNomFichier(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
