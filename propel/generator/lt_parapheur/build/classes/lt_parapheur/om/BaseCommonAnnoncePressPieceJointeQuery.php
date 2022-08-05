<?php


/**
 * Base class that represents a query for the 'Annonce_Press_PieceJointe' table.
 *
 * 
 *
 * @method CommonAnnoncePressPieceJointeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAnnoncePressPieceJointeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAnnoncePressPieceJointeQuery orderByIdAnnoncePress($order = Criteria::ASC) Order by the id_annonce_press column
 * @method CommonAnnoncePressPieceJointeQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonAnnoncePressPieceJointeQuery orderByPiece($order = Criteria::ASC) Order by the piece column
 * @method CommonAnnoncePressPieceJointeQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonAnnoncePressPieceJointeQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonAnnoncePressPieceJointeQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonAnnoncePressPieceJointeQuery orderByFichierGenere($order = Criteria::ASC) Order by the fichier_genere column
 *
 * @method CommonAnnoncePressPieceJointeQuery groupById() Group by the id column
 * @method CommonAnnoncePressPieceJointeQuery groupByOrganisme() Group by the organisme column
 * @method CommonAnnoncePressPieceJointeQuery groupByIdAnnoncePress() Group by the id_annonce_press column
 * @method CommonAnnoncePressPieceJointeQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonAnnoncePressPieceJointeQuery groupByPiece() Group by the piece column
 * @method CommonAnnoncePressPieceJointeQuery groupByHorodatage() Group by the horodatage column
 * @method CommonAnnoncePressPieceJointeQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonAnnoncePressPieceJointeQuery groupByTaille() Group by the taille column
 * @method CommonAnnoncePressPieceJointeQuery groupByFichierGenere() Group by the fichier_genere column
 *
 * @method CommonAnnoncePressPieceJointeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAnnoncePressPieceJointeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAnnoncePressPieceJointeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAnnoncePressPieceJointe findOne(PropelPDO $con = null) Return the first CommonAnnoncePressPieceJointe matching the query
 * @method CommonAnnoncePressPieceJointe findOneOrCreate(PropelPDO $con = null) Return the first CommonAnnoncePressPieceJointe matching the query, or a new CommonAnnoncePressPieceJointe object populated from the query conditions when no match is found
 *
 * @method CommonAnnoncePressPieceJointe findOneById(int $id) Return the first CommonAnnoncePressPieceJointe filtered by the id column
 * @method CommonAnnoncePressPieceJointe findOneByOrganisme(string $organisme) Return the first CommonAnnoncePressPieceJointe filtered by the organisme column
 * @method CommonAnnoncePressPieceJointe findOneByIdAnnoncePress(int $id_annonce_press) Return the first CommonAnnoncePressPieceJointe filtered by the id_annonce_press column
 * @method CommonAnnoncePressPieceJointe findOneByNomFichier(string $nom_fichier) Return the first CommonAnnoncePressPieceJointe filtered by the nom_fichier column
 * @method CommonAnnoncePressPieceJointe findOneByPiece(int $piece) Return the first CommonAnnoncePressPieceJointe filtered by the piece column
 * @method CommonAnnoncePressPieceJointe findOneByHorodatage(resource $horodatage) Return the first CommonAnnoncePressPieceJointe filtered by the horodatage column
 * @method CommonAnnoncePressPieceJointe findOneByUntrusteddate(string $untrusteddate) Return the first CommonAnnoncePressPieceJointe filtered by the untrusteddate column
 * @method CommonAnnoncePressPieceJointe findOneByTaille(string $taille) Return the first CommonAnnoncePressPieceJointe filtered by the taille column
 * @method CommonAnnoncePressPieceJointe findOneByFichierGenere(string $fichier_genere) Return the first CommonAnnoncePressPieceJointe filtered by the fichier_genere column
 *
 * @method array findById(int $id) Return CommonAnnoncePressPieceJointe objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonAnnoncePressPieceJointe objects filtered by the organisme column
 * @method array findByIdAnnoncePress(int $id_annonce_press) Return CommonAnnoncePressPieceJointe objects filtered by the id_annonce_press column
 * @method array findByNomFichier(string $nom_fichier) Return CommonAnnoncePressPieceJointe objects filtered by the nom_fichier column
 * @method array findByPiece(int $piece) Return CommonAnnoncePressPieceJointe objects filtered by the piece column
 * @method array findByHorodatage(resource $horodatage) Return CommonAnnoncePressPieceJointe objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonAnnoncePressPieceJointe objects filtered by the untrusteddate column
 * @method array findByTaille(string $taille) Return CommonAnnoncePressPieceJointe objects filtered by the taille column
 * @method array findByFichierGenere(string $fichier_genere) Return CommonAnnoncePressPieceJointe objects filtered by the fichier_genere column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAnnoncePressPieceJointeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAnnoncePressPieceJointeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAnnoncePressPieceJointe', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAnnoncePressPieceJointeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAnnoncePressPieceJointeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAnnoncePressPieceJointeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAnnoncePressPieceJointeQuery) {
            return $criteria;
        }
        $query = new CommonAnnoncePressPieceJointeQuery();
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
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonAnnoncePressPieceJointe|CommonAnnoncePressPieceJointe[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAnnoncePressPieceJointePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAnnoncePressPieceJointe A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_annonce_press`, `nom_fichier`, `piece`, `horodatage`, `untrusteddate`, `taille`, `fichier_genere` FROM `Annonce_Press_PieceJointe` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonAnnoncePressPieceJointe();
            $obj->hydrate($row);
            CommonAnnoncePressPieceJointePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonAnnoncePressPieceJointe|CommonAnnoncePressPieceJointe[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAnnoncePressPieceJointe[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAnnoncePressPieceJointeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAnnoncePressPieceJointeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonAnnoncePressPieceJointePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonAnnoncePressPieceJointePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonAnnoncePressPieceJointeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::ID, $id, $comparison);
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
     * @return CommonAnnoncePressPieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_annonce_press column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAnnoncePress(1234); // WHERE id_annonce_press = 1234
     * $query->filterByIdAnnoncePress(array(12, 34)); // WHERE id_annonce_press IN (12, 34)
     * $query->filterByIdAnnoncePress(array('min' => 12)); // WHERE id_annonce_press >= 12
     * $query->filterByIdAnnoncePress(array('max' => 12)); // WHERE id_annonce_press <= 12
     * </code>
     *
     * @param     mixed $idAnnoncePress The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressPieceJointeQuery The current query, for fluid interface
     */
    public function filterByIdAnnoncePress($idAnnoncePress = null, $comparison = null)
    {
        if (is_array($idAnnoncePress)) {
            $useMinMax = false;
            if (isset($idAnnoncePress['min'])) {
                $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::ID_ANNONCE_PRESS, $idAnnoncePress['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAnnoncePress['max'])) {
                $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::ID_ANNONCE_PRESS, $idAnnoncePress['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::ID_ANNONCE_PRESS, $idAnnoncePress, $comparison);
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
     * @return CommonAnnoncePressPieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the piece column
     *
     * Example usage:
     * <code>
     * $query->filterByPiece(1234); // WHERE piece = 1234
     * $query->filterByPiece(array(12, 34)); // WHERE piece IN (12, 34)
     * $query->filterByPiece(array('min' => 12)); // WHERE piece >= 12
     * $query->filterByPiece(array('max' => 12)); // WHERE piece <= 12
     * </code>
     *
     * @param     mixed $piece The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressPieceJointeQuery The current query, for fluid interface
     */
    public function filterByPiece($piece = null, $comparison = null)
    {
        if (is_array($piece)) {
            $useMinMax = false;
            if (isset($piece['min'])) {
                $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::PIECE, $piece['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($piece['max'])) {
                $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::PIECE, $piece['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::PIECE, $piece, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressPieceJointeQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::HORODATAGE, $horodatage, $comparison);
    }

    /**
     * Filter the query on the untrusteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddate('fooValue');   // WHERE untrusteddate = 'fooValue'
     * $query->filterByUntrusteddate('%fooValue%'); // WHERE untrusteddate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $untrusteddate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressPieceJointeQuery The current query, for fluid interface
     */
    public function filterByUntrusteddate($untrusteddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($untrusteddate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $untrusteddate)) {
                $untrusteddate = str_replace('*', '%', $untrusteddate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
    }

    /**
     * Filter the query on the taille column
     *
     * Example usage:
     * <code>
     * $query->filterByTaille('fooValue');   // WHERE taille = 'fooValue'
     * $query->filterByTaille('%fooValue%'); // WHERE taille LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressPieceJointeQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taille)) {
                $taille = str_replace('*', '%', $taille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::TAILLE, $taille, $comparison);
    }

    /**
     * Filter the query on the fichier_genere column
     *
     * Example usage:
     * <code>
     * $query->filterByFichierGenere('fooValue');   // WHERE fichier_genere = 'fooValue'
     * $query->filterByFichierGenere('%fooValue%'); // WHERE fichier_genere LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fichierGenere The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressPieceJointeQuery The current query, for fluid interface
     */
    public function filterByFichierGenere($fichierGenere = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fichierGenere)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fichierGenere)) {
                $fichierGenere = str_replace('*', '%', $fichierGenere);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPieceJointePeer::FICHIER_GENERE, $fichierGenere, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAnnoncePressPieceJointe $commonAnnoncePressPieceJointe Object to remove from the list of results
     *
     * @return CommonAnnoncePressPieceJointeQuery The current query, for fluid interface
     */
    public function prune($commonAnnoncePressPieceJointe = null)
    {
        if ($commonAnnoncePressPieceJointe) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonAnnoncePressPieceJointePeer::ID), $commonAnnoncePressPieceJointe->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonAnnoncePressPieceJointePeer::ORGANISME), $commonAnnoncePressPieceJointe->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
